<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class pertanyaanessayModel extends Model
{
  protected $table  = 'pertanyaanessay';
  protected $useTimestamp = true;
  protected $allowedFields = ['jenisTes', 'pertanyaan'];
}
