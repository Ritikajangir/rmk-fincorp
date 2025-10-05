<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PageController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-submit', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::get('/charges', [HomeController::class, 'services'])->name('charges');
Route::get('/terms-conditions', [HomeController::class, 'termConditions'])->name('term-conditions');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login_submit', [LoginController::class, 'login'])->name('loginSubmit');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('forget-password', [ForgotPasswordController::class, 'showForm'])->name('password.request');
        Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    });

    Route::group(['middleware' => ['auth.admin','preventBackHistory']], function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('home');
        Route::resource('branch', BranchController::class);
        Route::resource('page', PageController::class);
    });
});