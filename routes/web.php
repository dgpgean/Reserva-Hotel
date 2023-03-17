<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ConfigController};

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
    return view('welcome');
})->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::get('/config', [ConfigController::class, 'index'])->name('config.index');
    Route::post('/config', [ConfigController::class, 'store'])->name('config.store');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
