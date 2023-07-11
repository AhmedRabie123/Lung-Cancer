<?php

use Illuminate\Support\Facades\Route;

/* Front */ 

use App\Http\Controllers\Front\HomeController;




/* Admin */ 

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;






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








