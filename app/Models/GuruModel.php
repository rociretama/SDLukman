<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected  $table = 'guru';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama','slug','gelar','foto'];

    public function getGuru($slug = false)
    {
        if ($slug == false) {

            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

}
