<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function application()
    {
        return view('front.application');
    }

    public function resource()
    {
        return view('front.resource');
    }
}
