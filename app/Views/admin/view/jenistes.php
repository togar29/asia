<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
    </div>
    <div class="card-body">
      <a href="#" class=" col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Tes</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($jenistes as $k) : ?>
              <tr>
                <td><?= $i + 1; ?></td>
                <td><?= $k['jenisTes']; ?></td>
                <td><?= $k['keterangan']; ?></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- Modal Input Tes -->
  <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Tambah <?= $title; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="save" method="POST">
            <?= csrf_field(); ?>

            <input style="display: none;" name="page" class="form-control here" type="text" value="">
            <div class="form-group ">
              <label for="name" class="col-4 col-form-label">Nama Tes</label>
              <input id="jenisTes" name="jenisTes" placeholder="Nama Tes" class="form-control here" type="text" required="required" autofocus>
            </div>

            <div class="form-group ">
              <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
              <input id="keterangan" name="keterangan" placeholder="keterangan" class="form-control here" type="text">
            </div>
        </div>
        <div class="modal-footer">
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>


</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->