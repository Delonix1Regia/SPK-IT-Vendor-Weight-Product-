<?php

namespace App\Models;

use CodeIgniter\Model;

class DataRankingModel extends Model
{
    protected $table = 'vw_rangking'; 
    protected $primaryKey = 'kode_alternatif'; 
    protected $returnType = 'array'; 
    protected $allowedFields = ['kode_alternatif', 'nilai_preferensi', 'ranking']; 


    public function tampilranking()
    {
        return $this->findAll(); 
    }
}
