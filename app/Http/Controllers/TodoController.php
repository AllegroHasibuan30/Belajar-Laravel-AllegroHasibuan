<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function tampiltodo(){
        #Query Builder
    $todolist = \DB::table("todo")->get();
    
        return view("tabel todo")
        ->with("Todo",Todo::all());
    }
}
