<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class todosController extends Controller
{
    //
    public function index()
    {
        $todos = todos::all();
        return view('index',  ['todos' => $todos]);
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|alpha_dash',
            'description' => 'required|max:350',
        ]);

        $todo = new todos;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->completed = false;
        $todo->save();
        return redirect('/todos');
    }
}
