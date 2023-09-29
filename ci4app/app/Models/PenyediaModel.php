<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyediaModel extends Model
{
    protected $table = 'penyedia';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat', 'bentuk_usaha', 'npwp', 'email', 'no_hp', 'kab_kota', 'provinsi'];


    public function search($keyword)
    {
        // $builder = $this->table('penyedia');
        // $builder = like ('nama', $keyword);
        // return $builder;

        return $this->table('penyedia')->like('nama', $keyword)->orLike('npwp', $keyword);
    }
}
