<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class todoController extends Controller
{
    public function index(Request $request)
    {
        $items = todolist::all();
        return view('layouts.index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, todolist::$rules);
        $items = $request->all();
        todolist::create($items);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, todolist::$rules);
        $task = todolist::find($request->id);
        $items = $request->all();
        $task->fill($items)->save();
        return redirect('/');
    }

    public function delete(Request $request)
    {
        todolist::find($request->id)->delete();
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $person = todolist::find($request->id);
        return view('layouts.edit', ['items' => $person]);
    }


}
