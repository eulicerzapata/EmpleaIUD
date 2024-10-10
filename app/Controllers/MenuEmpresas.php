<?php

namespace App\Controllers;

class MenuEmpresas extends BaseController
{
    public function index()
    {
        
        echo view('/Templetes/headerEmpresas');
        echo view('/Empresas/Menu_Empresas');
        echo view('/Templetes/footer');
    }

   
}
