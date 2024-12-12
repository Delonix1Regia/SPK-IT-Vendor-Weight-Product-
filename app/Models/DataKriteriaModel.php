<?php 
namespace App\Models;
use CodeIgniter\Model;

class DataKriteriaModel extends Model
{
    protected $table = 'data_kriteria';
 
     protected $primaryKey = 'kode_kriteria';
     protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'tipe', 'bobot']; 

 
     public function tampilkriteria()
     {
         return $this->findAll();
     }
 }
