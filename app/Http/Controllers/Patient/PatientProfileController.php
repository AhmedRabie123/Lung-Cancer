<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use  Hash;
use Auth;

class PatientProfileController extends Controller
{
    public function index()
    {
        return view('patient.patient_profile');
    }

    public function profile_submit(Request $request)
    {

        $patient_data = Patient::where('email', Auth::guard('patient')->user()->email)->first();

        $request->validate([

            'name' => 'required',
            'email' => 'required|email'

        ]);

        if ($request->password != '') {

            $request->validate([

                'password' => 'required',
                'retype_password' => 'required|same:password'

            ]);

            $patient_data->password = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            $request->validate([

                'photo' => 'image|mimes:jpg,png,svg,gif,jpeg'

            ]);

            if ($patient_data->photo != Null) {
                unlink(public_path('uploads/' . $patient_data->photo));
            }



            $ext = $request->file('photo')->extension();
            $final_name = 'patient_' . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);

            $patient_data->photo = $final_name;
        }



        $patient_data->name = $request->name;
        $patient_data->email = $request->email;
        $patient_data->phone = $request->phone;
        $patient_data->city = $request->city;
        $patient_data->country = $request->country;
        $patient_data->state = $request->state;
        $patient_data->update();

        return redirect()->route('patient_home')->with('success', 'Profile Information Is Saved Successfully.');
    }
}
