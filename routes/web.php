<?php

use App\Http\Controllers\ApiKeysController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

IndexController::setupRoutes();
AuthController::setupRoutes();
DashboardController::setupRoutes();
ApiKeysController::setupRoutes();
