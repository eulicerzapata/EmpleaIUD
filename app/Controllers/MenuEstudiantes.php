<?php

namespace App\Controllers;

class MenuEstudiantes extends BaseController
{
    public function index()
    {
        
        echo view('/Templetes/headerEstudiantes');
        echo view('/Estudiante/Menu_Estudiantes');
        echo view('/Templetes/footer');
    }

   
}
