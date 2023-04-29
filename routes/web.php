<?php

use App\Http\Controllers\ChannelController;

use App\mixins\StrMixins;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Str;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('auth.login');
})->name('/');

Route::post('login',[LoginController::class,'index'])->name('login');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::post('get_next_question',[DashboardController::class,'getNextQuestion'])->name('get_next_question');
Route::get('logout',[DashboardController::class,'logout'])->name('logout');








