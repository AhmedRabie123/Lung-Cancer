<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Patient extends Middleware
{
   
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('patient_login');
        }
    }
}
