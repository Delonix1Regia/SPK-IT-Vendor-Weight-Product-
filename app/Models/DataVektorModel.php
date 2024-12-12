<?php

namespace App\Models;

use CodeIgniter\Model;

class DataVektorModel extends Model
{
    protected $table = 'vw_nilai_vektor'; 
    protected $primaryKey = 'kode_alternatif'; 
    protected $returnType = 'array'; 
    protected $allowedFields = ['kode_alternatif', 'nilai_S']; 


    public function tampilVektor()
    {
        return $this->findAll(); 
    }
}
