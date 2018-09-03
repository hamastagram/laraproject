<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->latest()->get(); 

    return view('tasks.index', compact('tasks'));
});


/* maybe we need to foucs on specific task
we seperate that task and in this example we use */


/* this curly brace is a wild card that  
{id} checks to see what used type in uri 
or a link to 
*/

Route::get('/tasks/{id}', function ($id) {
    


$task = DB::table('tasks')->find($id); // fetch/retrieve data from tasks table
    
    //dd($task);

    return view('tasks.show', compact('task'));

});




Route::get('/about', function () {
    
    $tasks = DB::table('tasks') -> get(); // fetch data from tasks table



    //compact function is a larevel function that output array of data
    
    return view('about', compact('tasks'));
    
});







