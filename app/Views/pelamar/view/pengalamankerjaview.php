<?= $this->extend('tamplatepelamar/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pengalaman Pekerjaan</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">
        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>

      <div class="table-responsive mt-3">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Perusahaan</th>
              <th>Jabatan Awal</th>
              <th>Jabatan Akhhir</th>
              <th>Mulai Bekerja</th>
              <th>Akhir Bekerja</th>
              <th>Gaji</th>
              <th>Nama Atasan</th>
              <th>Alasan Keluar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pengalamankerja as $k) : ?>
              <tr>
                <td><?= $k['namaPerusahaan']; ?></td>
                <td><?= $k['jabatanAwal']; ?></td>
                <td><?= $k['jabatanAkhir']; ?></td>
                <td><?= $k['mulaiBekerja']; ?></td>
                <td><?= $k['akhirBekerja']; ?></td>
                <td><?= $k['gaji']; ?></td>
                <td><?= $k['namaAtasan']; ?></td>
                <td><?= $k['alasanKeluar']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>






<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel"><?= $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pelamar/savepengalamankerja" method="POST">
          <?= csrf_field(); ?>
          <?= $validation->listErrors(); ?>
          <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="pengalamankerjaadd">
          <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Nama Perusahaan</label>
            <div class="col-8">
              <input id="namaperusahaan" name="namaperusahaan" value="<?= old('namaperusahaan') ?>" placeholder="Nama Perusahaan" required="required" class="form-control here <?= ($validation->hasError('namaperusahaan')) ? 'is-invalid' : ''; ?>" type=" text" autofocus>
            </div>
          </div>
          <div class="form-group row">
            <label for="jabatanawal" class="col-4 col-form-label">Jabatan Awal</label>
            <div class="col-8">
              <input id="jabatanawal" name="jabatanawal" value="<?= old('jabatanawal') ?>" placeholder="Jabatan Awal" required="required" class="form-control here" type="text">
            </div>
          </div>
          <div class="form-group row">
            <label for="jabatanawal" class="col-4 col-form-label">Jabatan Akhir</label>
            <div class="col-8">
              <input id="jabatanakhir" name="jabatanakhir" value="<?= old('jabatanakhir') ?>" placeholder="Jabatan Akhir" required="required" class="form-control here" type="text">
            </div>
          </div>
          <div class=" form-group row">
            <label for="website" class="col-4 col-form-label">Tahun</label>
            <div class="col-8">
              <input id="daritahun" name="daritahun" placeholder="Dari Tahun" required="required" class="form-control here" type="date">
              <input id="daritahun" name="sampaitahun" placeholder="Sampai Tahun" required="required" class="form-control here" type="date">
            </div>
          </div>
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Gaji</label>
            <div class="col-8">
              <input id="gaji" name="gaji" value="<?= old('gaji') ?>" placeholder="gaji" class="form-control here" required="required" type="number">
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Nama Atasan</label>
            <div class="col-8">
              <input id="namaatasan" name="namaatasan" value="<?= old('namaatasan') ?>" placeholder="Nama Atasan" required="required" class="form-control here" type="text">
            </div>
          </div>
          <div class="form-group row">
            <label for="infokesehatan" class="col-4 col-form-label">Alasan Keluar</label>
            <div class="col-8">
              <textarea id="alasankeluar" name="alasankeluar" value="<?= old('alasankeluar') ?>" cols="40" rows="4" class="form-control"></textarea>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->