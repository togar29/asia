<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Tambah Soal</h4>
          <hr>
        </div>
      </div>
      <div class="row">


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
          Klik Saya
        </button>

        <!-- Contoh Modal -->
        <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalSayaLabel">Judul Modal Di Sini</h5>
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


    </div>

  </div>
</div>

</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->