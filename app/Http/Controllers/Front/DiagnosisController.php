<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        return view('front.diagnosis');
    }

    public function test_cancer()
    {
        return view('front.test_cancer');
    }
}
