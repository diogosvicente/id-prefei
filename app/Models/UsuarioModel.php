<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'senha_hash', 'cpf', 'assinatura', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function getByCPF($cpf)
    {
        return $this->where('cpf', $cpf)->first();
    }
}
