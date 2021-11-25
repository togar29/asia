<?= $this->extend('tamplate/index'); ?>




<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
    </div>
    <div class="card-body">




      <a href="#" class="col-12  btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      <div class="table-responsive ">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center  ">
              <th class="col-1">#</th>
              <th class="col-4">Nama Pelamar</th>
              <th class="col-2">Tanggal Interview</th>
              <th class="col-2">Jam Interview</th>
              <th class="col-1">Hubungi</th>
              <th class="col-2">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td class="col-1">1</td>
              <td class="col-4">Ardiansyah</td>
              <td class="col-2">11/25/2021</td>
              <td class="col-2">13:20</td>
              <td class="col-1"><a href="/admin/interview" id="tombol1" class="btn btn-success">Hubungi</a></td>
              <td class="col-2 expand-button">

                <a href="#" data-toggle="modal" data-target="#modaledit" id="tombol1" class="btn btn-primary">Edit</a>
                <a href="#" id="tombol1" class="btn btn-danger">Hapus</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!--Modal Edit Data-->
  <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modaleditLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Edit <?= $title; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <form action="savepertanyaanessay/pertanyaan" method="POST" id="form1">
              <?= csrf_field(); ?>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Nama Pelamar</label>
                <input id="nama" name="nama" readonly placeholder="Nama Lengkap" class="form-control" value="Ardyansyah" type="text">
              </div>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Tanggal Interview</label>
                <input id="datepicker" name="tanggalinterview" placeholder="Tanggal Interview" value="<?= old('tanggalinterview') ?>" class="form-control" required="required" type="date">
              </div>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Keterangan</label>
                <input id="timepicker" name="waktuinterview" placeholder="Waktu Interview" value="<?= old('waktuinterview') ?>" class="form-control" required="required" type="time">

              </div>

          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
  <!-- Modals Untuk Tambah data -->
  <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Tambah <?= $title; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <form action="savepertanyaanessay/pertanyaan" method="POST" id="form1">
              <?= csrf_field(); ?>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Nama Pelamar</label>
                <select class="custom-select" required="required" name="hubungan">
                  <option selected>Pilih Hubungan</option>
                  <option value="">Ardiansya</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Tanggal Interview</label>
                <input id="datepicker" name="tanggalinterview" placeholder="Tanggal Interview" value="<?= old('tanggalinterview') ?>" class="form-control" required="required" type="date">
              </div>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Keterangan</label>
                <input id="timepicker" name="waktuinterview" placeholder="Waktu Interview" value="<?= old('waktuinterview') ?>" class="form-control" required="required" type="time">

              </div>

          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function hiderow(a, b) {
    var x = document.getElementById(a);
    var tombol = document.getElementById(b);
    if (x.style.display == 'none') {
      x.style.display = 'block';
      tombol.innerHTML = '-';
    } else {
      x.style.display = "none";
      tombol.innerHTML = '+';
    }

  }
</script>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->