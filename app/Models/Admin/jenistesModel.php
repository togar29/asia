<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class jenistesModel extends Model
{
  protected $table  = 'jenistes';
  protected $useTimestamp = true;
  protected $allowedFields = ['jenisTes', 'keterangan', 'slug'];
}
