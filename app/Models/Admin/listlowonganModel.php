<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class listlowonganModel extends Model
{
  protected $table  = 'listlowongan';
  protected $useTimestamp = true;
  protected $allowedFields = ['jenisTes', 'devisi', 'keternganan', 'status'];
}
