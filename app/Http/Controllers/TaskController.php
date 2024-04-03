<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::get();
        return view('index',compact('tasks'));
    }

    public function create(){
        return view('create');
    }

    public function save(Request $request){
        $task = new Task;
        $task->id = $request->id;
        $task->descripcio = $request->descripcio;
        $task->save();
        return redirect()->route('index');
    }
}
