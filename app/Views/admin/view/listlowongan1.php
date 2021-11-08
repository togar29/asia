<?= $this->extend('tamplatepelamar/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">List Lowongan Kerja</h6>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Lowongan</a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">
            <div class="row">
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#assembling" class="d-block  card-header bg-primary py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="assembling">
                    <h6 class="text-xs text-white font-weight-bold  text-uppercase mb-1">Assembling </h6>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse" id="assembling">
                    <div class="card-body">
                      This is a collapsable card example using Bootstrap's built in collapse
                      functionality. <strong>Click on the card header</strong> to see the card body
                      collapse and expand!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



<!-- Modals Untuk Tambah data -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Tambah Soal Tahp 1 Bagian A</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-body">
          <form action="savepertanyaanessay/pertanyaan" method="POST" id="form1">
            <?= csrf_field(); ?>
            <div class="form-group row">
              <label for="nama Lowongan" class="col-4 col-form-label">Nama Lowongan</label>
              <input type="text" class="form-control" id="namalowongan" name="namalowongan" placeholder="Nama Lowongan" autofocus>
            </div>
            <div class="form-group row">
              <label for="nama Lowongan" class="col-4 col-form-label">Devisi</label>
              <input type="text" class="form-control" id="devisi" name="devisi" placeholder="Devisi">
            </div>
            <div class="form-group row">
              <label for="nama Lowongan" class="col-4 col-form-label">Keterangan</label>
              <input type="text" class="form-control" id="devisi" name="devisi" placeholder="Keterangan">
            </div>
            <div class="form-group row">
              <label for="nama Lowongan" class="col-4 col-form-label">Status</label>
              <br>
            </div>
            <div class="form-group row">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status" value="Aktif">
                <label class="form-check-label" for="inlineRadio1">Aktif</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Aktif">
                <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="modal-footer">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
  </div>
</div>



<?= $this->endSection(); ?>
<!-- /.container-fluid -->