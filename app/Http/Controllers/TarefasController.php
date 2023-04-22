<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefasController extends Controller
{
    //
    public function index()
    {
        return \App\Models\Tarefa::all();
    }

    public function show(Tarefa $tarefa)
    {
        return $tarefa;
    }

    public function store(Request $request)
    {
        $tarefa = \App\Models\Tarefa::create($request->all());
        return response()->json($tarefa, 201);
    }

    public function update(Request $request, Tarefa $tarefa)
    {
        $tarefa->update($request->all());
        return response()->json($tarefa, 200);
    }

    public function delete(Tarefa $tarefa)
    {
        $tarefa->delete();
        return response()->json(null, 204);
    }
}
