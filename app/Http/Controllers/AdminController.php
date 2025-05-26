<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAccount;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.announcements');
    }
    function gotoSurvey()
    {
        return view('admin.survey');
    }
    function gotoNotifications()
    {
        return view('admin.notifications');
    }
    function gotoEvents()
    {
        return view('admin.events');
    }
    function gotoHome()
    {
        return view('index');
    }
    function gotoViewData()
    {
        return view('admin.viewData');
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

            // Handle profile picture upload
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



}
