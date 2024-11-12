<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('tela');
    }
}

class Tela2Controller extends Controller
{
    public function index()
    {
        // Lógica para exibir a tela2.php
        return view('tela2'); // 'tela2' é o nome do arquivo de visualização
    }
}

