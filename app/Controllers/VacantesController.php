<?php

namespace App\Controllers;

use App\Models\VacantesModel;
use App\Models\CategoriasModel;

class VacantesController extends BaseController
{
    protected $vacantesModel;
    protected $categorias;

    public function __construct()
    {
        $this->vacantesModel = new VacantesModel();
        $this->categorias = new CategoriasModel();
    }

    public function MostrarVacantes()
    {
        $vacantesModel = new VacantesModel();

        // Realizar la consulta con JOIN para obtener el nombre de la categoría
        $vacantes = $vacantesModel->select('vacantes.*, categorias_empleo.nombre as categoria')
            ->join('categorias_empleo', 'vacantes.id_categoria = categorias_empleo.id')
            ->orderBy('fecha_publicacion', 'DESC')
            ->findAll();

        echo view('/Templetes/headerEmpresas');
        echo view('/Empresas/Vacantes', ['vacantes' => $vacantes]);
        echo view('/Templetes/footer');
    }

    // Método para cargar el formulario de edición de vacante
    public function edit($id)
    {
        // Obtener la vacante por su ID
        $vacante = $this->vacantesModel->find($id);

        // Obtener todas las categorías de empleo para el select
        $categorias = $this->categorias->findAll();

        if (!$vacante) {
            return redirect()->back()->with('error', 'Vacante no encontrada');
        }
        echo view('/Templetes/headerEmpresas');
        echo view('Empresas/EditVacantes', ['vacante' => $vacante, 'categorias' => $categorias]);
        echo view('/Templetes/footer');
    }

    public function update($id)
    {
        // Validar los datos del formulario
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'salario' => $this->request->getPost('salario'),
            'id_categoria' => $this->request->getPost('id_categoria'),
            'estado' => $this->request->getPost('estado')
        ];

        // Actualizar la vacante
        $this->vacantesModel->update($id, $data);

        // Pasar el mensaje de éxito a la misma vista
        $vacante = $this->vacantesModel->find($id);
        $categorias = $this->categorias->findAll();


        echo view('/Templetes/headerEmpresas');
        echo view('Empresas/EditVacantes', [
            'vacante' => $vacante,
            'categorias' => $categorias,
            'success' => 'Vacante actualizada correctamente.' // Mensaje de éxito
        ]);
        echo view('/Templetes/footer');
    }

    public function NuevaVacante()
    {
        // Obtener las categorías de empleo para el dropdown
        $data['categorias'] = $this->categorias->findAll();

        echo view('/Templetes/headerEmpresas');
        echo view('Empresas/NuevaVacante', $data);
        echo view('/Templetes/footer');
    }

    public function create()
{
    // Obtener el ID de la empresa desde la sesión
    $id_empresa = session('id'); 

    // Validar los datos del formulario
    $data = [
        'titulo' => $this->request->getPost('titulo'),
        'descripcion' => $this->request->getPost('descripcion'),
        'ubicacion' => $this->request->getPost('ubicacion'),
        'salario' => $this->request->getPost('salario'),
        'id_categoria' => $this->request->getPost('id_categoria'),
        'estado' => $this->request->getPost('estado'),
        'id_empresa' => $id_empresa // Añadir el ID de la empresa aquí
    ];

    // Crear la nueva vacante
    $this->vacantesModel->insert($data);

    // Redirigir con un mensaje de éxito
    return redirect()->to('/Vacantes/VerVacantes')->with('success', 'Vacante creada correctamente.');
}

}
