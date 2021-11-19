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
            'judul'=>'Data Guru',
            'guru'=> $this->guruModel->getGuru()        

        ];
      
        
    return view('guru/index',$data);
    }

    public function detail($slug){
       $guru = $this->guruModel->getGuru($slug);
       dd($guru);
       

    }
}