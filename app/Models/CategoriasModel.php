<?php

namespace App\Models;
use CodeIgniter\Model;

class CategoriasModel extends Model {
    protected $table = 'categorias_empleo';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
    ];

    protected $useTimestamps = true;
    protected $createdField  = '';
    protected $updatedField  = '';
}
