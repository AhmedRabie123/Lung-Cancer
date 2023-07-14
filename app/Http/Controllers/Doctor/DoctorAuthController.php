<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Mail\Websitemail;
use Hash;
use Auth;

class DoctorAuthController extends Controller
{

    public function doctor_login()
    {
        // $pass = hash::make('1234');
        // dd($pass);
        return view('front.login_doctor');
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

        if (!Auth::guard('doctor')->attempt($credential)) {
            return redirect()->route('doctor_login')->with('error', 'information is not correct!');
        } else {
            return redirect()->route('doctor_home')->with('success', 'you are logged in successfully');
        }
    }
    public function doctor_signup()
    {
        // $pass = hash::make('1234');
        // dd($pass);
        return view('front.signup_doctor');
    }

    public function doctor_signup_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256', time());

        $verification_link = url('/doctor/signup/verify/' . $token . '/' . $request->email);

        $obj = new Doctor();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->token = $token;
        $obj->status = 0;
        $obj->password = hash::make($request->password);
        $obj->save();


        //send email

        $subject = 'Sign Up Doctor Verification';
        $message = 'Please Click On The Link Below To Verify The Sign Up: <br>';
        $message .= '<a href="' . $verification_link . '">Click Here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', 'To Complete The Sign Up Doctor , Please Check Your Email And Click On The LINK');
    }

    public function doctor_signup_verify($token, $email)
    {
        $doctor_data = Doctor::where('email', $email)->where('token', $token)->first();

        if (!$doctor_data) {
            return redirect()->route('doctor_signup')->with('error', 'Your Information Is Not Correct');
        } else {
            $doctor_data->token = '';
            $doctor_data->status = 1;
            $doctor_data->update();

            return redirect()->route('doctor_login')->with('success', 'Please login to be able to access the site..');
        }
    }

    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect()->route('doctor_login')->with('success', 'you are logout successfully');
    }


    public function forget_password()
    {
        return view('front.doctor_forget_password');
    }

    public function forget_password_submit(request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $doctor_data = Doctor::where('email', $request->email)->first();
        if (!$doctor_data) {
            return redirect()->back()->with('error', 'Email Address Not Found!');
        } else {

            $token = hash('sha256', time());

            $doctor_data->token = $token;
            $doctor_data->status = 0;
            $doctor_data->update();

            $reset_link = url('doctor/reset-password/' . $token . '/' . $request->email);
            $subject = "Reset Password";
            $message = "Please Click On The Following link To Reset The Password: <br>";
            $message .= '<a href="' . $reset_link . '">Click Here</a>';


            \Mail::to($request->email)->Send(new Websitemail($subject, $message));

            return redirect()->route('doctor_login')->with('success', 'please follow this link');
        }
    }

    public function reset_password($token, $email)
    {
        $doctor_data = Doctor::where('token', $token)->where('email', $email)->first();
        if (!$doctor_data) {
            return redirect()->route('doctor_login');
        } else {
            return view('front.doctor_reset_password', compact('token', 'email'));
        }
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $doctor_data = doctor::where('token', $request->token)->where('email', $request->email)->first();
        $doctor_data->password = Hash::make($request->password);
        $doctor_data->token = '';
        $doctor_data->status = 1;
        $doctor_data->update();

        return redirect()->route('doctor_login')->with('success', 'password is reset successfully!');
    }
}
