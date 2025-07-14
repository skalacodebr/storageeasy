<?php

namespace App\Http\Controllers;

class FinancasController extends Controller
{
    public function index()
    {
        return view('financas.index');
    }

    public function create()
    {
        return view('financas.create');
    }

    public function edite($id)
    {
        return view('financas.edite');
    }

    public function view($id)
    {
        return view('financas.view');
    }
}
