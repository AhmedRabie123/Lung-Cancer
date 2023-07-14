<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Mail\Websitemail;
use Hash;
use Auth;

class PatientAuthController extends Controller
{

    public function patient_login()
    {
        // $pass = hash::make('1234');
        // dd($pass);
        return view('front.login_patient');
    }

    public function login_submit(Request $request)
    {
        // dd($request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!Auth::guard('patient')->attempt($credential)) {
            return redirect()->route('patient_login')->with('error', 'information is not correct!');
        } else {
            return redirect()->route('patient_home')->with('success', 'you are logged in successfully');
        }
    }
    public function patient_signup()
    {
        // $pass = hash::make('1234');
        // dd($pass);
        return view('front.signup_patient');
    }

    public function patient_signup_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:patients',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256', time());

        $verification_link = url('/patient/signup/verify/' . $token . '/' . $request->email);

        $obj = new Patient();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->token = $token;
        $obj->status = 0;
        $obj->password = hash::make($request->password);
        $obj->save();


        //send email

        $subject = 'Sign Up Patient Verification';
        $message = 'Please Click On The Link Below To Verify The Sign Up: <br>';
        $message .= '<a href="' . $verification_link . '">Click Here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', 'To Complete The Sign Up , Please Check Your Email And Click On The LINK');
    }

    public function patient_signup_verify($token, $email)
    {
        $patient_data = Patient::where('email', $email)->where('token', $token)->first();

        if (!$patient_data) {
            return redirect()->route('patient_signup')->with('error', 'Your Information Is Not Correct');
        } else {
            $patient_data->token = '';
            $patient_data->status = 1;
            $patient_data->update();

            return redirect()->route('patient_login')->with('success', 'Please login to be able to access the site..');
        }
    }

    public function logout()
    {
        Auth::guard('patient')->logout();
        return redirect()->route('patient_login')->with('success', 'you are logout successfully');
    }


    public function forget_password()
    {
        return view('front.patient_forget_password');
    }

    public function forget_password_submit(request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $patient_data = Patient::where('email', $request->email)->first();
        if (!$patient_data) {
            return redirect()->back()->with('error', 'Email Address Not Found!');
        } else {

            $token = hash('sha256', time());

            $patient_data->token = $token;
            $patient_data->status = 0;
            $patient_data->update();

            $reset_link = url('patient/reset-password/' . $token . '/' . $request->email);
            $subject = "Reset Password";
            $message = "Please Click On The Following link To Reset The Password: <br>";
            $message .= '<a href="' . $reset_link . '">Click Here</a>';


            \Mail::to($request->email)->Send(new Websitemail($subject, $message));

            return redirect()->route('patient_login')->with('success', 'please follow this link');
        }
    }

    public function reset_password($token, $email)
    {
        $patient_data = Patient::where('token', $token)->where('email', $email)->first();
        if (!$patient_data) {
            return redirect()->route('patient_login');
        } else {
            return view('front.patient_reset_password', compact('token', 'email'));
        }
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $patient_data = patient::where('token', $request->token)->where('email', $request->email)->first();
        $patient_data->password = Hash::make($request->password);
        $patient_data->token = '';
        $patient_data->status = 1;
        $patient_data->update();

        return redirect()->route('patient_login')->with('success', 'password is reset successfully!');
    }


}
