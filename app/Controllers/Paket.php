<?php

namespace App\Controllers;

use App\Models\tbl_paketModel;

class Paket extends BaseController
{
    protected $paketModel;
    public function __construct()
    {
        $this->paketModel = new tbl_paketModel();
    }
    public function index()
    {
        // $paket = $this->paketModel->findAll();
        $data = [
            'title' => 'Daftar Paket',
            'paket' => $this->paketModel->getPaket()
        ];
        // $paketModel = new \App\Models\tbl_paketModel();
        // $paketModel = new tbl_paketModel();

        return view('paket/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Paket',
            'paket' => $this->paketModel->getPaket($slug)
        ];

        // Jika paket tidak ada
        if (empty($data['paket'])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Nama paket ' . $slug . ' tidak ditemukan.');
        }


        return view('paket/detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form Tambah Data Paket',
            'validation' => \Config\Services::validation()
        ];

        return view('paket/create', $data);
    }



    public function save()
    {
        if (!$this->validate([
            'paket' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kode_paket' => [
                'rules' => 'required|is_unique[tbl_paket.kode_paket]',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'satker' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nilai_kontrak' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_anggaran' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'metode' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'pemenang' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'npwp' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'personil' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_kontrak' => [
                'rules' => 'required|is_unique[tbl_paket.no_kontrak]',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'ppk' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'ulasan' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/paket/create')->withInput();
        }
        $slug = url_title($this->request->getVar('paket'), '-', true);
        $this->paketModel->save([
            'paket' => $this->request->getVar('paket'),
            'slug' => $slug,
            'kode_paket' => $this->request->getVar('kode_paket'),
            'satker' => $this->request->getVar('satker'),
            'nilai_kontrak' => $this->request->getVar('nilai_kontrak'),
            'tahun_anggaran' => $this->request->getVar('tahun_anggaran'),
            'metode' => $this->request->getVar('metode'),
            'pemenang' => $this->request->getVar('pemenang'),
            'npwp' => $this->request->getVar('npwp'),
            'personil' => $this->request->getVar('personil'),
            'no_kontrak' => $this->request->getVar('no_kontrak'),
            'ppk' => $this->request->getVar('ppk'),
            'ulasan' => $this->request->getVar('ulasan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/paket');
    }

    public function delete($id)
    {
        $this->paketModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/paket');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Paket',
            'validation' => \Config\Services::validation(),
            'paket' => $this->paketModel->getPaket($slug)
        ];

        return view('paket/edit', $data);
    }


    public function update($id)
    {
        // cek 
        $kode_paketLama = $this->paketModel->getPaket($this->request->getVar('slug'));
        if ($kode_paketLama['kode_paket'] == $this->request->getVar('kode_paket')) {
            $rulekode_paket = 'required';
        } else {
            $rulekode_paket = 'required|is_unique[tbl_paket.kode_paket]';
        }
        $no_kontrakLama = $this->paketModel->getPaket($this->request->getVar('slug'));
        if ($no_kontrakLama['no_kontrak'] == $this->request->getVar('no_kontrak')) {
            $ruleno_kontrak = 'required';
        } else {
            $ruleno_kontrak = 'required|is_unique[tbl_paket.no_kontrak]';
        }

        if (!$this->validate([
            'paket' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kode_paket' => [
                'rules' => $rulekode_paket,
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'satker' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nilai_kontrak' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_anggaran' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'metode' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'pemenang' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'npwp' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'personil' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_kontrak' => [
                'rules' => $rulekode_paket,
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'ppk' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'ulasan' => [
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/paket/edit/' . $this->request->getVar('slug'))->withInput();
        }
        $slug = url_title($this->request->getVar('paket'), '-', true);
        $this->paketModel->save([
            'id' => $id,
            'paket' => $this->request->getVar('paket'),
            'slug' => $slug,
            'kode_paket' => $this->request->getVar('kode_paket'),
            'satker' => $this->request->getVar('satker'),
            'nilai_kontrak' => $this->request->getVar('nilai_kontrak'),
            'tahun_anggaran' => $this->request->getVar('tahun_anggaran'),
            'metode' => $this->request->getVar('metode'),
            'pemenang' => $this->request->getVar('pemenang'),
            'npwp' => $this->request->getVar('npwp'),
            'personil' => $this->request->getVar('personil'),
            'no_kontrak' => $this->request->getVar('no_kontrak'),
            'ppk' => $this->request->getVar('ppk'),
            'ulasan' => $this->request->getVar('ulasan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/paket');
    }
}
