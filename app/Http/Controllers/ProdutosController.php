<?php

namespace App\Http\Controllers;

class ProdutosController extends Controller
{
    public function index()
    {
        return view('produtos.index');
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function edite($id)
    {
        return view('produtos.edite');
    }

    public function view($id)
    {
        return view('produtos.view');
    }
}
