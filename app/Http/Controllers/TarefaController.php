<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        return Tarefa::all(); // Lista todas as tarefas
    }

    public function store(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->descricao = $request->descricao;
        $tarefa->concluida = false;
        $tarefa->save();

        return $tarefa;
    }

    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->concluida = $request->concluida;
        $tarefa->save();

        return $tarefa;
    }

    public function destroy($id)
    {
        Tarefa::destroy($id);
        return response()->json(['mensagem' => 'Apagado com sucesso!']);
    }
}

