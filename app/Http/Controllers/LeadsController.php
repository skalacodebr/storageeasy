<?php

namespace App\Http\Controllers;

class LeadsController extends Controller
{
    public function index()
    {
        return view('leads.leads.index');
    }
    public function atividades()
    {
        return view('leads.atividades.index');
    }
    public function calendario()
    {
        return view('leads.calendario.index');
    }
    public function campanhas()
    {
        return view('leads.campanhas.index');
    }   
    public function dashboard()
    {
        return view('leads.dashboard.index');
    }

    
}
  