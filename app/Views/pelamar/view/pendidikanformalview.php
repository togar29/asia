<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pendidikan Formal</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">
        <a href="/pelamar/pendidikanformaladd" class="btn btn-success col-md-12">Tambah Data</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tingkat Sekolah</th>
              <th>Nama Sekolah</th>
              <th>Kota</th>
              <th>Jurusan</th>
              <th>Dari Tahun</th>
              <th>Samapi Tahun</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pendidikanformal as $k) : ?>
              <tr>
                <td><?= $k['tingkatan']; ?></td>
                <td><?= $k['namaInstitut']; ?></td>
                <td><?= $k['kota']; ?></td>
                <td><?= $k['jurusan']; ?></td>
                <td><?= $k['tahunMulai']; ?></td>
                <td><?= $k['tahunAkhir']; ?></td>
                <td><?= $k['keterangan']; ?></td>
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