<?php

namespace App\Controllers;

use App\Models\PenyediaModel;

class Penyedia extends BaseController
{
    protected $penyediaModel;
    public function __construct()
    {
        $this->penyediaModel = new PenyediaModel();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_penyedia') ? $this->request->getVar('page_penyedia') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $penyedia = $this->penyediaModel->search($keyword);
        } else {
            $penyedia = $this->penyediaModel;
        }

        $data = [
            'title' => 'Daftar Penyedia',
            // 'penyedia' => $this->penyediaModel->findAll()
            'penyedia' => $penyedia->paginate(3, 'penyedia'),
            'pager' => $this->penyediaModel->pager,
            'currentPage' => $currentPage
        ];


        return view('penyedia/index', $data);
    }
}
