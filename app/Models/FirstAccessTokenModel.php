<?php

namespace App\Models;

use CodeIgniter\Model;

class FirstAccessTokenModel extends Model
{
    protected $table = 'first_access_tokens';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cpf', 'email', 'token', 'expirado', 'criado_em', 'expira_em'];
    protected $returnType = 'array';
    protected $useTimestamps = false;

    public function gerarToken($cpf, $email)
    {
        $token = bin2hex(random_bytes(32)); // Gera um token seguro
        $expira_em = date('Y-m-d H:i:s', strtotime('+1 hour')); // Expira em 1 hora

        // Remove tokens antigos do mesmo CPF
        $this->where('cpf', $cpf)->delete();

        $this->insert([
            'cpf' => $cpf,
            'email' => $email,
            'token' => $token,
            'expirado' => 0,
            'expira_em' => $expira_em
        ]);

        return $token;
    }

    public function validarToken($token)
    {
        $registro = $this->where('token', $token)->where('expirado', 0)
                     ->where('expira_em >=', date('Y-m-d H:i:s'))->first();
        return $registro;
    }

    public function invalidarToken($token)
    {
        return $this->where('token', $token)->set(['expirado' => 1])->update();
    }
}
