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
    return view('home', ['titolo' => 'Naviga tre le varie pagine!']);
})->name('home');

Route::get('/rotta_uno', function () {
    $data = [
        'marca' => 'Alfa Romeo',
        'modello' => 'Giulia',
        'allestimeni' => [
            'Super',
            'Sprint',
            'Ti',
            'Veloce',
            'Estrema',
            'Quadrifoglio'
        ]
    ];
    return view('rotta_uno', $data);
})->name('rotta_uno');

Route::get('/rotta_due', function () {
    $data = [
        'titolo' => 'Sully',
        'cast' => [
            'Tom Hanks',
            'Aaron Eckhart',
            'Laura Linney',
            'Anna Gum',
            'Autumn Reeser',
            'Sam Huntington'
        ]
    ];
    return view('rotta_due', $data);
})->name('rotta_due');

Route::get('/rotta_tre', function () {
    $data = [
        'titolo' => 'Lista spesa',
        'oggetti' => [
            'Verdure',
            'Affettati',
            'Carne',
            'Bibite'
        ]
    ];
    return view('rotta_tre', $data);
})->name('rotta_tre');
