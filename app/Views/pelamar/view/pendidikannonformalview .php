<?= $this->extend('tamplatepelamar/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pendidikan Nonformal</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">
        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Bidang</th>
              <th>Institut</th>
              <th>Kota</th>
              <th>Lama Kursus</th>
              <th>Tahun</th>
              <th>Setifikat</th>
              <th>Dibiayai Oleh</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Bidang</th>
              <th>Institut</th>
              <th>Kota</th>
              <th>Lama Kursus</th>
              <th>Tahun</th>
              <th>Setifikat</th>
              <th>Dibiayai Oleh</th>
            </tr>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Ayah</td>
              <td>Samsudin</td>
              <td>61</td>
              <td>08232322</td>
              <td>Jl. halaman</td>
              <td>S1</td>
              <td>Kuli</td>
            </tr>

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