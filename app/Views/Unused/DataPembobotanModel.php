<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPembobotanModel extends Model
{
    protected $table = 'vw_pembobotan_nilai'; 
    protected $primaryKey = 'kode_alternatif'; 
    protected $returnType = 'array'; 
    protected $allowedFields = ['kode_alternatif', 'kode_kriteria', 'nilai_ternormalisasi', 'bobot', 'nilai_berbobot']; // Kolom yang tersedia

    public function tampilpembobotan()
    {
        return $this->findAll();
    }

}
