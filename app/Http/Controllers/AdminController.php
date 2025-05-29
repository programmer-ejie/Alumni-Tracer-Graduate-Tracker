<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAccount;
use Illuminate\Support\Facades\Hash;
use App\Models\AlumniSurvey;
use App\Models\AlumniInfo;
use App\Models\Event;

class AdminController extends Controller
{
     function gotoDashboard(){
            $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {
                    return view('index')->with('error', 'Please log in first.');
                }
                return view('admin.dashboard')->with('admin', $admin->id);                      
     }

     function gotoProfile(){
            $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {
                     return view('index')->with('error', 'Please log in first.');
                }
                return view('admin.profile')->with('admin', $admin);                         
    }

    function gotoAnnouncements()
    {
         $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
                } 
           return view('admin.announcements')->with('admin',$admin);
    }
    function gotoSurvey()
    {
              $admin = $this->getAuthenticatedAdmin();
                if (!$admin) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
                } 
               $surveys = AlumniSurvey::all();
               $alumni_info = AlumniInfo::all();
            return view('admin.survey')->with(['admin' => $admin, 'surveys' => $surveys, 'alumni' => $alumni_info]);
      
    }
    function gotoNotifications()
    {
        return view('admin.notifications');
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
        return view('index');
    }

    function gotoViewData($id){
        $admin = $this->getAuthenticatedAdmin();
        $alumni_info = AlumniInfo::find($id);
        $survey = AlumniSurvey::where('alumni_id', $id)->first();

        if (!$alumni_info) {
            return redirect()->back()->with('error', 'Alumni not found.');
        }

        if (!$survey) {
            return redirect()->back()->with('error', 'Survey not found for this alumni.');
        }

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


        public function storeEvent(Request $request)
            {
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

                Event::create($data);

                return redirect()->route('admin.events')->with('success', 'Event created successfully!');
            }

         public function updateEvent(Request $request, $id)
                {
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

                    return redirect()->route('admin.events')->with('success', 'Event updated successfully!');
                }

         public function destroyEvent($id)
                {
                    $admin = $this->getAuthenticatedAdmin();
                    if (!$admin) {
                        return redirect()->route('login')->with('error', 'Please log in first.');
                    }

                    $event = Event::where('admin_id', $admin->id)->findOrFail($id);
                    $event->delete();

                    return redirect()->route('admin.events')->with('success', 'Event deleted successfully!');
                }



}
