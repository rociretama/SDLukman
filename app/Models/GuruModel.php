<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected  $table = 'guru';

public function getGuru($slug = false)
{
    if($slug= false){

        return $this->findAll();
    }
        return $this->where(['slug'=>$slug])->first();


        }
    }

