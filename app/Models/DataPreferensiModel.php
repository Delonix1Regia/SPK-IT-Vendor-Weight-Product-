<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPreferensiModel extends Model
{
    protected $table = 'vw_nilai_preferensi'; 
    protected $primaryKey = 'kode_alternatif'; 
    protected $returnType = 'array'; 
    protected $allowedFields = ['kode_alternatif', 'nilai_preferensi']; // Kolom yang tersedia (meskipun pada view tidak relevan untuk input)

    
    public function tampilpreferensi()
    {
        return $this->findAll(); 
    }
}
