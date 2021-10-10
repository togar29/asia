<?php

namespace App\Models\Pelamar;

use CodeIgniter\Model;

class jawabanModel extends Model
{
  protected $table  = 'jawaban';
  protected $useTimestamp = true;
  protected $allowedFields = ['userId', 'jenisTes', 'jawaban', 'kunci',];
}
