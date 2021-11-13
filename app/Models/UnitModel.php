<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class UnitModel extends Model
    {
        protected $table = 'unit';
        protected $useTmestamps = true;
        protected $allowedFields = ['sektor', 'unit', 'norumah', 'nokeluarga', 'alamat'];

    }




?>