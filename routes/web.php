<?php

use App\Task; 
/*
NOTE:

use derivitave is used to specify which class we used so that we dont repeat this 

ex: 
$tasks = App\Task::all();

after adding class of App\Task;
we can remove App\ dir since we mention on top
like that: 
$tasks = Task::all();

*/


Route::get('/tasks', function () {

    //$tasks = DB::table('tasks')->latest()->get(); 
    //$tasks = App\Task::all();
    
    
    $tasks = Task::all(); // we extended eloquent class and used its function all();

    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {
    
//$task = DB::table('tasks')->find($id);  fetch/retrieve data from tasks table
  
// fetching with eloquent, we extended eloquent class and used its function find($id);
$task = App\Task::find($id); 

    return view('tasks.show', compact('task'));

});



Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');   
});







