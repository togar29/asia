<?php

namespace App\Models\Pelamar;

use CodeIgniter\Model;

class keluargaModel extends Model
{
  protected $table  = 'pengalamankerja';
  protected $useTimestamp = true;
  protected $allowedFields = ['userId', 'namaPerusahaan', 'jabatanAwal', 'jabatanAkhir', 'mulaiBekerja', 'akhirBekerja', 'gaji', 'namaAtasan', 'alasanKeluar'];
}
