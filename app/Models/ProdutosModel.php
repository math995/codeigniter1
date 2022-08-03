<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Models{
    protected $table       ='produtos';
    protected $primaryKey  = 'id';
    protected $allowedFields = ['descricao', 'valor'];
}