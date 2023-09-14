<?php

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
    return view('dashboard');
})->name('dashboard.home');
Route::get('/licenses-list', function () {
    return view('licenses_list');
})->name('licenses_list');
Route::get('/license-add', function () {
    return view('license_add');
})->name('license_add');
Route::get('/free-trial', function () {
    return view('free_trial');
})->name('free_trial');
Route::get('/files-guide', function () {
    return view('files_guide');
})->name('files_guide');
