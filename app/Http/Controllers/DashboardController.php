<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public static function setupRoutes()
    {
        Route::controller(self::class)->middleware('auth')->group(function () {
            Route::get(RouteServiceProvider::HOME, 'getDashboard')->name('dashboard');
        });
    }

    public function getDashboard()
    {
        $userApiKeyQuery = ApiKey::getByUserId(Auth::user()->id);
        $apiKeyCount = $userApiKeyQuery->count();
        $activeApiKeyCount = $userApiKeyQuery->where('is_active', true)->count();

        return view('dashboard', [
            'apiKeyCount' => $apiKeyCount,
            'activeApiKeyCount' => $activeApiKeyCount,
        ]);
    }
}
