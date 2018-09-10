<?php

use App\Task; 



Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');   
});







