<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class EventoEsportivoController extends Controller
{
    public function visualizar($idEvento = null)
    {
        // Your logic to handle the event based on $idEvento
        // ...

        return view('evento_esportivo'); // Or any other view you want to display
    }
}
