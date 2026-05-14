<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $notes = DB::table('notes')->orderByDesc('created_at')->get();
    return view('notes.index')->with('notes', $notes);
})->name('notes.index');

Route::get('/notes/{id}', function ($id) {
    $nota = DB::table('notes')->find($id);
    abort_if($nota === null, 404);
    return 'Detall de la nota: id ' . $nota->id . ' - títol: ' . $nota->title . ' - contingut: ' . $nota->content;
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
    $nota = DB::table('notes')->find($id);
    abort_if($nota === null, 404);
    return 'Edita nota: ' . $nota->title;
})->name('notes.edit');
