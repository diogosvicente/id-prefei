<?php

namespace App\Controllers;

use App\Models\FirstAccessTokenModel;
use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class FirstAccessController extends Controller
{
    public function first_access()
    {
        return view('login/first_access');
    }

    public function first_access_validate()
    {
        dd("Hello World!");
    }

    public function validateForm()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'csrf_test_name' => 'required',
            'identificador' => 'required|min_length[11]|max_length[14]|regex_match[/^\d{3}\.\d{3}\.\d{3}-\d{2}$/]', 
            'email' => 'required|valid_email|is_unique[usuarios.email]'
        ];

        $messages = [
            'csrf_test_name' => ['required' => 'Token CSRF inválido ou ausente.'],
            'identificador' => [
                'required' => 'O CPF é obrigatório.',
                'min_length' => 'O CPF deve ter no mínimo 11 caracteres.',
                'max_length' => 'O CPF deve ter no máximo 14 caracteres.',
                'regex_match' => 'Formato de CPF inválido. Use: 000.000.000-00.'
            ],
            'email' => [
                'required' => 'O e-mail é obrigatório.',
                'valid_email' => 'Forneça um e-mail válido.',
                'is_unique' => 'Este e-mail já está cadastrado.'
            ]
        ];

        $validation->setRules($rules, $messages);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $validation->getErrors()
            ]);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Dados validados com sucesso.'
        ]);
    }

    public function solicitarAcesso()
    {
        echo "<pre>";
        dd(print_r($this->request->getPost()));
        $cpf = $this->request->getPost('identificador');
        $email = $this->request->getPost('email');

        if (empty($cpf) || empty($email)) {
            return redirect()->back()->with('error', 'Todos os campos são obrigatórios.');
        }

        $model = new FirstAccessTokenModel();
        $token = $model->gerarToken($cpf, $email);

        // Montar e enviar e-mail
        helper('email_helper'); // Criamos um helper para facilitar
        $enviado = enviar_email_first_access($email, $token);

        if ($enviado) {
            return redirect()->to('/first_access')->with('success', 'Verifique seu e-mail para continuar o cadastro.');
        } else {
            return redirect()->back()->with('error', 'Erro ao enviar e-mail. Tente novamente.');
        }
    }

    public function validarAcesso($token)
    {
        $model = new FirstAccessTokenModel();
        $registro = $model->validarToken($token);

        if (!$registro) {
            return view('errors/custom_error', ['message' => 'Token inválido ou expirado.']);
        }

        return view('first_access/form', ['cpf' => $registro['cpf'], 'email' => $registro['email'], 'token' => $token]);
    }

    public function concluirCadastro()
    {
        $token = $this->request->getPost('token');
        $senha = $this->request->getPost('senha');

        $model = new FirstAccessTokenModel();
        $registro = $model->validarToken($token);

        if (!$registro) {
            return redirect()->to('/first_access')->with('error', 'Token inválido ou expirado.');
        }

        // Criar usuário no banco de dados
        $usuariosModel = new \App\Models\UsuarioModel();
        $usuariosModel->insert([
            'cpf' => $registro['cpf'],
            'email' => $registro['email'],
            'senha' => password_hash($senha, PASSWORD_BCRYPT)
        ]);

        // Invalida o token após o cadastro
        $model->invalidarToken($token);

        return redirect()->to('/login')->with('success', 'Cadastro concluído. Faça login.');
    }
}
