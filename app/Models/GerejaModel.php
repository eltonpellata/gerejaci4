<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class GerejaModel extends Model
    {
        protected $table = 'data';
        protected $useTmestamps = true;
        protected $allowedFields = ['nama', 'jenisklm', 'tmlahir', 'tgllahir', 'pekerjaan', 'tmmeninggal', 'tglmeninggal', 'pddk'];

    }



?>