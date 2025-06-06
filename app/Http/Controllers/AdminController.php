<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAccount;
use Illuminate\Support\Facades\Hash;
use App\Models\AlumniSurvey;
use App\Models\AlumniInfo;
use App\Models\Event;
use App\Models\Notification;
use App\Models\Announcement;

class AdminController extends Controller
{
     function gotoDashboard(){
            $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {
                    return view('index')->with('error', 'Please log in first.');
                }
                return view('admin.dashboard')->with('admin', $admin->id);                      
     }

   public function gotoProfile(){
            $admin = $this->getAuthenticatedAdmin();
            if (!$admin) {
                return view('index')->with('error', 'Please log in first.');
            }
            $latestNotifications = Notification::where('user_type', 'admin')
                ->where('user_id', $admin->id)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();

            // Example stats
            $alumniCount = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->count();
            $surveyCount = \App\Models\AlumniSurvey::whereIn('alumni_id', \App\Models\AlumniInfo::where('school_id', $admin->school_id)->pluck('id'))->count();
            $eventCount = \App\Models\Event::where('admin_id', $admin->id)->count();
            $announcementCount = \App\Models\Announcement::where('admin_id', $admin->id)->count();

            // Example rates
            $surveyCompletionRate = $alumniCount > 0 ? round(($surveyCount / $alumniCount) * 100) : 0;

            return view('admin.profile')->with([
                'admin' => $admin,
                'latestNotifications' => $latestNotifications,
                'alumniCount' => $alumniCount,
                'surveyCount' => $surveyCount,
                'eventCount' => $eventCount,
                'announcementCount' => $announcementCount,
                'surveyCompletionRate' => $surveyCompletionRate,
            ]);
        }

            public function gotoAnnouncements()
            {
                $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {   
                    return redirect()->route('login')->with('error', 'Please log in first.');
                }

              
                $announcements = \App\Models\Announcement::whereIn('admin_id', function($query) use ($admin) {
                        $query->select('id')
                            ->from('admin_accounts')
                            ->where('school_id', $admin->school_id);
                    })
                    ->orderBy('created_at', 'desc')
                    ->get();

                return view('admin.announcements', [
                    'admin' => $admin,
                    'announcements' => $announcements
                ]);
            }
            
    function gotoSurvey()
        {
            $admin = $this->getAuthenticatedAdmin();
            if (!$admin) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            }

         
            $alumni_info = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->get();
            $alumniIds = $alumni_info->pluck('id');

          
            $surveys = \App\Models\AlumniSurvey::whereIn('alumni_id', $alumniIds)->get();

            return view('admin.survey')->with([
                'admin' => $admin,
                'surveys' => $surveys,
                'alumni' => $alumni_info
            ]);
        }

    function gotoNotifications(){
        $admin = $this->getAuthenticatedAdmin();
            if (!$admin) {
                return redirect()->route('login')->with('error', 'Please log in first.');
            }

            $notifications = Notification::where('user_type', 'admin')
                ->where('user_id', $admin->id)
                ->orderBy('created_at', 'desc')
                ->get();

            $latestNotifications = $notifications->take(3);
            $earlierNotifications = $notifications->slice(3);

            return view('admin.notifications', compact('admin', 'notifications','latestNotifications', 'earlierNotifications'));
    }

    function gotoEvents(Request $request){
            $admin = $this->getAuthenticatedAdmin();
                $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {
                    return redirect()->route('login')->with('error', 'Please log in first.');
                }
                $query = Event::where('admin_id', $admin->id);

                $filter = $request->input('filter', 'all');
                $today = date('Y-m-d');

                if ($filter === 'completed') {
                    $query->where('date', '<', $today);
                } elseif ($filter === 'upcoming') {
                    $query->where('date', '>=', $today);
                }

                $events = $query->orderBy('date', 'desc')->get();
                return view('admin.events', compact('admin', 'events'));
    }

    function gotoHome()
    {
        session()->flush();
        return view('index');
    }

    function gotoViewData($id){
        $admin = $this->getAuthenticatedAdmin();
        $alumni_info = AlumniInfo::find($id);
        $survey = AlumniSurvey::where('alumni_id', $id)->first();

        return view('admin.viewData', compact('alumni_info', 'survey', 'admin'));
    }




    private function getAuthenticatedAdmin(){
        if (!session()->has('admin_logged_in') || !session('admin_id')) {
                return null;
        }

        return AdminAccount::find(session('admin_id'));
    }

    public function updateProfile(Request $request){
          $admin = $this->getAuthenticatedAdmin();

            $data = $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'nullable|string',
                'gender' => 'nullable|string',
                'address' => 'nullable|string',
                'github' => 'nullable|string',
                'twitter' => 'nullable|string',
                'instagram' => 'nullable|string',
                'facebook' => 'nullable|string',
                'profile_pic' => 'nullable|image|max:10240',
            ]);

          
            if ($request->hasFile('profile_pic')) {
                $file = $request->file('profile_pic');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename);
                $data['profile_pic'] = $filename;
            }

            $admin->update($data);

            Notification::create([
                'user_id' => $admin->id,
                'user_type' => 'admin',
                'type' => 'profile_update',
                'message' => "Your profile was updated successfully.",
            ]);

            return redirect()->back()->with('success', 'Profile updated successfully!');
        }

        public function deleteAccount(Request $request){
            $admin = $this->getAuthenticatedAdmin();
            if ($admin) {
                $admin->delete();
                session()->flush();
                return redirect('/')->with('success', 'Account deleted successfully.');
            }
            return redirect()->back()->with('error', 'Account not found.');
        }


        public function storeEvent(Request $request){
                $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {
                    return redirect()->route('login')->with('error', 'Please log in first.');
                }

                $data = $request->validate([
                    'title' => 'required|string|max:255',
                    'message' => 'required|string',
                    'date' => 'required|date',
                    'location' => 'nullable|string|max:255',
                ]);

                $data['admin_id'] = $admin->id;

                $event = Event::create($data);
                 $alumniList = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->get();
                    foreach ($alumniList as $alumni) {
                        Notification::create([
                            'user_id' => $alumni->id,
                            'user_type' => 'alumni',
                            'type' => 'new_event',
                            'message' => "A new event \"{$event->title}\" has been posted by admin.",
                            'event_id' => $event->id,
                        ]);
                    }

                 Notification::create([
                    'user_id' => $admin->id,
                    'user_type' => 'admin',
                    'type' => 'event_posted',
                    'message' => "You have posted a new event: \"{$event->title}\".",
                    'event_id' => $event->id,
                ]);

                return redirect()->route('admin.events')->with('success', 'Event created successfully!');
            }

         public function updateEvent(Request $request, $id){
                    $admin = $this->getAuthenticatedAdmin();
                    if (!$admin) {
                        return redirect()->route('login')->with('error', 'Please log in first.');
                    }

                    $event = Event::where('admin_id', $admin->id)->findOrFail($id);

                    $data = $request->validate([
                        'title' => 'required|string|max:255',
                        'message' => 'required|string',
                        'date' => 'required|date',
                        'location' => 'nullable|string|max:255',
                    ]);

                    $event->update($data);

                     $alumniList = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->get();
                        foreach ($alumniList as $alumni) {
                            Notification::create([
                                'user_id' => $alumni->id,
                                'user_type' => 'alumni',
                                'type' => 'event_updated',
                                'message' => "The event \"{$event->title}\" has been updated by admin.",
                                'event_id' => $event->id,
                            ]);
                        }

                     Notification::create([
                        'user_id' => $admin->id,
                        'user_type' => 'admin',
                        'type' => 'event_updated',
                        'message' => "You have updated the event: \"{$event->title}\".",
                        'event_id' => $event->id,
                    ]);

                    return redirect()->route('admin.events')->with('success', 'Event updated successfully!');
                }

            public function destroyEvent($id){
                    $admin = $this->getAuthenticatedAdmin();
                    if (!$admin) {
                        return redirect()->route('login')->with('error', 'Please log in first.');
                    }

                    $event = Event::where('admin_id', $admin->id)->findOrFail($id);
                    $eventTitle = $event->title;
                    $event->delete();

                     $alumniList = \App\Models\AlumniInfo::where('school_id', $admin->school_id)->get();
                        foreach ($alumniList as $alumni) {
                            Notification::create([
                                'user_id' => $alumni->id,
                                'user_type' => 'alumni',
                                'type' => 'event_deleted',
                                'message' => "The event \"{$eventTitle}\" has been deleted by admin.",
                                'event_id' => $id,
                            ]);
                        }

                     Notification::create([
                        'user_id' => $admin->id,
                        'user_type' => 'admin',
                        'type' => 'event_deleted',
                        'message' => "You have deleted the event: \"{$eventTitle}\".",
                        'event_id' => $id,
                    ]);

                    return redirect()->route('admin.events')->with('success', 'Event deleted successfully!');
                }

                public function deleteAlumniSurvey($id){
                       AlumniSurvey::where('alumni_id', $id)->delete();           
                       AlumniInfo::where('id', $id)->delete();
                       
                        \DB::table('alumni_event')->where('alumni_id', $id)->delete();
                        Announcement::where('mention_id', $id)->delete();
                        return redirect()->route('admin.survey')->with('success', 'Alumni and all related data deleted successfully.');
                }

}
