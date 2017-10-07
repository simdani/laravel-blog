<?php

use App\Task;

Route::get('/tasks', function () {

    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
}); 

Route::get('/tasks/{id}', function($id) {
    //$task = DB::table('tasks')->find($id);
    $task = Task::find($id);
    
    return view('tasks.show', compact('task'));
});