<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Tambah Data Keluarga</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">
          <form action="save" method="POST">
            <?= csrf_field(); ?>

            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="jenistes">
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama Tes</label>
              <div class="col-8">
                <input id="jenisTes" name="jenisTes" placeholder="Nama Tes" class="form-control here" type="text" required="required" autofocus>
              </div>
            </div>

            <div class="form-group row">
              <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
              <div class="col-8">
                <input id="keterangan" name="keterangan" placeholder="keterangan" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-11 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>

</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->