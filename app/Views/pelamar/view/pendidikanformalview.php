<?= $this->extend('tamplatepelamar/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pendidikan Formal</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">
        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tingkat Sekolah</th>
              <th>Nama Sekolah</th>
              <th>Kota</th>
              <th>Jurusan</th>
              <th>Dari Tahun</th>
              <th>Samapi Tahun</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pendidikanformal as $k) : ?>
              <tr>
                <td><?= $k['tingkatan']; ?></td>
                <td><?= $k['namaInstitut']; ?></td>
                <td><?= $k['kota']; ?></td>
                <td><?= $k['jurusan']; ?></td>
                <td><?= $k['tahunMulai']; ?></td>
                <td><?= $k['tahunAkhir']; ?></td>
                <td><?= $k['keterangan']; ?></td>
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