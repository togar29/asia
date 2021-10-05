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
        <!-- Isi Data Profil-->

        <div class="col-md-12">

          <form action="" method="POST">
            <div class="table-responsif">
              <p></p>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>nilai 1</th>
                    <th>nilai 2</th>
                    <th>kunci</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                  for ($x = 0; $x < 10; $x++) {
                  ?>
                    <tr>
                      <td><input id="nilaia<?= $x; ?>" name="nilaia<?= $x; ?>" placeholder="nilai A" class="form-control here" type="text"></td>
                      <td><input id="nilaib<?= $x; ?>" name="nilaib<?= $x; ?>" placeholder="nilai B" class="form-control here" type="text"></td>

                      <td><input type="checkbox" name="kunci" aria-label="Checkbox for following text input"></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
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