<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PerfilController extends Controller
{
    public function index()
    {
        return view('perfil'); 
    }

    public function editar()
    {
        return view('editar_perfil'); 
    }
}
