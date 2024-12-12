<?php

namespace App\Models;

use CodeIgniter\Model;

class DataVendorModel extends Model
{
    protected $table = 'data_vendor'; 
    protected $primaryKey = 'kode_vendor'; 
    protected $allowedFields = ['kode_vendor', 'nama_vendor']; 

    
    // Mengambil semua data vendor
    public function tampilvendor()
    {
        return $this->findAll();
    }
}
