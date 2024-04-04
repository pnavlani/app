<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
     //Index: Aqui es on mostra els articles com anonim
    public function index()
    {
        $articles = Task::paginate(5); // Obte articles de Base de Dades
        return view('index', ['articles' => $articles]); // Pasa articles a la vista
    }

   
}
