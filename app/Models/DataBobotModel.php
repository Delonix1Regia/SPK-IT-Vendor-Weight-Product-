<?php 
namespace App\Models;
use CodeIgniter\Model;

class DataBobotModel extends Model
{
    protected $table = 'data_bobot';
 
     protected $primaryKey = 'id_bobot';
     protected $allowedFields = ['keterangan', 'nilai_bobot']; 
 
     public function tampilbobot()
     {
         return $this->findAll();
     }
 }
