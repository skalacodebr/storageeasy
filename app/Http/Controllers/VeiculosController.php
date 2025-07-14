<?php

namespace App\Http\Controllers;

class VeiculosController extends Controller
{
    public function index()
    {
        return view('veiculos.index');
    }

    public function create()
    {
        return view('veiculos.create');
    }

    public function edite($id)
    {
        return view('veiculos.edite');
    }

    public function view($id)
    {
        return view('veiculos.view');
    }
}
