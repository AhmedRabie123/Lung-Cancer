<?php

use Illuminate\Support\Facades\Route;

/* Front */

use App\Http\Controllers\Front\HomeController;




/* Admin */

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminPageController;


/* Doctor */

use App\Http\Controllers\Doctor\DoctorHomeController;
use App\Http\Controllers\Doctor\DoctorAuthController;
use App\Http\Controllers\Doctor\DoctorProfileController;



/* Patient */

use App\Http\Controllers\Patient\PatientHomeController;
use App\Http\Controllers\Patient\PatientAuthController;
use App\Http\Controllers\Patient\PatientProfileController;

/* Front Route */

route::get('/', [HomeController::class, 'index'])->name('home');



/* Admin Route */

route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

/* Doctor Route */

route::get('/doctor/login', [DoctorAuthController::class, 'doctor_login'])->name('doctor_login');
route::post('/doctor/login-submit', [DoctorAuthController::class, 'login_submit'])->name('doctor_login_submit');
route::get('/doctor/logout', [DoctorAuthController::class, 'logout'])->name('doctor_logout');
route::get('/doctor/signup', [DoctorAuthController::class, 'doctor_signup'])->name('doctor_signup');
route::post('/doctor/signup-submit', [DoctorAuthController::class, 'doctor_signup_submit'])->name('doctor_signup_submit');
route::get('/doctor/signup/verify/{token}/{email}', [DoctorAuthController::class, 'doctor_signup_verify'])->name('doctor_signup_verify');
route::get('/doctor/forget-password', [DoctorAuthController::class, 'forget_password'])->name('doctor_forget_password');
route::post('/doctor/forget-password-submit', [DoctorAuthController::class, 'forget_password_submit'])->name('doctor_forget_password_submit');
route::get('/doctor/reset-password/{token}/{email}', [DoctorAuthController::class, 'reset_password'])->name('doctor_reset_password');
route::post('/doctor/reset-password-submit', [DoctorAuthController::class, 'reset_password_submit'])->name('doctor_reset_password_submit');



/* Doctor Route Middleware */

route::group(['middleware' => ['doctor:doctor']], function () {

    route::get('/doctor/home', [DoctorHomeController::class, 'index'])->name('doctor_home');
    route::get('/doctor/edit-profile', [DoctorProfileController::class, 'index'])->name('doctor_profile');
    route::post('/doctor/edit-profile-submit', [DoctorProfileController::class, 'profile_submit'])->name('doctor_profile_submit');
});

/* Patient Route */

route::get('/patient/login', [PatientAuthController::class, 'patient_login'])->name('patient_login');
route::post('/patient/login-submit', [PatientAuthController::class, 'login_submit'])->name('patient_login_submit');
route::get('/patient/logout', [PatientAuthController::class, 'logout'])->name('patient_logout');
route::get('/patient/signup', [PatientAuthController::class, 'patient_signup'])->name('patient_signup');
route::post('/patient/signup-submit', [PatientAuthController::class, 'patient_signup_submit'])->name('patient_signup_submit');
route::get('/patient/signup/verify/{token}/{email}', [PatientAuthController::class, 'patient_signup_verify'])->name('patient_signup_verify');
route::get('/patient/forget-password', [PatientAuthController::class, 'forget_password'])->name('patient_forget_password');
route::post('/patient/forget-password-submit', [PatientAuthController::class, 'forget_password_submit'])->name('patient_forget_password_submit');
route::get('/patient/reset-password/{token}/{email}', [PatientAuthController::class, 'reset_password'])->name('patient_reset_password');
route::post('/patient/reset-password-submit', [PatientAuthController::class, 'reset_password_submit'])->name('patient_reset_password_submit');




/* Patient Route Middleware */

route::group(['middleware' => ['patient:patient']], function () {

    route::get('/patient/home', [PatientHomeController::class, 'index'])->name('patient_home');
    route::get('/patient/edit-profile', [PatientProfileController::class, 'index'])->name('patient_profile');
    route::post('/patient/edit-profile-submit', [PatientProfileController::class, 'profile_submit'])->name('patient_profile_submit');
});


/* Admin Route Middleware */

route::group(['middleware' => ['admin:admin']], function () {

    route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');
    route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

    route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');

    route::get('/admin/page/heading', [AdminPageController::class, 'heading'])->name('admin_heading');
    route::post('/admin/page/heading/update', [AdminPageController::class, 'heading_update'])->name('admin_heading_submit');

    route::get('/admin/page/doctor/signup', [AdminPageController::class, 'doctor_signup'])->name('admin_doctor_signup');
    route::post('/admin/page/doctor/update', [AdminPageController::class, 'doctor_signup_update'])->name('admin_doctor_signup_submit');

    route::get('/admin/page/doctor/signin', [AdminPageController::class, 'doctor_signin'])->name('admin_doctor_signin');
    route::post('/admin/page/doctor/submit', [AdminPageController::class, 'doctor_signin_update'])->name('admin_doctor_signin_submit');

    route::get('/admin/page/patient/signup', [AdminPageController::class, 'patient_signup'])->name('admin_patient_signup');
    route::post('/admin/page/patient/update', [AdminPageController::class, 'patient_signup_update'])->name('admin_patient_signup_update');

    route::get('/admin/page/patient/signin', [AdminPageController::class, 'patient_signin'])->name('admin_patient_signin');
    route::post('/admin/page/patient/submit', [AdminPageController::class, 'patient_signin_update'])->name('admin_patient_signin_submit');

    route::get('/admin/page/doctor/forget-password', [AdminPageController::class, 'doctor_forget_password'])->name('admin_doctor_forget_password');
    route::post('/admin/page/doctor/forget-password/update', [AdminPageController::class, 'doctor_forget_password_update'])->name('admin_doctor_forget_password_submit');

    route::get('/admin/page/doctor/reset-password', [AdminPageController::class, 'doctor_reset_password'])->name('admin_doctor_reset_password');
    route::post('/admin/page/doctor/reset-password/update', [AdminPageController::class, 'doctor_reset_password_update'])->name('admin_doctor_reset_password_submit');

    route::get('/admin/page/patient/forget-password', [AdminPageController::class, 'patient_forget_password'])->name('admin_patient_forget_password');
    route::post('/admin/page/patient/forget-password/update', [AdminPageController::class, 'patient_forget_password_update'])->name('admin_patient_forget_password_submit');

    route::get('/admin/page/patient/reset-password', [AdminPageController::class, 'patient_reset_password'])->name('admin_patient_reset_password');
    route::post('/admin/page/patient/reset-password/update', [AdminPageController::class, 'patient_reset_password_update'])->name('admin_patient_reset_password_submit');


});
