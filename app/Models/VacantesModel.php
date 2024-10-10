<?php

namespace App\Models;
use CodeIgniter\Model;

class VacantesModel extends Model {
    protected $table = 'vacantes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'titulo',
        'descripcion',
        'salario',
        'ubicacion',
        'id_categoria',
        'id_empresa',  // Relación con la tabla de empresas
        'telefono',
        'estado'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_publicacion';
    protected $updatedField  = 'fecha_edicion';
}
