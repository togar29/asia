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
          <form action="/pelamar/savependidikanformal" method="POST" enctype="multipart/form-data">
            <p class="font-weight-bold"> <?= $validation->listErrors(); ?></p>
            <div class="form-group row">
              <label for="tingkatan" class="col-4 col-form-label">Tingkat Sekolah</label>
              <div class="col-md">
                <select class="form-control" name="tingkatan" required="required">
                  <option>Pilih Tingkatan</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA/SMK">SMA/SMK</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="namasekolah" class="col-4 col-form-label">Nama Sekolah/Institut</label>
              <div class="col-8">
                <input id="namasekolah" name="namasekolah" value="<?= old('namasekolah') ?>" placeholder=" Nama Sekolah/Institut" class="form-control here" type="text">
              </div>
            </div>

            <div class="form-group row">
              <label for="kota" class="col-4 col-form-label">Kab/Kota</label>
              <div class="col-8">
                <input id="kota" name="kota" placeholder="Kota" value="<?= old('kota') ?>" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="jurusan" class="col-4 col-form-label">Jurusan</label>
              <div class="col-8">
                <input id="jurusan" name="jurusan" placeholder="Jurusan" value="<?= old('jurusan') ?>" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class=" form-group row">
              <label for="daritahun" class="col-4 col-form-label">Tahun</label>
              <div class="col-3">
                <input id="daritahun" name="daritahun" value="<?= old('daritahun') ?>" placeholder="Dari Tahun" class="form-control" type="date">
              </div>
              s/d
              <div class="col-3">
                <input id="sampaitahun" name="sampaitahun" value="<?= old('sampaitahun') ?>" placeholder="Dari Tahun" class="form-control" type="date">
              </div>

            </div>
            <div class="form-group row">
              <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
              <div class="col-8">
                <input id="keterangan" name="keterangan" value="<?= old('keterangan') ?>" placeholder="Keterangan" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="ijazah" class="col-4 col-form-label">Ijazah</label>
              <div class="col-8">
                <input type="file" name="ijazah" class="form-control" id="ijazah" />
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