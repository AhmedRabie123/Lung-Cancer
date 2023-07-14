@extends('front.layout.app')

@section('main_content')
    <div class="login-box">
        <h1 class="h1_login">{{ $global_page_data->signin_doctor_heading }}</h1>
        <form action="{{ route('doctor_login_submit') }}" method="POST">
            @csrf


            <div class="mb-3">
                <label for="E-Mail" class="label_login  ">E-Mail:</label>
                <input type="text" id="name" name="email" placeholder="Enter username"><span
                    class="nameerror"></span>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="password" class="label_login">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter password"><span
                    class="passerror"></span>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <input type="submit" value="Login" id="validatedoctor">
                <a href="{{ route('doctor_forget_password') }}" class="primary-color">Forget Password?</a>
            </div>
            <div class="mb-3">
                <a href="{{ route('doctor_signup') }}" class="primary-color">New User? Make
                    Registration</a>
            </div>

        </form>
    </div>
@endsection
