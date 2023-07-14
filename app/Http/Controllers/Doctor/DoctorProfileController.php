<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use  Hash;
use Auth;
use phpDocumentor\Reflection\Types\Null_;

class DoctorProfileController extends Controller
{
    public function index()
    {
        return view('doctor.doctor_profile');
    }

    public function profile_submit(Request $request)
    {

        $doctor_data = Doctor::where('email', Auth::guard('doctor')->user()->email)->first();

        $request->validate([

            'name' => 'required',
            'email' => 'required|email'

        ]);

        if ($request->password != '') {

            $request->validate([

                'password' => 'required',
                'retype_password' => 'required|same:password'

            ]);

            $doctor_data->password = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            $request->validate([

                'photo' => 'image|mimes:jpg,png,svg,gif,jpeg'

            ]);

            if ($doctor_data->photo != Null) {
                unlink(public_path('uploads/' . $doctor_data->photo));
            }



            $ext = $request->file('photo')->extension();
            $final_name = 'doctor_' . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);

            $doctor_data->photo = $final_name;
        }



        $doctor_data->name = $request->name;
        $doctor_data->email = $request->email;
        $doctor_data->specialization = $request->specialization;
        $doctor_data->graduation_year = $request->graduation_year;
        $doctor_data->university = $request->university;
        $doctor_data->phone = $request->phone;
        $doctor_data->city = $request->city;
        $doctor_data->country = $request->country;
        $doctor_data->state = $request->state;
        $doctor_data->zip_code = $request->country;
        $doctor_data->update();

        return redirect()->route('doctor_home')->with('success', 'Profile Information Is Saved Successfully.');
    }
}
