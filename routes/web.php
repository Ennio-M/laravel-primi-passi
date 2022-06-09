<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/rotta_uno', function () {
    return view('rotta_uno');
})->name('rotta_uno');

Route::get('/rotta_due', function () {
    return view('rotta_due');
})->name('rotta_due');

Route::get('/rotta_tre', function () {
    return view('rotta_tre');
})->name('rotta_tre');
