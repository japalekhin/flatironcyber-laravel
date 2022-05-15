<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DemoController extends Controller
{
    public static function setupRoutes()
    {
        Route::controller(self::class)->prefix('/demo')->group(function () {
            Route::get('/', 'getDemo')->name('demo');
            Route::post('/', 'postDemo')->name('post-demo');
        });
    }

    public function getDemo()
    {
        if (!env('APP_DEBUG', false)) {
            return redirect()->route('index');
        }

        return view('demo');
    }

    public function postDemo(Request $request)
    {
        if (!env('APP_DEBUG', false)) {
            return redirect()->route('index');
        }

        $request->session()->flash('demo-results', true);
        $request->session()->flash('demo-email-compromised', rand(0, 1) === 1);
        $request->session()->flash('demo-password-compromised', rand(0, 1) === 1);
        $request->session()->flash('demo-risk', rand(0, 100));

        return redirect()->route('demo');
    }
}
