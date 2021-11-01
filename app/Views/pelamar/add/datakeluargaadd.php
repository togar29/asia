<?= $this->extend('tamplatepelamar/index'); ?>


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
          <form action="/pelamar/savekeluarga" method="POST">
            <?= csrf_field(); ?>
            <?= $validation->listErrors(); ?>
            <div class="form-group row">
              <label for="hubungan" class="col-4 col-form-label">Hubungan</label>
              <div class="col-md">
                <select class="custom-select" required="required" name="hubungan">
                  <option selected>Pilih Hubungan</option>
                  <option value=" Ayah">Ayah</option>
                  <option value="Istri">Istri</option>
                  <option value="Anak">Anak</option>
                  <option value="Saudara">Saudara</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama</label>
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control here <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= old('nama') ?>" type="text">
              </div>
            </div>
            <div class="invalid-feedback form-group row">
              <?= $validation->getError('nama'); ?>
            </div>
            <div class="form-group row">
              <label for="lastname" class="col-4 col-form-label">Alamat Lengkap</label>
              <div class="col-8">
                <input id="alamat" name="alamat" placeholder="Alamat Lengkap" class="form-control here" value="<?= old('alamat') ?>" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="umur" class="col-4 col-form-label">Umur</label>
              <div class="col-8">
                <input id="umur" name="umur" placeholder="Umur" class="form-control here" value="<?= old('umur') ?>" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label ">Nomor HP</label>
              <div class="col-8">
                <input id="nohp" name="nohp" placeholder="Nomor HP" value="<?= old('nohp') ?>" class="form-control here <?= ($validation->hasError('nohp')) ? 'is-invalid' : ''; ?>" type="text">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Pendidikan Terakhir</label>
              <div class="col-8">
                <input id="pendidikan" name="pendidikan" value="<?= old('pendidikan') ?>" placeholder="Pendidikan Terakhir" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Pekerjaan</label>
              <div class="col-8">
                <input id="pekerjaan" name="pekerjaan" value="<?= old('pekerjaan') ?>" placeholder="Pekerjaan" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="tanggungan" class="col-4 col-form-label ">Apakah Tanggungan?</label>
              <div class="col-8">
                <input type="radio" aria-label="Radio button for following text input" value="ya" name="tanggungan"> Ya
                <input type="radio" aria-label="Radio button for following text input" value="tidak" name="tanggungan"> Tidak
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
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