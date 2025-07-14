<?php

namespace App\Http\Controllers;

class ContratosController extends Controller
{
    public function index()
    {
        return view('contratos.index');
    }

    public function view($id)
    {
        return view('contratos.view');
    }

    public function assinar($id, $token)
    {
        return view('contratos.assinar');
    }


}
