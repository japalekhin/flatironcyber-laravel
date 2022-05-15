<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public static function setupRoutes()
    {
        Route::controller(self::class)->group(function () {
            Route::get(RouteServiceProvider::HOME, 'getDashboard')->name('dashboard');
        });
    }

    public function getDashboard() {
        return view('dashboard');
    }
}
