<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class EventoController extends Controller
{
    public function criar()
    {
        return view('criar-evento'); 
    }
}
