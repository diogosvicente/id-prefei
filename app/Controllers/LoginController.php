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
        return view('base/login');
    }

}