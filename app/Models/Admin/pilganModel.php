<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class pilganModel extends Model
{
  protected $table  = 'ujianpilihanberganda';
  protected $useTimestamp = true;
  protected $allowedFields = ['jenisTes', 'soal', 'a', 'b', 'c', 'd', 'e', 'kunci'];
}
