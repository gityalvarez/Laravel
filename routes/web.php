<?php

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

use App\Note;


Route::get('/', function () {
    return view('welcome');
});

Route::get('note','NotesController@index');

Route::get('note/create','NotesController@create');

Route::post('note','NotesController@store');

Route::get('note/{note}/{slug?}','NotesController@show')->where('note','[0-9]+');