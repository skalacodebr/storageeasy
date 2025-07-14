<?php

namespace App\Http\Controllers;

class TarefasController extends Controller
{
    public function index()
    {
        return view('tarefas.index');
    }

    public function create()
    {
        return view('tarefas.create');
    }

    public function edite($id)
    {
        return view('tarefas.edite');
    }

    public function view($id)
    {
        return view('tarefas.view');
    }
}
