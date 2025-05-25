<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     function gotoDashboard()
    {
        return view('admin.dashboard');
    }
     function gotoProfile()
    {
        return view('admin.profile');
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
}
