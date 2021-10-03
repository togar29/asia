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
          <form>
            <div class="form-group row">
              <label for="username" class="col-4 col-form-label">Hubungan</label>
              <div class="col-md">
                <select class="custom-select" required="required">
                  <option selected>Pilih Hubungan</option>
                  <option value="Ayah">Ayah</option>
                  <option value="Istri">Istri</option>
                  <option value="Anak">Anak</option>
                  <option value="Saudara">Saudara</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama</label>
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control here" type="text" required="required">
              </div>
            </div>

            <div class="form-group row">
              <label for="lastname" class="col-4 col-form-label">Alamat Lengkap</label>
              <div class="col-8">
                <input id="alamat" name="alamat" placeholder="Alamat Lengkap" class="form-control here" type="text" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Nomor HP</label>
              <div class="col-8">
                <input id="nohp" name="nohp" placeholder="Nomor HP" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Pendidikan Terakhir</label>
              <div class="col-8">
                <input id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Pekerjaan</label>
              <div class="col-8">
                <input id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="Ya" id="tanggungan" name="checktanggungan">
              <label class="form-check-label" for="tanggungan">
                Apakah Tanggungan Keluarga?
              </label>
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