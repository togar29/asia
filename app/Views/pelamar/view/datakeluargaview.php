<?= $this->extend('tamplatepelamar/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Keluarga</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">

        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Hubungan</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No HP</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>tanggungan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($keluarga as $k) : ?>
              <tr>
                <td><?= $k['hubungan']; ?></td>
                <td><?= $k['nama']; ?></td>
                <td><?= $k['alamat']; ?></td>
                <td><?= $k['nohp']; ?></td>
                <td><?= $k['pendidikan']; ?></td>
                <td><?= $k['pekerjaan']; ?></td>
                <td><?= $k['tanggungan']; ?></td>
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

        <form action="/pelamar/savekeluarga" method="POST">
          <?= csrf_field(); ?>
          <?= $validation->listErrors(); ?>
          <div class="form-group row">
            <label for="hubungan" class="col-4 col-form-label">Hubungan</label>
            <div class="col-md">
              <select class="custom-select" required="required" name="hubungan">
                <option selected>Pilih Hubungan</option>
                <option value=" Ayah">Ayah</option>
                <option value="Ibu">Ibu</option>
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
              <input id="nohp" name="nohp" placeholder="Nomor HP" value="<?= old('nohp') ?>" class="form-control here" type="text">
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