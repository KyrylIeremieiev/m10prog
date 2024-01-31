<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectHandler;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'showMain']);
Route::get('/project/{variable}', [ProjectController::class, 'showProject']);
Route::get('/login', [LoginPageController::class, 'login']);
Route::post('/meta/login', [LoginController::class, 'login']);
Route::post('/meta/ProjectHandler', [ProjectHandler::class]);