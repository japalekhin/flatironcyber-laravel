<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public static function setupRoutes()
    {
        Route::controller(self::class)->group(function () {
            Route::get('/', 'getIndex')->name('index');
        });
    }

    public function getIndex(Request $request)
    {
        return view('index');
    }
}
