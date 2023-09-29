<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PenyediaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'CV.MAIZA',
                'alamat'    => 'Jl. Imam Bonjol No. 3 B Dobok Batusangkar',
                'bentuk_usaha' => 'CV',
                'npwp' => '015202526204000',
                'email' => 'cv.maizabsk@gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV.GOBAH PERSADA',
                'alamat'    => 'JL. Jend. Sudirman No. 39 Kubu Rajo Lima Kaum - Batusangkar',
                'bentuk_usaha' => 'CV',
                'npwp' => '015202534204000',
                'email' => 'gobahpersada@gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV. JAYA PRATAMA MANDIRI',
                'alamat'    => 'JORONG SILABUAK NAGARI PARAMBAHAN KECAMATAN LIMA KAUM',
                'bentuk_usaha' => 'CV',
                'npwp' => '031112030204000',
                'email' => 'jayapratamamandiri9@gmail.com',
                'no_hp' => '0812312311',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV. RAFA KARYA MANDIRI',
                'alamat'    => 'Jalan Raya Batusangkar - Payakumbuh Nagari Tanjung Alam Kec. Tanjung Baru',
                'bentuk_usaha' => 'CV',
                'npwp' => '754358588204000',
                'email' => 'batangsinamaradiguna@gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV. GUMAYA LOVA KARYA',
                'alamat'    => 'Jorong Sungai Ungkang Nagari Sabu Kec. Batipuh Kab. Tanah Datar',
                'bentuk_usaha' => 'CV',
                'npwp' => '015202534204000',
                'email' => 'gumayalova@Gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV.GOBAH PERSADA',
                'alamat'    => 'JL. Jend. Sudirman No. 39 Kubu Rajo Lima Kaum - Batusangkar',
                'bentuk_usaha' => 'CV',
                'npwp' => '015202534204000',
                'email' => 'gobahpersada@gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV. PAGARUYUNG WAHANA CIPTA',
                'alamat'    => 'Jorong Balai Janggo, Nagari Pagaruyung, Kec. Tanjung Emas',
                'bentuk_usaha' => 'CV',
                'npwp' => '026391326202000',
                'email' => 'pagaruyung.wahanacipta@gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV JALIN WAHANA',
                'alamat'    => 'Jalan Cimonai Jorong Kubu Rajo Lima Kaum',
                'bentuk_usaha' => 'CV',
                'npwp' => '921783627204000',
                'email' => 'cvjalinwahana@gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'nama' => 'CV.RAVANO GROUP',
                'alamat'    => 'Jorong kampuang baru no 84 batusangkar kab tanah datar',
                'bentuk_usaha' => 'CV',
                'npwp' => '747527562204000',
                'email' => 'cv.ravano@gmail.com',
                'no_hp' => '081231231',
                'kab_kota' => 'tanah datar',
                'provinsi' => 'sumatera barat',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO penyedia (nama, alamat, bentuk_usaha, npwp, email, no_hp, kab_kota, provinsi, created_at, updated_at) VALUES(:nama:, :alamat:, :bentuk_usaha:, :npwp:, :email:, :no_hp:, :kab_kota:, :provinsi:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('penyedia')->insert($data);
        $this->db->table('penyedia')->insertBatch($data);
    }
}
