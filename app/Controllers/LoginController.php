<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function entrar()
    {
        // 1. Obter os dados do formulário
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        // 2. Validar os dados (opcional, mas recomendado)
        // ...

        // 3. Autenticar o usuário (verificar se as credenciais são válidas)
        $usuarioAutenticado = /* ... sua lógica de autenticação aqui ... */;

        // 4. Redirecionar o usuário para a página apropriada
        if ($usuarioAutenticado) {
            // Redirecionar para a página inicial ou área restrita
            return redirect()->to('/PPI/public/dashboard'); // Ou outra página após login
        } else {
            // Redirecionar de volta para a página de login com mensagem de erro
            return redirect()->to('/PPI/public/login')->with('erro', 'Credenciais inválidas.');
        }
    }
}
