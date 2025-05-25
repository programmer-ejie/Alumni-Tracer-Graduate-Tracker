<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumniInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
            return view('alumni_folder.dashboard')->with('alumni_id', $alumni->id);
        }

    function gotoProfile()
    {
        $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            } 
            return view('alumni_folder.profile')->with('alumni', $alumni);; 
    }
    function gotoAnnouncements()
    {
        return view('alumni_folder.announcements');
    }
    function gotoSurvey()
    {
        return view('alumni_folder.survey');
    }
    function gotoNotifications()
    {
        return view('alumni_folder.notifications');
    }
    function gotoEvents()
    {
        return view('alumni_folder.events');
    }
    function gotoHome()
    {
        return view('index');
    }

     private function getAuthenticatedAlumni(){
        if (!session()->has('alumni_logged_in') || !session('alumni_id')) {
                return null;
        }

        return \App\Models\AlumniInfo::find(session('alumni_id'));
    }

     

     public function updateProfile(Request $request){
          $alumni = $this->getAuthenticatedAlumni();

           $data = $request->validate([
                    'fullname' => 'required|string|max:255',
                    'email' => 'required|email',
                    'school_graduated' => 'nullable|string|max:255',
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

            $alumni->update($data);

            return redirect()->back()->with('success', 'Profile updated successfully!');
        }

         public function deleteAccount(Request $request){
            $alumni = $this->getAuthenticatedAlumni();
            if ($alumni) {
                $alumni->delete();
                session()->flush();
                return redirect('/')->with('success', 'Account deleted successfully.');
            }
            return redirect()->back()->with('error', 'Account not found.');
        }

    

}
