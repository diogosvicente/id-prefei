<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class LoginController extends BaseController
{

    /**
     * Class LoginController
     *
     * Controller responsável pela exibição da página "Login".
     */

    public function index()
    {
        /**
         * Exibe a página "Login".
         *
         * @return \CodeIgniter\View\View
         */
        return view('login/login');
    }

    public function forgot_password()
    {
        return view('login/forgot_password');
    }

    public function logout()
    {
        session()->destroy();
		return redirect()->to(base_url());
    }
}