<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAccount;
use App\Models\SuperAdminAccount;
use Illuminate\Support\Facades\Hash;




class AdminAuthController extends Controller
{
   public function login(Request $request)
    {
        $request->validate([    
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = AdminAccount::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_logged_in' => true, 'admin_id' => $admin->id]);

            return redirect()->route('admin.dashboard');
        }

        return back()->with('login_error', 'Invalid email or password.');

    }

     public function superLogin(Request $request){
        $request->validate([    
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = SuperAdminAccount::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_logged_in' => true, 'admin_id' => $admin->id]);

            return redirect()->route('super_admin.dashboard');
        }

        return back()->with('login_error', 'Invalid email or password.');

    }
}
