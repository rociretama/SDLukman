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
$guru =$this->guruModel->findAll();
             
        $data = [
            'judul'=>'Data Guru',
            'guru'=> $guru           

        ];
      
        
    return view('guru/index',$data);
    }

    public function detail($slug){
       $guru = $this->guruModel->where(['slug'=> $slug])->first(); 
       dd($guru);
       

    }
}