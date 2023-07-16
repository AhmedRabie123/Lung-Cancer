<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use phpDocumentor\Reflection\Types\Null_;

class AdminSliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider_view', compact('sliders'));
    }

    public function slider_create()
    {
        return view('admin.slider_create');
    }

    public function slider_store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,png,svg,gif,jpeg'
        ]);


        $slider = new Slider();


        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'slider_' . $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $slider->photo = $final_name;

        $slider->heading = $request->heading;
        $slider->text = $request->text;
        $slider->button_text = $request->button_text;
        $slider->button_url = $request->button_url;
        $slider->save();

        return redirect()->route('admin_slider_view')->with('success', 'Slider Saved Successfully.');
    }

    public function slider_edit($id)
    {
        $slider_single = Slider::where('id', $id)->first();
        return view('admin.slider_edit', compact('slider_single'));
    }

    public function slider_update(Request $request, $id)
    {
        $slider_single = Slider::where('id', $id)->first();

        if ($request->file('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpg,png,svg,gif,jpeg'
            ]);

            if ($slider_single != Null) {
                unlink(public_path('uploads/' . $slider_single->photo));
            }

            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'slider_' . $now . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $slider_single->photo = $final_name;
        }



        $slider_single->heading = $request->heading;
        $slider_single->text = $request->text;
        $slider_single->button_text = $request->button_text;
        $slider_single->button_url = $request->button_url;
        $slider_single->update();

        return redirect()->route('admin_slider_view')->with('success', 'Slider Updated Successfully.');
    }

    public function slider_delete($id)
    {
        $slider_single = Slider::where('id', $id)->first();
        unlink(public_path('uploads/' . $slider_single->photo));
        $slider_single->delete();

        return redirect()->route('admin_slider_view')->with('success', 'Slider Deleted Successfully.');
    }
}
