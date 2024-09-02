<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function mostrarPaginaCadastro()
    {
        return view('cadastro');
    }

    public function mostrarPaginaLogin()
    {
        return view('login');
    }

    public function realizarCadastro()
    {
        $userModel = new UserModel();

        $regras_validacao = [
            'username' => [
                'rules' => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'O campo "Nome de usuário" é obrigatório.',
                    'min_length' => 'O campo "Nome de usuário" deve ter pelo menos 5 caracteres.',
                    'max_length' => 'O campo "Nome de usuário" não pode exceder 20 caracteres.',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[usuarios.email]',
                'errors' => [
                    'required' => 'O campo "E-mail" é obrigatório.',
                    'valid_email' => 'Por favor, insira um e-mail válido.',
                    'is_unique' => 'Este e-mail já está registrado.',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'O campo "Senha" é obrigatório.',
                    'min_length' => 'O campo "Senha" deve ter pelo menos 8 caracteres.',
                ]
            ]
        ];

        if (!$this->validate($regras_validacao)) {
            return view('cadastro', ['validation' => $this->validator]);
        } else {
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            ];

            if ($userModel->insert($data)) {
                return redirect()->to('/login');
            } else {
                echo "Erro ao cadastrar";
            }
        }
    }

    public function realizarLogin()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $usuario = $userModel->login($username, $password);

        if ($usuario) {
            session()->set('user_id', $usuario['id']);
            return redirect()->to('/tela'); // Redireciona para a página inicial após o login
        } else {
            session()->setFlashdata('erro', "Login ou senha inválidos");
            return view('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
