<?php

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', 'NotesController@index');

Route::get('notes/create', 'NotesController@create');
Route::post('notes', 'NotesController@store');

Route::get('notes/{note}', 'NotesController@show')->where('note', '[0-9]+');
