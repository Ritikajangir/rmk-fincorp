<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TeamMemberController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-submit', [HomeController::class, 'submitContact'])->name('contact.submit');

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
        Route::get('general-settings', [AdminHomeController::class, 'generalSetting'])->name('general-settings');
        Route::post('general-settings/update', [AdminHomeController::class, 'generalSettingUpdate'])->name('general-settings.update');
        Route::get('home-page-content', [AdminHomeController::class, 'homePageContent'])->name('home-page-content');
        Route::post('home-page-content/update', [AdminHomeController::class, 'homePageContentUpdate'])->name('home-page-content.update');
        Route::resource('branch', BranchController::class);
        Route::resource('pages', PageController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('team-members', TeamMemberController::class);
    });
});

Route::get('/{slug}', [HomeController::class, 'pages'])->name('pages');