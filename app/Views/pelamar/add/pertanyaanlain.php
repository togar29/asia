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

          <form action="savepertanyaanessay/" method="POST">
            <?php
            $i = 0;
            foreach ($pertanyaan as $k) :

            ?>


              <div class="form-group row">
                <label for="pertanyaan" class="col-4 col-form-label"><?= $k['pertanyaan']; ?></label>
                <div class="col-8">
                  <textarea id="jawaban<?= $i; ?>" name="jawaban<?= $i; ?>" cols="40" rows="4" class="form-control"></textarea>
                </div>
              </div>
              <hr>
            <?php

              $i++;
            endforeach; ?>
            <div class="form-group row">
              <div class="offset-10 col-2">
                <button name="submit" type="submit" class="btn btn-primary btn-block">Simpan</button>
              </div>

          </form>

        </div>
      </div>

    </div>
  </div>

</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->