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
    //return view('welcome');
    return "Pàgina d'inici";
});

Route::get('/notes', function () {
    return 'Llista de notes';
});

Route::get('/notes/crear', function () {
    return 'Crea nova nota';
});

Route::get('/cursos', function () {
    return [
        'Cursos' => [
            'Curs de Laravel 10',
            'Curs de programació orientada a objectes',
            'Curs de Git',
        ]
    ];
});
