<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AdminPageController extends Controller
{

    public function heading()
    {
        $page_data = Page::where('id', 1)->first();
        return view('Admin.page_heading', compact('page_data'));
        
    }

    public function heading_update(Request $request)
    {
        $page_data = Page::where('id', 1)->first();

        $page_data->short_heading = $request->short_heading;
        $page_data->heading = $request->heading;
        $page_data->heading_status = $request->heading_status;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Heading Page Updated Successfully');

    }
    public function doctor_signup()
    {
        $page_data = Page::where('id', 1)->first();
        return view('Admin.page_doctor_signup', compact('page_data'));
        
    }

    public function doctor_signup_update(Request $request)
    {
        $page_data = Page::where('id', 1)->first();

        $page_data->signup_doctor_heading = $request->signup_doctor_heading;
        $page_data->signup_doctor_status = $request->signup_doctor_status;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Sign Up Doctor Page Updated Successfully');

    }

    public function doctor_signin()
    {
        $page_data = Page::where('id', 1)->first();
        return view('Admin.page_doctor_signin', compact('page_data'));
    }

    public function doctor_signin_update(Request $request)
    {
        $page_data = Page::where('id', 1)->first();

        $page_data->signin_doctor_heading = $request->signin_doctor_heading;
        $page_data->signin_doctor_status = $request->signin_doctor_status;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Sign In Doctor Page Updated Successfully');

    }

    public function patient_signup()
    {
        $page_data = Page::where('id', 1)->first();
        return view('Admin.page_patient_signup', compact('page_data'));
    }

    public function patient_signup_update(Request $request)
    {
        $page_data = Page::where('id', 1)->first();

        $page_data->signup_patient_heading = $request->signup_patient_heading;
        $page_data->signup_patient_status = $request->signup_patient_status;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Sign Up Patient Page Updated Successfully');

    }

    public function patient_signin()
    {
        $page_data = Page::where('id', 1)->first();
        return view('Admin.page_patient_signin', compact('page_data'));
    }

    public function patient_signin_update(Request $request)
    {
        $page_data = Page::where('id', 1)->first();

        $page_data->signin_patient_heading = $request->signin_patient_heading;
        $page_data->signin_patient_status = $request->signin_patient_status;
        $page_data->update();

        return redirect()->route('admin_home')->with('success', 'Sign In Patient Page Updated Successfully');

    }
}
