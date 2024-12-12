<?php 
namespace App\Models;

use CodeIgniter\Model;

class DataPenilaianModel extends Model
{
    protected $table = 'data_penilaian';
 
     protected $primaryKey = 'id_penilaian';
     protected $allowedFields = ['id_penilaian', 'kode_alternatif', 'kode_kriteria', 'nilai']; 

 
     public function tampilpenilaian()
     {
         return $this->findAll();
     }
}
