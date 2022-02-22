<?php
namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
class TodosController extends Controller {
    public function index () {
        //Fetch all todos from DB and display it on the index page
        return view('todos.index')->with('todos', Todo::all());
    }
    public function show ($todoId) {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }
    public function create ($todoId) {
        return view ('todos.create');
    }

}
