<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    }

    public function create(){
        return view('create');
    }

    public function store(){
        try {
            $this->validate(request(), [
                'task' => ['required'],
                'deadline' => ['required']
            ]);
        } catch (ValidationException $e) {
        }
        $data = request()->all();
        $todo = new Todo();
        $todo->task = $data['task'];
        $todo->deadline = $data['deadline'];
        $todo->save();
        session()->flash('success', 'Todo created succesfully');
        return redirect('/');

    }


    public function edit(Todo $todo){
        return view('edit')->with('todos', $todo);
    }
    public function update(Todo $todo){

        try {
            $this->validate(request(), [
                'task' => ['required'],
                'deadline' => ['required'],

            ]);
        } catch (ValidationException $e) {
        }
        $data = request()->all();
        $todo->task = $data['task'];
        $todo->deadline = $data['deadline'];
        $todo->save();
        session()->flash('success', 'Todo updated successfully');
        return redirect('/');
    }

    public function details(Todo $todo){
        return view('details')->with('todos', $todo);
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/');
    }
}
