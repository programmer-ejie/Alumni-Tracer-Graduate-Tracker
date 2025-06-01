<?php

namespace App\Http\Controllers;
use PHPInsight\Sentiment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdminAccount;
use App\Models\AlumniInfo;
use App\Models\AlumniSurvey;
use App\Models\Event;
use Illuminate\Support\Facades\Http;
use App\Models\PageView;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

        private function getAuthenticatedAdmin(){
            if (!session()->has('admin_logged_in') || !session('admin_id')) {
                    return null;
            }

            return AdminAccount::find(session('admin_id'));
        }
         public function index(){

            $admin = $this->getAuthenticatedAdmin();
            if (!$admin) {
                return redirect('/')->with('error', 'Please log in first.');
            }


               // [start] page view tracking
                $alumniIds = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->pluck('id');


                $totalPageViews = PageView::where('page', 'landing')
                    ->whereIn('alumni_id', $alumniIds)
                    ->count();

                $pageViewsLastWeek = PageView::where('page', 'landing')
                    ->whereIn('alumni_id', $alumniIds)
                    ->whereBetween('created_at', [
                        now()->subWeeks(2)->startOfWeek(),
                        now()->subWeek()->endOfWeek()
                    ])->count();

                $pageViewsThisWeek = PageView::where('page', 'landing')
                    ->whereIn('alumni_id', $alumniIds)
                    ->whereBetween('created_at', [
                        now()->startOfWeek(),
                        now()->endOfWeek()
                    ])->count();

                $pageViewsPercent = $pageViewsLastWeek > 0
                    ? round((($pageViewsThisWeek - $pageViewsLastWeek) / $pageViewsLastWeek) * 100, 1)
                    : 100;

                $extraPageViews = $pageViewsThisWeek - $pageViewsLastWeek;

                // [end] page view tracking

              // [start] alumni user count
                $totalUsers = User::where('school_id', $admin->school_id)->count()
                    + AlumniInfo::where('school_id', $admin->school_id)->count();

                $usersLastWeek = User::where('school_id', $admin->school_id)
                        ->whereBetween('created_at', [
                            now()->subWeeks(2)->startOfWeek(),
                            now()->subWeek()->endOfWeek()
                        ])->count()
                    + AlumniInfo::where('school_id', $admin->school_id)
                        ->whereBetween('created_at', [
                            now()->subWeeks(2)->startOfWeek(),
                            now()->subWeek()->endOfWeek()
                        ])->count();

                $usersThisWeek = User::where('school_id', $admin->school_id)
                        ->whereBetween('created_at', [
                            now()->startOfWeek(),
                            now()->endOfWeek()
                        ])->count()
                    + AlumniInfo::where('school_id', $admin->school_id)
                        ->whereBetween('created_at', [
                            now()->startOfWeek(),
                            now()->endOfWeek()
                        ])->count();

                $usersPercent = $usersLastWeek > 0
                    ? round((($usersThisWeek - $usersLastWeek) / $usersLastWeek) * 100, 1)
                    : 100;

                $extraUsers = $usersThisWeek - $usersLastWeek;
                // [end] alumni user count

              // [start] alumni survey count

               
                $alumniIds = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->pluck('id');

               
                $totalSurveys = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)->count();

                $surveysLastWeek = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)
                    ->whereBetween('created_at', [
                        now()->subWeeks(2)->startOfWeek(),
                        now()->subWeek()->endOfWeek()
                    ])->count();

                $surveysThisWeek = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)
                    ->whereBetween('created_at', [
                        now()->startOfWeek(),
                        now()->endOfWeek()
                    ])->count();

                $surveysPercent = $surveysLastWeek > 0
                    ? round((($surveysThisWeek - $surveysLastWeek) / $surveysLastWeek) * 100, 1)
                    : 100;

                $extraSurveys = $surveysThisWeek - $surveysLastWeek;

                // [end] alumni survey count

              // [start] NLP Sentiment Score
                $positiveWords = file(app_path('NLP/data/positive.txt'), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $negativeWords = file(app_path('NLP/data/negative.txt'), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                // Get alumni IDs for this admin's school
                $alumniIds = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->pluck('id');

                // Only get surveys from those alumni
                $surveys = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)
                    ->latest()
                    ->take(10)
                    ->get();

                $totalPos = 0;
                $totalNeg = 0;
                $totalWords = 0;

                foreach ($surveys as $survey) {
                    $answers = array_filter(
                        array_map('strval', $survey->only([
                            'q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                            'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20',
                            'q21','q22','q23','q24','q25','q26','q27','q28','q29','q30',
                            'q31','q32','q33','q34','q35','q36','q37','q38','q39','q40',
                        ]))
                    );
                    $text = strtolower(implode(' ', $answers));
                    $words = str_word_count($text, 1);

                    foreach ($words as $word) {
                        if (in_array($word, $positiveWords)) $totalPos++;
                        if (in_array($word, $negativeWords)) $totalNeg++;
                        $totalWords++;
                    }
                }

                if ($totalWords === 0) {
                    $nlpScore = 0;
                    $nlpPercent = 0;
                    $nlpTrend = 'up';
                    $nlpSentiment = 'Neutral';
                } else {
                    if ($totalPos > $totalNeg) {
                        $nlpSentiment = 'Positive';
                        $nlpTrend = 'up';
                        $nlpScore = $totalPos / $totalWords;
                    } elseif ($totalNeg > $totalPos) {
                        $nlpSentiment = 'Negative';
                        $nlpTrend = 'down';
                        $nlpScore = $totalNeg / $totalWords;
                    } else {
                        $nlpSentiment = 'Neutral';
                        $nlpTrend = 'up';
                        $nlpScore = 0.5;
                    }
                    $nlpPercent = round($nlpScore * 100);
                }
                // [end] NLP Sentiment Score

               // [start] NLP Graph Data   
                $alumniIds = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->pluck('id');
             
                $surveysByMonth = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)
                    ->select('id', 'created_at',
                        'q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                        'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20',
                        'q21','q22','q23','q24','q25','q26','q27','q28','q29','q30',
                        'q31','q32','q33','q34','q35','q36','q37','q38','q39','q40'
                    )
                    ->get()
                    ->groupBy(function($survey) {
                        return \Carbon\Carbon::parse($survey->created_at)->format('Y-m');
                    });

                $sentimentStats = [];

                foreach ($surveysByMonth as $month => $surveys) {
                    $positive = 0;
                    $negative = 0;
                    $neutral = 0;

                    foreach ($surveys as $survey) {
                        $answers = array_filter(
                            array_map('strval', $survey->only([
                                'q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                                'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20',
                                'q21','q22','q23','q24','q25','q26','q27','q28','q29','q30',
                                'q31','q32','q33','q34','q35','q36','q37','q38','q39','q40',
                            ]))
                        );
                        $text = strtolower(implode(' ', $answers));
                        $words = str_word_count($text, 1);

                        $totalPos = 0;
                        $totalNeg = 0;

                        foreach ($words as $word) {
                            if (in_array($word, $positiveWords)) $totalPos++;
                            if (in_array($word, $negativeWords)) $totalNeg++;
                        }

                        if ($totalPos > $totalNeg) {
                            $positive++;
                        } elseif ($totalNeg > $totalPos) {
                            $negative++;
                        } else {
                            $neutral++;
                        }
                    }

                    $sentimentStats[] = [
                        'month' => $month,
                        'positive' => $positive,
                        'negative' => $negative,
                        'neutral' => $neutral,
                    ];
                }
                // [end] NLP Graph Data


             // [start] Survey per Day

               
                $alumniIds = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->pluck('id');

            
                $surveysByDay = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)
                    ->select(
                        'id', 'created_at',
                        'q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                        'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20',
                        'q21','q22','q23','q24','q25','q26','q27','q28','q29','q30',
                        'q31','q32','q33','q34','q35','q36','q37','q38','q39','q40'
                    )
                    ->get()
                    ->groupBy(function($survey) {
                    
                        return \Carbon\Carbon::parse($survey->created_at)->format('Y-m-d');
                    });

                $sentimentStatsDay = [];

                foreach ($surveysByDay as $day => $surveys) {
                    $positive = 0;
                    $negative = 0;
                    $neutral = 0;

                    foreach ($surveys as $survey) {
                        $answers = array_filter(
                            array_map('strval', $survey->only([
                                'q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                                'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20',
                                'q21','q22','q23','q24','q25','q26','q27','q28','q29','q30',
                                'q31','q32','q33','q34','q35','q36','q37','q38','q39','q40',
                            ]))
                        );
                        $text = strtolower(implode(' ', $answers));
                        $words = str_word_count($text, 1);

                        $totalPos = 0;
                        $totalNeg = 0;

                        foreach ($words as $word) {
                            if (in_array($word, $positiveWords)) $totalPos++;
                            if (in_array($word, $negativeWords)) $totalNeg++;
                        }

                        if ($totalPos > $totalNeg) {
                            $positive++;
                        } elseif ($totalNeg > $totalPos) {
                            $negative++;
                        } else {
                            $neutral++;
                        }
                    }

                    $sentimentStatsDay[] = [
                        'day' => $day,
                        'positive' => $positive,
                        'negative' => $negative,
                        'neutral' => $neutral,
                    ];
                }

                // [end] Survey per Day


          
            // [start] Event Count
     
            $adminIds = \App\Models\AdminAccount::where('school_id', $admin->school_id)->pluck('id');

            $eventsPerMonth = Event::whereIn('admin_id', $adminIds)
                ->selectRaw("DATE_FORMAT(date, '%Y-%m') as month, COUNT(*) as count")
                ->groupBy('month')
                ->orderBy('month')
                ->get();

         
            $eventsThisMonth = Event::whereIn('admin_id', $adminIds)
                ->whereMonth('date', now()->month)
                ->whereYear('date', now()->year)
                ->count();

      
            $totalAttendees = 0;
            foreach (Event::whereIn('admin_id', $adminIds)->withCount('alumni')->get() as $event) {
                $totalAttendees += $event->alumni_count;
            }

         
            $mostPopularEvent = Event::whereIn('admin_id', $adminIds)
                ->withCount('alumni')
                ->orderByDesc('alumni_count')
                ->value('title');

            // [end] Event Count

               // [start] Week Summary
                $alumniIds = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->pluck('id');

                $surveysPerWeek = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)
                    ->selectRaw("YEARWEEK(created_at, 1) as week, COUNT(*) as count")
                    ->groupBy('week')
                    ->orderBy('week')
                    ->get();
                // [end] Week Summary

                return view('admin.dashboard', compact(
                    'admin',
                    'totalPageViews',
                    'pageViewsPercent',
                    'extraPageViews',
                    'totalUsers',
                    'usersPercent',
                    'extraUsers',
                    'totalSurveys',
                    'surveysPercent',
                    'extraSurveys',
                    'nlpScore',
                    'nlpPercent',
                    'nlpTrend',
                    'nlpSentiment',
                    'sentimentStats',
                    'sentimentStatsDay',
                    'eventsPerMonth',
                    'eventsThisMonth',
                    'totalAttendees',
                    'mostPopularEvent',
                    'surveysPerWeek'            
                ));
        }
}