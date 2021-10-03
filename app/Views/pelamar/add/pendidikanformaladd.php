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
              <label for="username" class="col-4 col-form-label">Tingkat Sekolah</label>
              <div class="col-md">
                <select class="custom-select">
                  <option selected>Pilih Tingkatan</option>
                  <option value="1">SD</option>
                  <option value="2">SMP</option>
                  <option value="3">SMK/SMK</option>
                  <option value="3">S1</option>
                  <option value="3">S2</option>
                  <option value="3">S3</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama Sekolah/Institut</label>
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
              <label for="text" class="col-4 col-form-label">Jurusan</label>
              <div class="col-8">
                <input id="jurusan" name="jurusan" placeholder="Jurusan" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Tahun</label>
              <div class="col-8">
                <input id="daritahun" name="daritahun" placeholder="Dari Tahun" class="form-control here" type="text">
                <input id="daritahun" name="sampaitahun" placeholder="Sampai Tahun" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Keterangan</label>
              <div class="col-8">
                <input id="keterangan" name="keterangan" placeholder="Keterangan" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Ijazah</label>
              <div class="col-8">
                <input type="file" class="form-control" id="customFile" />
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