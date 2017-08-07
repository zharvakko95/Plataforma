<?php

use App\Topic;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrarcurso', function () {
    return view('registrar_curso');
})->name('registrarcurso');

Route::get('/registertopic/id/{id}', function ($id) {
    return view('register_topic', ['id' => $id])->with('topics', Topic::where('id_cursoFK', '=', $id)->get());
});

Route::get('/curso', function () {
    return view('curso');
});
Route::get('/editarcurso', function () {
    return view('editar_curso');
});
 // Route::post('home','GradesController@getData');

Route::get('/topic', function () {
    return view('topic');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/question', function () {
    return view('question');
});

Route::post('store','GradesController@store');
Route::post('updateData','GradesController@updateData');
Route::post('topic', 'TopicController@store');

Route::post('question', 'QuestionController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/curso/id={id}', 'GradesController@index');

Route::get('/topic/id={id}', 'TopicController@index');

Route::get('/review/id={id}', 'ReviewController@index');

Route::get('/question/id={id}', 'QuestionController@index');
