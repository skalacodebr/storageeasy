<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('fornecedor.index');
    }

    public function create()
    {
        return view('fornecedor.create');
    }

    public function edite($id)
    {
        return view('fornecedor.edite');
    }

    public function view($id)
    {
        return view('fornecedor.view');
    }
}
