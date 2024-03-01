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

Route::get('/', [TaskController::class, 'index'])->middleware('auth')->name('dashboard');
Route::controller(TaskController::class)->group(function () {
	Route::middleware(['auth'])->group(function () {
		Route::get('/tasks/{task}', 'show')->name('task.show');
		Route::get('/create', 'create')->name('task.create');
		Route::post('/store', 'store')->name('task.store');
		Route::get('/edit/{task}', 'edit')->name('task.edit');
		Route::post('/update', 'update')->name('task.update');
		Route::post('/destroy', 'destroy')->name('task.destroy');
		Route::post('/destroy-old', 'destroyOld')->name('task.destroy_all');
	});
});

Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login.show');
Route::post('login', [LoginController::class, 'login'])->middleware('guest')->name('login.auth');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('switch-lang/{lang}', [LanguageController::class, 'switchLang'])->name('switch_lang');

Route::get('profile', function () {
	return 'hello profile';
})->middleware('auth')->name('profile.show');
