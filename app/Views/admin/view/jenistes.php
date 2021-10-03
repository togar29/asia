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
        <a href="jenistes" class="btn btn-success col-md-12">Tambah Data</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Tes</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($jenistes as $k) : ?>
              <tr>
                <td><?= $k['jenisTes']; ?></td>
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