<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $data = [
            'descricao' => 'darth',
            'valor'    => 5000,
        ];

       
        // Using Query Builder
        $this->db->table('produtos')->insert($data);
    }
}