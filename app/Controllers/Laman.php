<?php

namespace App\Controllers;

class Laman extends BaseController
{
    public function index()
    {
        $data= [
            'judul' => 'Home | Yayasan Lukman Nur Al-Hakim'
        ];
    
    echo view('laman/home',$data);
    

    }
    public function tentang()
    {
        $data= [
            'judul' => 'Tentang | Yayasan Lukman Nur Al-Hakim' 

        ];
    
    echo view('laman/tentang',$data);
    
    }

   
}