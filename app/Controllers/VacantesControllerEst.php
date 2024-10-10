<?php

namespace App\Controllers;

use App\Models\VacantesModel;
use App\Models\CategoriasModel;
use App\Models\UsuariosModel;

class VacantesControllerEst extends BaseController
{
    protected $vacantesModel;
    protected $categorias;
    protected $usuarios;

    public function __construct()
    {
        $this->vacantesModel = new VacantesModel();
        $this->categorias = new CategoriasModel();
        $this->usuarios = new UsuariosModel();
    }

    public function MostrarVacantes()
    {
        $vacantesModel = new VacantesModel();
      

        $vacantes = $vacantesModel->select('vacantes.*, categorias_empleo.nombre as categoria, usuarios.nombre as empresa')
        ->join('categorias_empleo', 'vacantes.id_categoria = categorias_empleo.id')
        ->join('usuarios', 'vacantes.id_empresa = usuarios.id') // Aquí no es necesario el alias ya que no hay conflicto
        ->orderBy('fecha_publicacion', 'DESC')
        ->findAll();
    
        

        echo view('/Templetes/headerEstudiantes');
        echo view('/Estudiante/Vacantes', ['vacantes' => $vacantes], );
        echo view('/Templetes/footer');
    }
}
