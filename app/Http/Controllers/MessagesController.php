<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(){
        request()->validate([
                'name' => 'required',
                'email' => 'required',
                'subject'=> 'required',
                'content' => 'required|min:10'
        ]);
        return 'dades validades!!!';
    }
}
