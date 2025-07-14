<?php

namespace App\Http\Controllers;

class ChecklistController extends Controller
{
    public function index()
    {
        return view('checklist.index');
    }

    public function create()
    {
        return view('checklist.create');
    }

    public function edite($id)
    {
        return view('checklist.edite');
    }

    public function view($id)
    {
        return view('checklist.view');
    }
}
