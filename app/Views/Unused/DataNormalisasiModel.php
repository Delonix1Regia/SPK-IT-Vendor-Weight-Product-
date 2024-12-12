<?php

namespace App\Models;

use CodeIgniter\Model;

class DataNormalisasiModel extends Model
{
    protected $table = 'vw_normalisasi_nilai'; 
    protected $primaryKey = 'kode_alternatif'; 
    protected $returnType = 'array'; 
    protected $allowedFields = ['kode_alternatif', 'kode_kriteria', 'nilai_ternormalisasi']; // Kolom yang tersedia
    
    
    public function tampilnormalisasi()
    {
        return $this->findAll();
    }

}
