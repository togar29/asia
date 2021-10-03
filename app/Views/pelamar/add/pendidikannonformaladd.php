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
              <label for="username" class="col-4 col-form-label">Bidang</label>
              <div class="col-8">
                <input id="bidang" name="bidang" placeholder="Bidang" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama Institut</label>
              <div class="col-8">
                <input id="namasekolah" name="namasekolah" placeholder="Nama Sekolah/Institut" class="form-control here" type="text">
              </div>
            </div>

            <div class="form-group row">
              <label for="lastname" class="col-4 col-form-label">Kota</label>
              <div class="col-8">
                <input id="kota" name="kota" placeholder="Kota" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Lama Kursus</label>
              <div class="col-8">
                <input id="lamakursus" name="lamakursus" placeholder="Lama Kursus" class="form-control here" required="required" type="number">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Tahun</label>
              <div class="col-8">
                <input id="daritahun" name="daritahun" placeholder="Dari Tahun" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Sertifikat</label>
              <div class="col-8">
                <input type="file" class="form-control" id="customFile" />
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary btn-lg ">Simpan</button>
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