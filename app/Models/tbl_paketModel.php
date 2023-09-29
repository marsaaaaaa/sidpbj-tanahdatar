<?php

namespace App\Models;

use CodeIgniter\Model;

class tbl_paketModel extends Model
{
    protected $table = 'tbl_paket';
    protected $useTimestamps = true;
    protected $allowedFields = ['paket', 'slug', 'kode_paket', 'satker', 'nilai_kontrak', 'tahun_anggaran', 'metode', 'pemenang', 'npwp', 'personil', 'no_kontrak', 'ppk', 'ulasan'];

    public function getPaket($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
