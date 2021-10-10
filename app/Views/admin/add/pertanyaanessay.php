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
          <form action="savepertanyaanessay/pertanyaanprofil" method="POST">
            <?= csrf_field(); ?>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="pertanyaanessay">
            <div class="form-group row">
              <label for="jenistes" class="col-4 col-form-label">Jenis tes</label>
              <div class="col-8">
                <select name="jenistes" id="jenistes" class="form-control" value="<?= old('jenistes') ?>">
                  <?php
                  foreach ($jenistes as $k) : ?>
                    <option value="<?= $k['id']; ?>"><?= $k['jenisTes']; ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
            </div>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="jenistes">
            <div class="form-group row">
              <label for="soal" class="col-4 col-form-label">Soal</label>
              <div class="col-8">
                <textarea id="soal" name="soal" cols="40" rows="4" class="form-control"></textarea>
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