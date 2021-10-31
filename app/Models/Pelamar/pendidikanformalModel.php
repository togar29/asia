<?php

namespace App\Models\Pelamar;

use CodeIgniter\Model;

class pendidikanformalModel extends Model
{
  protected $table  = 'pendidikanformal';
  protected $useTimestamp = true;
  protected $allowedFields = ['userId', 'tingkatan', 'namaInstitut', 'kota', 'jurusan', 'tahunMulai', 'tahunAkhir', 'keterangan', 'sertifikat'];
}
