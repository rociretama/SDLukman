<?php

namespace App\Controllers;

class Guru extends BaseController
{
    public function index()
    {
        $data = ['judul'=>'Data Guru'];
    return view('guru/index',$data);
    }
}