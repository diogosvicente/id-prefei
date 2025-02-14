<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class SobreController extends BaseController
{

    /**
     * Class SobreController
     *
     * Controller responsável pela exibição da página "Sobre o Sistema".
     */

    public function index()
    {
        /**
         * Exibe a página "Sobre o SIG-PREFEI".
         *
         * @return \CodeIgniter\View\View
         */
        return view('base/sobre');
    }

}