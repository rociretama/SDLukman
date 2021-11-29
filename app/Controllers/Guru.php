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

        return view('guru/index', $data);
    }

    
    public function detail($slug)
    {
        $data = [
            'judul' => 'Detail Guru | Data Guru',
            'guru' => $this->guruModel->getGuru($slug)

        ];
        if(empty($data['guru'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama guru '.$slug.' Tidak Ditemukan');
        }
        return view('guru/detail', $data);

    }
    public function create()
    {
        $data = [
            'judul' => 'Tambah data| Data Guru'
            

        ];
        return view('guru/create', $data);

    }
    public function save()
    {   
        //dd($this->request->getVar());
      $slug = url_title($this->request->getVar('nama'),'-',true);
        $this->guruModel->save([
        'nama' => $this->request->getVar('nama'),
        'slug' => $slug,
        'gelar' => $this->request->getVar('gelar'),
        'foto' => $this->request->getVar('foto')
        ]);
    return redirect()->to('/guru');
    }

        

}
