<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class teskecocokanModel extends Model
{
  protected $table  = 'tahap_i_a';
  protected $useTimestamp = true;
  protected $allowedFields = ['jenisTes', 'nilaiA', 'nilaiB', 'kunci',];
}
