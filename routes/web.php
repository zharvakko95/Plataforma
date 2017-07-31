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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrarcurso', function () {
    return view('registrar_curso');
})->name('registrarcurso');

Route::get('/registertopic', function () {
    return view('register_topic');
})->name('registertopic');

Route::get('/curso', function () {
    return view('curso');
});

Route::post('store','GradesController@store');

Route::post('topic', 'TopicController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/curso/id={id}', 'GradesController@index');