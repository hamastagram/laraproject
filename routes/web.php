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



Route::get('/about', function () {
    
    //some fetched data from database

    $tasks = DB::table('tasks') -> get(); // fetch data from tasks table
    
    //compact function is a larevel function that output array of data
    
    return view('about', compact('tasks'));
    //return $tasks; RUN THIS to see it in JSON FORMAT

});



Route::get('/tasks/{id}', function ($id) {
    
    //some fetched data from database

    // add conditions to tasks

   

    $task = DB::table('tasks')->find($id); // fetch data from tasks table
    
    //compact function is a larevel function that output array of data
    
    return view('task.show', compact('tasks'));
});


