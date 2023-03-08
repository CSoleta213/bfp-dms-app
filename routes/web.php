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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/establishments', function () {
    return view('establishments');
});

Route::get('/add-new-applicant', function () {
    return view('add-new-applicant');
});

Route::get('/fsic-sms-notification', function () {
    return view('fsic-sms-notification');
});

Route::get('/closed-establishments', function () {
    return view('closed-establishments');
});

Route::get('/video-tutorial', function () {
    return view('video-tutorial');
});