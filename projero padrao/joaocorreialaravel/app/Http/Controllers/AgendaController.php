<?php

namespace App\Http\Controllers;

class AgendaController extends Controller
{
    public function index()
    {
        return view('agenda.index');
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function edite($id)
    {
        return view('agenda.edite');
    }

    public function view($id)
    {
        return view('agenda.view');
    }
}
