<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController

{
    //Função que retorna a página de cadastro
    public function mostrarPaginaCadastro()
    {
        return view('cadastro');
    }

    //Função que retorna a página de login
    public function mostrarPaginaLogin()
    {
        return view('login');
    }


    public function realizarCadastro()
    {

        $novoUsuario = new UserModel();

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


        //se falhar, retorne para a view cadastro com os erros
        if (!$this->validate($regras_validacao)) {
            return view('cadastro', [
                'validation' => $this->validator
            ]);
        }         
        else {
            //se não falhar, retorne para a view cadastro com os erros
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
                //'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),

            ];

            if ($novoUsuario->insert($data)) {
                return redirect()->route('login');
            } else {
               echo "erro";
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
            //$session = session();
            session()->set('user_id', $usuario['id']);
            return redirect()->to('/dashboard');
        } else {
            session()->setFlashdata('erro', "Login ou senha inválidos");

            echo view('login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->route('login');
    }
}
