<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPInsight\Sentiment;
use App\Models\User;
use App\Models\AdminAccount;
use App\Models\AlumniInfo;
use App\Models\AlumniSurvey;
use App\Models\Event;
use Illuminate\Support\Facades\Http;
use App\Models\PageView;
use App\Models\School;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperAdminAccount;

class SuperController extends Controller
{
      private function getAuthenticatedSuper(){
            if (!session()->has('admin_logged_in') || !session('admin_id')) {
                    return null;
            }

            return SuperAdminAccount::find(session('admin_id'));
        }
         public function index(){

            $admin = $this->getAuthenticatedSuper();
            if (!$admin) {
                return redirect('/')->with('error', 'Please log in first.');
            }


                //  [start] page view tracking
                    $totalPageViews = PageView::where('page', 'landing')->count();

                    $pageViewsLastWeek = PageView::where('page', 'landing')
                        ->whereBetween('created_at', [
                            now()->subWeeks(2)->startOfWeek(),
                            now()->subWeek()->endOfWeek()
                        ])->count();

                    $pageViewsThisWeek = PageView::where('page', 'landing')
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
                    $totalUsers = User::count() + AlumniInfo::count();

                    $usersLastWeek = User::whereBetween('created_at', [
                            now()->subWeeks(2)->startOfWeek(),
                            now()->subWeek()->endOfWeek()
                        ])->count()
                        + AlumniInfo::whereBetween('created_at', [
                            now()->subWeeks(2)->startOfWeek(),
                            now()->subWeek()->endOfWeek()
                        ])->count();

                    $usersThisWeek = User::whereBetween('created_at', [
                            now()->startOfWeek(),
                            now()->endOfWeek()
                        ])->count()
                        + AlumniInfo::whereBetween('created_at', [
                            now()->startOfWeek(),
                            now()->endOfWeek()
                        ])->count();

                    $usersPercent = $usersLastWeek > 0
                        ? round((($usersThisWeek - $usersLastWeek) / $usersLastWeek) * 100, 1)
                        : 100;

                    $extraUsers = $usersThisWeek - $usersLastWeek;
                    
                // [end] alumni user count

                // [start] alumni survey count

                    $totalSurveys = AlumniSurvey::count();

                    $surveysLastWeek = AlumniSurvey::whereBetween('created_at', [
                            now()->subWeeks(2)->startOfWeek(),
                            now()->subWeek()->endOfWeek()
                        ])->count();

                    $surveysThisWeek = AlumniSurvey::whereBetween('created_at', [
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

                $surveys = AlumniSurvey::latest()->take(10)->get();
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
                   $surveysByMonth = AlumniSurvey::select('id', 'created_at',
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


                // [start] Survey per Day]

                $surveysByDay = AlumniSurvey::select(
                        'id', 'created_at',
                        'q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                        'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20',
                        'q21','q22','q23','q24','q25','q26','q27','q28','q29','q30',
                        'q31','q32','q33','q34','q35','q36','q37','q38','q39','q40'
                    )
                    ->get()
                    ->groupBy(function($survey) {
                        // Group by date (Y-m-d)
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

                $eventsPerMonth = Event::selectRaw("DATE_FORMAT(date, '%Y-%m') as month, COUNT(*) as count")
                ->groupBy('month')
                ->orderBy('month')
                ->get();

                $eventsThisMonth = Event::whereMonth('date', now()->month)->whereYear('date', now()->year)->count();
                $totalAttendees = 0;
                foreach (Event::withCount('alumni')->get() as $event) {
                    $totalAttendees += $event->alumni_count;
                }
                $mostPopularEvent = Event::withCount('alumni')
                ->orderByDesc('alumni_count')
                ->value('title'); 
                // [end] Event Count

                // [start] Week Summary
                $surveysPerWeek = AlumniSurvey::selectRaw("YEARWEEK(created_at, 1) as week, COUNT(*) as count")
                ->groupBy('week')
                ->orderBy('week')
                ->get();
                // [end] Week Summary

                return view('super_admin.dashboard', compact(
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

       public function schoolApproved() {
            $admin = $this->getAuthenticatedSuper();
            if (!$admin) {
                return redirect('/')->with('error', 'Please log in first.');
            }
            $schools = School::all(); 
            return view('super_admin.school', compact('admin', 'schools'));
        }

       
            public function storeSchool(Request $request){
                $request->validate([
                    'school_name' => 'required|string|max:255',
                    'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $logoPath = null;
                if ($request->hasFile('logo')) {
                    $file = $request->file('logo');
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('logos'), $filename);
                    $logoPath = $filename; // Save only the filename
                }

                School::create([
                    'school_name' => $request->school_name,
                    'logo' => $logoPath,
                ]);

                return redirect()->route('super_admin.school')->with('success', 'School registered successfully!');
            }

            public function updateSchool(Request $request, $id){
                $request->validate([
                    'school_name' => 'required|string|max:255',
                    'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $school = School::findOrFail($id);

                $logoPath = $school->logo;
                if ($request->hasFile('logo')) {
                    $file = $request->file('logo');
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('logos'), $filename);
                    $logoPath = $filename;
                }

                $school->update([
                    'school_name' => $request->school_name,
                    'logo' => $logoPath,
                ]);

                return redirect()->route('super_admin.school')->with('success', 'School updated successfully!');
            }
         public function destroySchool($id){
                    $school = School::findOrFail($id);
                    $school->delete();

                    return redirect()->route('super_admin.school')->with('success', 'School deleted successfully!');
                }
        

  
        public function adminApproved() {
            $admin = $this->getAuthenticatedSuper();
            if (!$admin) {
                return redirect('/')->with('error', 'Please log in first.');
            }
            $schools = School::all();
            return view('super_admin.admin', compact('admin', 'schools'));  
        }

       public function adminIndex(){
                $admin = $this->getAuthenticatedSuper(); 
                $admins = AdminAccount::with('school')->get();
                $schools = School::all();
                return view('super_admin.admin', compact('admin', 'admins', 'schools'));
            }

        

                public function adminStore(Request $request)
                {
                    $request->validate([
                        'fullname' => 'required|string|max:255',
                        'email' => 'required|email|unique:admin_accounts,email',
                        'password' => [
                            'required',
                            'string',
                            'min:3'
                        ],
                        'school_id' => 'required|exists:schools,id',
                    ]);

                    AdminAccount::create([
                        'fullname' => $request->fullname,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                        'school_id' => $request->school_id,
                    ]);

                    return redirect()->route('super_admin.accounts')->with('success', 'Admin created!');
                }

            public function adminUpdate(Request $request, $id)
            {
                $request->validate([
                    'fullname' => 'required|string|max:255',
                    'email' => 'required|email|unique:admin_accounts,email,' . $id,
                ]);

                $admin = AdminAccount::findOrFail($id);
                $admin->fullname = $request->fullname;
                $admin->email = $request->email;
                $admin->save();

                return redirect()->route('super_admin.accounts')->with('success', 'Admin updated successfully!');
            }

            public function adminDestroy($id)
                {
                    $admin = AdminAccount::findOrFail($id);
                    $admin->delete();

                    return redirect()->route('super_admin.accounts')->with('success', 'Admin deleted successfully!');
                }

   
}
