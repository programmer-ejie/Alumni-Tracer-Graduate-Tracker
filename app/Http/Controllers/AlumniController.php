<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    function gotoAlumni()
    {
        return view('alumni_gmail');
    }
}
