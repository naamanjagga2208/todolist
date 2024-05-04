<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todo = Todo::all();
        return view('index')->with('todos',$todo);
    } 
    public function create(){
        return view('create');
    }
    public function details(){
    
        $todo = Todo::all();
        return view('details')->with('todos',$todo);
    
    }
    
    public function edit(){
    
        return view('edit');
    
    }
    public function update($id){
        Todo::where('id',$id)->update(['status'=>'Done']);
        $todo = new Todo();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/');
    
    }
    public function delete($id){
    
        Todo::where('id', $id)->delete();
        return redirect('/');
    
    }
    public function store() {

        $data = request()->all();
        $todo = new Todo();
        $exist = Todo::where('name', $data['name'])->first();
        if(empty($exist)) {
            $todo->name = $data['name'];
            $todo->status = 'Pending';
            $todo->save();
            session()->flash('success', 'Todo Added successfully');
        } else {
            session()->flash('danger', 'Task Already Exist');
        }
        return redirect('/');
    }
}
