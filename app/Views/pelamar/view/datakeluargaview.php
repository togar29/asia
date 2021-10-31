<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Keluarga</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">

        <a href="datakeluargaadd" class="btn btn-success col-md-12">Tambah Data</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Hubungan</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No HP</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>tanggungan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($keluarga as $k) : ?>
              <tr>
                <td><?= $k['hubungan']; ?></td>
                <td><?= $k['nama']; ?></td>
                <td><?= $k['alamat']; ?></td>
                <td><?= $k['nohp']; ?></td>
                <td><?= $k['pendidikan']; ?></td>
                <td><?= $k['pekerjaan']; ?></td>
                <td><?= $k['tanggungan']; ?></td>
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