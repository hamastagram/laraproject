<?php




Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->latest()->get(); 

    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {
    
$task = DB::table('tasks')->find($id); // fetch/retrieve data from tasks table
    
    return view('tasks.show', compact('task'));

});






Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    
    $tasks = DB::table('tasks') -> get(); // fetch data from tasks table
    
    return view('about');
    
});







