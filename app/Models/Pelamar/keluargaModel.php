<?php

namespace App\Models\Pelamar;

use CodeIgniter\Model;

class keluargaModel extends Model
{
  protected $table  = 'datakeluarga';
  protected $useTimestamp = true;
  protected $allowedFields = ['userId', 'hubungan', 'nama', 'alamat', 'nohp', 'pendidikan', 'pekerjaan', 'tanggungan',];
}
