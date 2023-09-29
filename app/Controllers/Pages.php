<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | SIDPBJ Tanah Datar',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About | SIDPBJ Tanah Datar'
        ];
        return view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Sultan Alam Bagagarsyah, Pagaruyung',
                    'kota' => 'Batusangkar'
                ]
            ]
        ];


        return view('pages/contact', $data);
    }
}
