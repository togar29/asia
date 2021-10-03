<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pengalaman Pekerjaan</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">
        <a href="/pelamar/pengalamankerjaadd" class="btn btn-success col-md-12">Tambah Data</a>
      </div>

      <div class="table-responsive mt-3">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Perusahaan</th>
              <th>Jabatan Awal</th>
              <th>Jabatan Akhhir</th>
              <th>Mulai Bekerja</th>
              <th>Akhir Bekerja</th>
              <th>Gaji</th>
              <th>Nama Atasan</th>
              <th>Alasan Keluar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pengalamankerja as $k) : ?>
              <tr>
                <td><?= $k['namaPerusahaan']; ?></td>
                <td><?= $k['jabatanAwal']; ?></td>
                <td><?= $k['jabatanAkhir']; ?></td>
                <td><?= $k['mulaiBekerja']; ?></td>
                <td><?= $k['akhirBekerja']; ?></td>
                <td><?= $k['gaji']; ?></td>
                <td><?= $k['namaAtasan']; ?></td>
                <td><?= $k['alasanKeluar']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->