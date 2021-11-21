<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $guruModel;
    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }
    public function index()
    {

        $data = [
            'judul' => 'Data Guru | Yayasan Lukman Nur Al-Hakim',
            'guru' => $this->guruModel->getGuru()

        ];

        return view('guru', $data);
    }
    


    public function detail($slug)
    {

        $data = [
            'judul' => 'Detail Guru | Data Guru',
            'guru' => $this->guruModel->getGuru($slug)

        ];
        return view('guru/detail', $data);
    }
    public function create()
    {
        $data = [
            'judul' => 'Form Tambah Data | Data Guru'
        ];
        return view('guru/create',$data);
    }

}
