<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumniInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\AlumniSurvey;
use App\Models\Event; 
use App\Models\Notification;
use App\Models\AdminAccount;
use App\Models\School;

class AlumniController extends Controller
{
    function gotoAlumni()
    {
        return view('alumni_gmail');
    }

   function gotoDashboard()
        {
        $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            } 
            $adminIds = \App\Models\AdminAccount::where('school_id', $alumni->school_id)->pluck('id');

             $upcomingEvents = \App\Models\Event::whereIn('admin_id', $adminIds)
                ->where('date', '>=', now())
                ->orderBy('date', 'asc')
                ->take(3)
                ->get();

              $recentAnnouncements = \App\Models\Announcement::whereIn('admin_id', $adminIds)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();

           $latestNotifications = \App\Models\Notification::where('user_type', 'alumni')
            ->where('user_id', $alumni->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

            $surveysCompleted = \App\Models\AlumniSurvey::where('alumni_id', $alumni->id)->count();
            $lastSurvey = \App\Models\AlumniSurvey::where('alumni_id', $alumni->id)->orderBy('updated_at', 'desc')->first();
            $lastSurveyDate = $lastSurvey ? $lastSurvey->updated_at : null;

          $profileComplete =
            !empty($alumni->fullname) &&
            !empty($alumni->email) &&
            !empty($alumni->school_graduated) &&
            !empty($alumni->batch) &&
            !empty($alumni->gender) &&
            !empty($alumni->address) &&
            ($alumni->age !== null && $alumni->age !== '' && $alumni->age > 0);
           
            $eventsAttended = $alumni->events()->count();

            $connections = $alumni->connections()->count() ?? 0;
           
            return view('alumni_folder.dashboard', compact(
                'alumni',
                'upcomingEvents',
                'recentAnnouncements',
                'latestNotifications',
                'surveysCompleted',
                'lastSurveyDate',
                'profileComplete',
                'eventsAttended',
                'connections'
              ));
             }

   public function gotoProfile(){
            $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            }
            $schools = School::all();

         
            $surveysCompleted = AlumniSurvey::where('alumni_id', $alumni->id)->count();
            $eventsAttended = $alumni->events()->count();
            $connections = $alumni->connections()->count() ?? 0;
            $profileComplete = !empty($alumni->fullname) && !empty($alumni->email) && !empty($alumni->school_graduated) && !empty($alumni->batch) && !empty($alumni->gender) && !empty($alumni->address) && ($alumni->age !== null && $alumni->age !== '' && $alumni->age > 0);

            return view('alumni_folder.profile', compact(
                'alumni', 'schools', 'surveysCompleted', 'eventsAttended', 'connections', 'profileComplete'
            ));
        }

  function gotoAnnouncements(){
        $alumni = $this->getAuthenticatedAlumni();
        if (!$alumni) {   
            return redirect()->route('login')->with('error', 'Please log in first.');
        }

        $adminIds = \App\Models\AdminAccount::where('school_id', $alumni->school_id)->pluck('id');
    
        $announcements = \App\Models\Announcement::whereIn('admin_id', $adminIds)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('alumni_folder.announcements', compact('alumni', 'announcements'));
    }

    
    function gotoSurvey()
    {
       $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            } 
             $survey = AlumniSurvey::where('alumni_id', $alumni->id)->first();
                return view('alumni_folder.survey')->with(['alumni' => $alumni, 'survey' => $survey]);
    }



        function gotoNotifications(){
            $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {
                return redirect()->route('login')->with('error', 'Please log in first.');
            }

           
            $notifications = \App\Models\Notification::orderBy('created_at', 'desc')->get();

        
           $filtered = $notifications->filter(function($notification) use ($alumni) {
                return $notification->user_type === 'alumni' && $notification->user_id == $alumni->id;
            })->values();

            $latestNotifications = $filtered->take(3);
            $earlierNotifications = $filtered->slice(3);

            return view('alumni_folder.notifications', compact('alumni', 'latestNotifications', 'earlierNotifications'));
        }

   function gotoEvents(Request $request){
            $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            }

           
            $adminIds = \App\Models\AdminAccount::where('school_id', $alumni->school_id)->pluck('id');

            $filter = $request->input('filter', 'all');
            $today = date('Y-m-d');

          
            $query = Event::whereIn('admin_id', $adminIds);

            if ($filter === 'completed') {
                $query->where('date', '<', $today);
            } elseif ($filter === 'upcoming') {
                $query->where('date', '>=', $today);
            } elseif ($filter === 'my') {
                $events = $alumni->events()->whereIn('admin_id', $adminIds)->orderBy('date', 'desc')->get();
                return view('alumni_folder.events', compact('alumni', 'events'));
            }

            $events = $query->orderBy('date', 'desc')->get();

            return view('alumni_folder.events', compact('alumni', 'events'));
        }

    function gotoHome()
    {
         session()->flush();
        return view('index');
    }

     private function getAuthenticatedAlumni(){
        if (!session()->has('alumni_logged_in') || !session('alumni_id')) {
                return null;
        }

        return AlumniInfo::find(session('alumni_id'));
    }

     

     public function updateProfile(Request $request){
          $alumni = $this->getAuthenticatedAlumni();

           $data = $request->validate([
                    'fullname' => 'required|string|max:255',
                    'email' => 'required|email',
                   'school_id' => 'nullable|exists:schools,id',
                    'batch' => 'nullable|string|max:50',
                    'age' => 'nullable|integer|min:0',
                    'phone' => 'nullable|string',
                    'gender' => 'nullable|string',
                    'address' => 'nullable|string',
                    'github' => 'nullable|string',
                    'twitter' => 'nullable|string',
                    'instagram' => 'nullable|string',
                    'facebook' => 'nullable|string',
                    'profile_pic' => 'nullable|image|max:10240',
                ]);
            

            // Handle profile picture upload
            if ($request->hasFile('profile_pic')) {
                $file = $request->file('profile_pic');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename);
                $data['profile_pic'] = $filename;
            }
            
            if ($request->filled('school_id')) {
                $school = \App\Models\School::find($request->school_id);
                $alumni->school_id = $school->id;
                $alumni->school_graduated = $school->school_name;
            }

            $alumni->update($data);

            $admins = AdminAccount::where('school_id', $alumni->school_id)->get();
            foreach ($admins as $admin) {
                Notification::create([
                    'user_id' => $admin->id,
                    'user_type' => 'admin',
                        'type' => 'profile_update',
                        'message' => "{$alumni->fullname} updated their profile.",
                    ]);
                }

            Notification::create([
                'user_id' => $alumni->id,
                'user_type' => 'alumni',
                'type' => 'profile_update',
                'message' => "Your profile was updated successfully.",
            ]);

            return redirect()->back()->with('success', 'Profile updated successfully!');
        }

         public function deleteAccount(Request $request){
            $alumni = $this->getAuthenticatedAlumni();
            if ($alumni) {
                 $admins = AdminAccount::where('school_id', $alumni->school_id)->get();
                    foreach ($admins as $admin) {
                    Notification::create([
                            'user_id' => $admin->id,
                            'user_type' => 'admin',
                            'type' => 'account_deleted',
                            'message' => "{$alumni->fullname} has deleted their alumni account.",
                        ]);
                    }

                $alumni->delete();
                session()->flush();
                return redirect('/')->with('success', 'Account deleted successfully.');
            }
            return redirect()->back()->with('error', 'Account not found.');
        }

        public function submitSurvey(Request $request)
            {
                $alumni = $this->getAuthenticatedAlumni();
                if (!$alumni) {
                    return redirect()->route('login')->with('error', 'Please log in first.');
                }

             
                $data = [
                    'alumni_id' => $alumni->id,
                    'q1' => $request->input('employmentStatus'),
                    'q2' => $request->input('jobTitle') === 'Other' ? $request->input('jobTitleOther') : $request->input('jobTitle'),
                    'q3' => $request->input('industry') === 'Other' ? $request->input('industryOther') : $request->input('industry'),
                    'q4' => $request->input('jobDuration'),
                    'q5' => $request->input('careerChange') === 'Yes' ? $request->input('careerReason') : $request->input('careerChange'),
                    'q6' => $request->input('satisfaction'),
                    'q7' => $request->input('workforcePrep'),
                    'q8' => $request->input('beneficialSkill') === 'Other' ? $request->input('skillOtherInput') : $request->input('beneficialSkill'),
                    'q9' => $request->input('handsOnExperience') === 'Other' ? $request->input('handsOnOtherInput') : $request->input('handsOnExperience'),
                    'q10' => $request->input('facultySupport'),
                    'q11' => $request->input('preparedness') === 'No' ? $request->input('improvementArea') : $request->input('preparedness'),
                    'q12' => $request->input('resourceRating'),
                    'q13' => $request->input('jobSearchDuration'),
                    'q14' => $request->input('jobChallenges'),
                    'q15' => $request->input('relatedPosition') === 'No' ? $request->input('differentFieldReason') : $request->input('relatedPosition'),
                    'q16' => $request->input('jobConfidence'),
                    'q17' => $request->input('degreeAdvantage') === 'Other' ? $request->input('otherDegreeAdvantage') : $request->input('degreeAdvantage'),
                   'q18' => $request->input('extracurricularGrowth') === 'Other' ? $request->input('extracurricularGrowthOther') : $request->input('extracurricularGrowth'),
                    'q19' => $request->input('jobMarketOpinion'),
                    'q20' => $request->input('careerSupport'),
                    'q21' => $request->input('careerAdvancementSupport'),
                    'q22' => $request->input('professionalDevelopmentFrequency'),
                    'q23' => $request->input('careerChangeEvolution'),
                    'q24' => $request->input('startingSalary'),
                    'q25' => $request->input('salarySatisfaction') === 'No' ? $request->input('salaryChanges') : $request->input('salarySatisfaction'),
                    'q26' => $request->input('degreeEarningPotential'),
                    'q27' => $request->input('alumniInvolvement') === 'Yes' ? $request->input('alumniValue') : $request->input('alumniInvolvement'),
                    'q28' => $request->input('willingToMentor'),
                    'q29' => $request->input('alumniEngagement') === 'Other' ? $request->input('otherAlumniEngagementInput') : $request->input('alumniEngagement'),
                    'q30' => $request->input('alumniSupport') === 'Other' ? $request->input('otherAlumniSupport') : $request->input('alumniSupport'),
                    'q31' => $request->input('alumniCommunity') === 'Other' ? $request->input('otherAlumniCommunity') : $request->input('alumniCommunity'),
                    'q32' => $request->input('contributeSupport'),
                    'q33' => $request->input('futureParticipation'),
                    'q34' => $request->input('alumniEvents') === 'Other' ? $request->input('otherEventText') : $request->input('alumniEvents'),
                    'q35' => $request->input('alumniTies') === 'Other' ? $request->input('otherTiesText') : $request->input('alumniTies'),
                    'q36' => $request->input('bsitImprovements') === 'Other' ? $request->input('bsitImprovementsOther') : $request->input('bsitImprovements'),
                    'q37' => $request->input('bsitAdvice') === 'Other' ? $request->input('bsitAdviceOther') : $request->input('bsitAdvice'),
                    'q38' => $request->input('preparationWish') === 'Other' ? $request->input('preparationWishOther') : $request->input('preparationWish'),
                    'q39' => $request->input('alumniProgramImprovement') === 'Other' ? $request->input('alumniProgramOther') : $request->input('alumniProgramImprovement'),
                    'q40' => $request->input('feedbackImprovement') === 'Other' ? $request->input('feedbackOther') : $request->input('feedbackImprovement'),
                ];

                AlumniSurvey::updateOrCreate(
                    ['alumni_id' => $alumni->id],
                    $data
                );

                 $admins = AdminAccount::where('school_id', $alumni->school_id)->get();
                    foreach ($admins as $admin) {
                        Notification::create([
                            'user_id' => $admin->id,
                            'user_type' => 'admin',
                            'type' => 'survey_submitted',
                            'message' => "{$alumni->fullname} submitted a survey.",
                        ]);
                    }

                Notification::create([
                    'user_id' => $alumni->id,
                    'user_type' => 'alumni',
                    'type' => 'survey_submitted',
                    'message' => "You have submitted your survey successfully.",
                ]);

                return redirect()->back()->with('success', 'Survey submitted successfully!');
            }

           public function attendEvent(Request $request, $eventId){
                $alumni = $this->getAuthenticatedAlumni();
                if (!$alumni) {
                    return redirect()->route('login')->with('error', 'Please log in first.');
                }
                if (!$alumni->events()->where('event_id', $eventId)->exists()) {
                    $alumni->events()->attach($eventId, ['attended_at' => now()]);

                     $event = Event::find($eventId);

                      $admins = AdminAccount::where('school_id', $alumni->school_id)->get();
                        foreach ($admins as $admin) {
                            Notification::create([
                                'user_id' => $admin->id,
                                'user_type' => 'admin',
                                'type' => 'event_attendance',
                                'message' => "{$alumni->fullname} will attend the event: {$event->title}",
                                'event_id' => $eventId,
                            ]);
                        }
                    

                        Notification::create([
                            'user_id' => $alumni->id,
                            'user_type' => 'alumni',
                            'type' => 'event_attendance',
                            'message' => "You have successfully marked your attendance for the event: {$event->title}",
                            'event_id' => $eventId,
                        ]);
                    
                    }

                    return redirect()->back()->with('success', 'You have successfully marked your attendance for this event!');
            }

            public function unattendEvent(Request $request, $eventId){
                    $alumni = $this->getAuthenticatedAlumni();
                    if ($alumni) {
                        $alumni->events()->detach($eventId);

                        $event = Event::find($eventId);

                        $admins = AdminAccount::where('school_id', $alumni->school_id)->get();
                            foreach ($admins as $admin) {
                                Notification::create([
                                    'user_id' => $admin->id,
                                    'user_type' => 'admin',
                                    'type' => 'event_unattend',
                                    'message' => "{$alumni->fullname} cancelled attendance for the event: {$event->title}",
                                    'event_id' => $eventId,
                                ]);
                            }

                            Notification::create([
                                'user_id' => $alumni->id,
                                'user_type' => 'alumni',
                                'type' => 'event_unattend',
                                'message' => "You have cancelled your attendance for the event: {$event->title}",
                                'event_id' => $eventId,
                            ]);

                       }
                    return redirect()->back()->with('success', 'You have cancelled your attendance for this event.');
            }
    

}
