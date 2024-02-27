<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskController::class, 'index'])->middleware('auth');
Route::post('/', [TaskController::class, 'index'])->middleware('auth');

Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'login'])->middleware('guest')->name('login');

Route::get('switch-lang/{lang}', [LanguageController::class, 'switchLang'])->name('switch-lang');
