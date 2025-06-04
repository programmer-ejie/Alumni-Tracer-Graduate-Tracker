<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\AlumniInfo;
use App\Models\EmailConfirmation;
use App\Models\PageView;
use App\Models\AlumniSurvey;
use App\Models\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminAccount;
use App\Models\SuperAdminAccount;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GmailCheckerController extends Controller
{
    public function checkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $email = $request->email;
        $exists = AlumniInfo::where('email', $email)->first();

       
        $code = random_int(1000, 9999);
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

        return view('confirmation_code', ['email' => $email]);

    }


  public function verifyCode(Request $request){
            $email = $request->input('email'); 
            $enteredCode = $request->code1 . $request->code2 . $request->code3 . $request->code4;

            $record = EmailConfirmation::where('email', $email)
                ->where('code', $enteredCode)
                ->where('expires_at', '>', Carbon::now())
                ->first();

            if ($record) {      
                $alumni = AlumniInfo::where('email', $email)->first();
                session([
                    'alumni_id' => $alumni->id,
                    'alumni_logged_in' => true
                ]);
                PageView::create([
                    'page' => 'landing',
                    'ip_address' => request()->ip(),
                    'alumni_id' => $alumni->id,
                ]);
                
                if (
                        empty($alumni->fullname) ||
                        empty($alumni->school_graduated) ||
                        empty($alumni->batch) ||
                        empty($alumni->address) ||
                        empty($alumni->gender) ||
                        empty($alumni->age) || $alumni->age == 0

                ) {
                    return redirect()->route('alumni.profile')->with('status', 'Please complete your profile information.');
                }

                return redirect()->route('alumni.dashboard');
            }

            return redirect()->route('confirmation.form')->withErrors(['code' => 'Invalid or expired confirmation code.']);
        }

    public function registerEmail(Request $request){
                $email = $request->email;
                AlumniInfo::create(['email' => $email]);
                return $this->checkEmail($request); 
            }

        public function resendCode(Request $request){
            $email = $request->input('email');
            if (!$email) {
                return back()->withErrors(['email' => 'Email address is required.']);
            }

          
            session(['email' => $email]);

            $code = random_int(1000, 9999);
            $expiration = Carbon::now()->addMinutes(10);

            EmailConfirmation::updateOrCreate(
                ['email' => $email],
                ['code' => $code, 'expires_at' => $expiration]
            );

            Mail::raw("Your new confirmation code is: $code. It expires in 10 minutes.", function ($message) use ($email) {
                $message->to($email)
                        ->subject("Your Alumni Tracer Confirmation Code");
            });

         
            return redirect()->route('confirmation.form')->with('status', 'A new code has been sent to your email.');
        }
}
