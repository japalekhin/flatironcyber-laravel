<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    public static function setupRoutes()
    {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/sign-in', 'showLoginForm')->name('login');
            Route::post('/sign-in', 'login')->name('postLogin');
            Route::any('/sign-out', 'logout')->name('logout');
        });

        Route::controller(RegisterController::class)->group(function () {
            Route::get('/sign-up', 'showRegistrationForm')->name('register');
            Route::post('/sign-up', 'register')->name('postRegister');
        });

        Route::controller(ForgotPasswordController::class)->group(function () {
            Route::get('/password/reset', 'showLinkRequestForm')->name('password.request');
            Route::post('/password/email', 'sendResetLinkEmail')->name('password.email');
        });
        Route::controller(ResetPasswordController::class)->group(function () {
            Route::get('/password/reset/{token}', 'showResetForm')->name('password.reset');
            Route::post('/password/reset', 'reset')->name('password.update');
        });

        Route::controller(ConfirmPasswordController::class)->group(function () {
            Route::get('/password/confirm', 'showConfirmForm')->name('password.confirm');
            Route::post('/password/confirm', 'confirm');
        });

        Route::controller(VerificationController::class)->group(function () {
            Route::get('/email/verify', 'show')->name('verification.notice');
            Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
            Route::post('/email/resend', 'resend')->name('verification.resend');
        });
    }
}
