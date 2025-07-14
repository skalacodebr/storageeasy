<?php

namespace App\Http\Controllers;

class ClientesController extends Controller
{
    public function index()
    {
        return view('clientes.index');
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function edite($id)
    {
        return view('clientes.edite');
    }

    public function view($id)
    {
        return view('clientes.view');
    }

    public function formularios($token)
    {
        return view('clientes.formularios');
    }
}
