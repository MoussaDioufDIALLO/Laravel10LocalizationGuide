<?php

use App\Http\Controllers\langcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/home', [langcontroller::class, 'index']);
Route::get('lang/change', [langcontroller::class, 'change'])->name('changeLang');