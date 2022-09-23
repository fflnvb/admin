<?php

use Illuminate\Support\Facades\Route;
use fflnvb\admin\Http\Controllers\LoginController;

// Administration Panel

Route::get('/login', function () {
    return view('admin::pages.login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('admin::pages.dashboard.index');
})->name('dashboard')->middleware('auth');

/*
|--------------------------------------------------------------------------
| CUSTOM ROUTES BELOW
| Do not remove this comment in order to make update procedures easier
|--------------------------------------------------------------------------
*/
