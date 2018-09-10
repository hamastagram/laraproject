<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;


class TasksController extends Controller
{
    public function index(){

            //$tasks = DB::table('tasks')->latest()->get(); 
            //$tasks = App\Task::all();
            
            $tasks = Task::all(); // we extended eloquent class and used its function all();
            return view('tasks.index', compact('tasks'));

    }


    public function show($id){

            //$task = DB::table('tasks')->find($id);  fetch/retrieve data from tasks table
  
            // fetching with eloquent, we extended eloquent class and used its function find($id);
            $task = Task::find($id); 

            return view('tasks.show', compact('task'));
    }
}
