<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\AlumniInfo;
use App\Models\EmailConfirmation;

class GmailCheckerController extends Controller
{
    public function checkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $email = $request->email;
        $exists = AlumniInfo::where('email', $email)->first();

       
        $code = random_int(100000, 999999);
        $expiration = Carbon::now()->addMinutes(10);

       
        if (!$exists) {
            AlumniInfo::create([
                'email' => $email,
                'fullname' => '',
                'school_graduated' => '',
                'batch' => '',
                'age' => 0,
                'address' => '',
                'gender' => '',
            ]);
        }

       
        EmailConfirmation::updateOrCreate(
            ['email' => $email],
            ['code' => $code, 'expires_at' => $expiration]
        );

       
        Mail::raw("Your confirmation code is: $code. It expires in 10 minutes.", function ($message) use ($email) {
            $message->to($email)
                    ->subject("Your Alumni Tracer Confirmation Code");
        });

        session(['email' => $email]); 

        return redirect()->route('confirmation.form');

    }


    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required|numeric']);
        $email = session('email');

        $record = EmailConfirmation::where('email', $email)
            ->where('code', $request->code)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if ($record) {      
              $alumni = AlumniInfo::where('email', $email)->first();
                session([
                    'alumni_id' => $alumni->id,
                    'alumni_logged_in' => true
                ]);
                return redirect()->route('alumni.dashboard');
        }

       return redirect()->route('confirmation.form')->withErrors(['code' => 'Invalid or expired confirmation code.']);


    }

    public function registerEmail(Request $request)
    {
        $email = $request->email;
        AlumniInfo::create(['email' => $email]);
        return $this->checkEmail($request); // Reuse code sending
    }
}
