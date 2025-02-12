<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use CodeIgniter\RESTful\ResourceController;

class AuthController extends ResourceController
{
    protected $modelName = 'App\Models\UsuarioModel';
    protected $format = 'json';

    private $chaveJWT = "chave_super_secreta"; // Use uma chave segura

    public function registrar()
    {
        $data = $this->request->getPost();

        $usuarioModel = new UsuarioModel();

        $usuario = [
            'nome' => $data['nome'],
            'email' => $data['email'],
            'senha_hash' => password_hash($data['senha'], PASSWORD_DEFAULT),
            'documento' => $data['documento'],
            'assinatura' => hash('sha256', $data['documento'] . time()) // Gera a assinatura eletrônica
        ];

        if ($usuarioModel->insert($usuario)) {
            return $this->respondCreated(['message' => 'Usuário cadastrado com sucesso!']);
        }

        return $this->fail('Erro ao cadastrar usuário.');
    }

    public function login()
    {
        $email = $this->request->getVar('email');
        $senha = $this->request->getVar('senha');
        $sistemaID = $this->request->getVar('sistema_id');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('email', $email)->first();

        if (!$usuario || !password_verify($senha, $usuario['senha_hash'])) {
            return $this->failUnauthorized('Credenciais inválidas.');
        }

        // Verifica se o usuário tem acesso ao sistema
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM usuarios_sistemas WHERE usuario_id = ? AND sistema_id = ?", [$usuario['id'], $sistemaID]);

        if ($query->getNumRows() == 0) {
            return $this->failForbidden('Usuário não tem acesso a este sistema.');
        }

        // Gerando token JWT
        $payload = [
            'id' => $usuario['id'],
            'email' => $usuario['email'],
            'sistema_id' => $sistemaID,
            'assinatura' => $usuario['assinatura'],
            'exp' => time() + (60 * 60) // Expira em 1 hora
        ];

        $token = JWT::encode($payload, $this->chaveJWT, 'HS256');

        return $this->respond(['token' => $token]);
    }

    public function validarToken()
    {
        $token = $this->request->getHeader('Authorization')->getValue();
        if (!$token) {
            return $this->failUnauthorized('Token não fornecido.');
        }

        try {
            $decodificado = JWT::decode($token, new Key($this->chaveJWT, 'HS256'));
            return $this->respond(['status' => 'Token válido', 'dados' => $decodificado]);
        } catch (\Exception $e) {
            return $this->failUnauthorized('Token inválido.');
        }
    }
}
