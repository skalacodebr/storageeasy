<?php

namespace App\Http\Controllers;

class AguardandoController extends Controller
{
    public function index()
    {
        return view('aguardando.index');
    }

    public function create()
    {
        return view('aguardando.create');
    }

    public function edite($id)
    {
        return view('aguardando.edite');
    }

    public function view($id)
    {
        return view('aguardando.view');
    }
}
