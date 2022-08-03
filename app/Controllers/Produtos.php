<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{
    private $produtosModel;

 
public function __construct(){
$this->produtosModel = new \App\Models\ProdutoModel();
   }

Public Function Listar()
   {
    $data = $this->produtosModel->findAll();
    return $this->response->setJson($data);
   }
}
