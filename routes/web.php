<?php

use Illuminate\Support\Facades\Route;

/* Front */

use App\Http\Controllers\Front\HomeController;




/* Admin */

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminPageController;






/* Front Route */

route::get('/', [HomeController::class, 'index'])->name('home');



/* Admin Route */

route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit')->middleware('admin:admin');

route::get('/admin/page/heading', [AdminPageController::class, 'heading'])->name('admin_heading')->middleware('admin:admin');
route::post('/admin/page/heading/update', [AdminPageController::class, 'heading_update'])->name('admin_heading_submit')->middleware('admin:admin');

route::get('/admin/page/doctor/signup', [AdminPageController::class, 'doctor_signup'])->name('admin_doctor_signup')->middleware('admin:admin');
route::post('/admin/page/doctor/update', [AdminPageController::class, 'doctor_signup_update'])->name('admin_doctor_signup_submit')->middleware('admin:admin');

route::get('/admin/page/doctor/signin', [AdminPageController::class, 'doctor_signin'])->name('admin_doctor_signin')->middleware('admin:admin');
route::post('/admin/page/doctor/submit', [AdminPageController::class, 'doctor_signin_update'])->name('admin_doctor_signin_submit')->middleware('admin:admin');

route::get('/admin/page/patient/signup', [AdminPageController::class, 'patient_signup'])->name('admin_patient_signup')->middleware('admin:admin');
route::post('/admin/page/patient/update', [AdminPageController::class, 'patient_signup_update'])->name('admin_patient_signup_update')->middleware('admin:admin');

route::get('/admin/page/patient/signin', [AdminPageController::class, 'patient_signin'])->name('admin_patient_signin')->middleware('admin:admin');
route::post('/admin/page/patient/submit', [AdminPageController::class, 'patient_signin_update'])->name('admin_patient_signin_submit')->middleware('admin:admin');





