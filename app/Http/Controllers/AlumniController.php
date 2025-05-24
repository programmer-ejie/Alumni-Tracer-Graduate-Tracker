<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    function gotoAlumni()
    {
        return view('alumni_gmail');
    }

    function gotoDashboard()
    {
        return view('alumni_folder.dashboard');
    }
    function gotoProfile()
    {
        return view('alumni_folder.profile');
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
}
