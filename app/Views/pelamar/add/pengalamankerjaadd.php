<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Tambah Pengalaman Kerja</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">
          <form action="/pelamar/save" method="POST">
            <?= csrf_field(); ?>

            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="pengalamankerjaadd">
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama Perusahaan</label>
              <div class="col-8">
                <input id="namaperusahaan" name="namaperusahaan" placeholder="Nama Perusahaan" class="form-control here" type="text" autofocus required>
              </div>
            </div>
            <div class="form-group row">
              <label for="jabatanawal" class="col-4 col-form-label">Jabatan Awal</label>
              <div class="col-8">
                <input id="jabatanawal" name="jabatanawal" placeholder="Jabatan Awal" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="jabatanawal" class="col-4 col-form-label">Jabatan Akhir</label>
              <div class="col-8">
                <input id="jabatanakhir" name="jabatanakhir" placeholder="Jabatan Akhir" class="form-control here" type="text">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Tahun</label>
              <div class="col-8">
                <input id="daritahun" name="daritahun" placeholder="Dari Tahun" class="form-control here" type="date">
                <input id="daritahun" name="sampaitahun" placeholder="Sampai Tahun" class="form-control here" type="date">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Gaji</label>
              <div class="col-8">
                <input id="gaji" name="gaji" placeholder="gaji" class="form-control here" required="required" type="number">
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama Atasan</label>
              <div class="col-8">
                <input id="namaatasan" name="namaatasan" placeholder="Nama Atasan" class="form-control here" type="text" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="infokesehatan" class="col-4 col-form-label">Alasan Keluar</label>
              <div class="col-8">
                <textarea id="alasankeluar" name="alasankeluar" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button type="submit" class="btn btn-primary">Simpan</button>
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