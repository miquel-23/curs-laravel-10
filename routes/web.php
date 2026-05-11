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
    //return 'Llista de notes';
    $notes = [
        'Primera nota',
        'Segona nota',
        'Tercera nota',
        'Quarta nota',
        'Cinquena nota',
        '<script>alert("Codi maliciós")</script>',
    ];
    // -> resources/views/notes/index.blade.php
    return view('notes.index')->with('notes', $notes);
})->name('notes.index');

Route::get('/notes/{id}', function ($id) {
    return 'Detall de la nota: ' . $id;
})->name('notes.view');
//})->whereNumber('id');
//})->where('id', '\d+');

Route::get('/notes/crear', function () {
    //return 'Crea nova nota';
    return view('notes.create'); // -> resources/views/notes/create.blade.php
})->name('notes.create');

/*Route::get('/notes/editar', function () {
    return 'Edita nota: ' . $_GET['id'];
});*/

Route::get('/notes/{id}/editar', function ($id) {
    return 'Edita nota: ' . $id;
})->name('notes.edit');
