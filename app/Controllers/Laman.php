<?php

namespace App\Controllers;

class Laman extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home | Yayasan Lukman Nur Al-Hakim'
        ];

        echo view('laman/home', $data);
    }
    public function tentang()
    {
        $data = [
            'judul' => 'Tentang | Yayasan Lukman Nur Al-Hakim'

        ];

        echo view('laman/tentang', $data);
    }
    public function kontak()
    {
        $data = [
            'judul' => 'Kontak | Yayasan Lukman Nur Al-Hakim',
            'alamat' =>
            [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Sungai Liuk',
                    'kota' => 'Sungai Penuh'
                ],
                [
                    'tipe' => 'Sekolah',
                    'alamat' => 'Desa Gedang',
                    'kota' => 'Sungai Penuh'

                ]
            ]
        ];

        echo view('laman/kontak', $data);
    }
    
}
