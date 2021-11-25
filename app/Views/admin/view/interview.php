<?= $this->extend('tamplate/index'); ?>




<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Pertanyaan dan Penilaian</h6>

        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="/ujian/savebagian1b" method="POST">
            <h6>Tuliskan dalam bentuk kata-kata!!</h6><br>

            <input type="text" style="display: none;" name="slug" value="pertanyaan-interview">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class="text-center">
                  <th class="col-1">#</th>
                  <th class="col-8">Soal </th>
                  <th class="col-3">Penilaian</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;

                foreach ($pertanyaanessay as $k) :
                ?>
                  <tr>
                    <td class="col-1"><?= $i + 1; ?></td>
                    <td class="col-8"> <label for=""><?= $k['pertanyaan']; ?></label> </td>
                    <td class="col-3"> <input type="number" class="form-control col-7" id="inlineFormInputGroup" name="jawaban<?= $i; ?>" placeholder="Nilai"></td>
                  </tr>

                <?php
                  $i++;

                endforeach; ?>
              </tbody>
            </table>
            <div class="form-group row">
              <div class="offset-10 ">
                <button name="submit" type="submit" class="btn btn-primary col">Simpan</button>
              </div>
            </div>
            <hr>
          </form>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Face</h6>

        </div>
        <!-- Card Body -->
        <div class="card-body">

          <div class="mt-4 text-center small">
            <h5>Admin</h5>
            <video width="320" height="240" controls src=""></video>
            <h5>Pelamar</h5>
            <video width="320" height="240" controls src=""></video>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modals Untuk Tambah data -->
  <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Tambah Soal Tahp 1 Bagian A</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <form action="savepertanyaanessay/pertanyaan" method="POST" id="form1">
              <?= csrf_field(); ?>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Nama Lowongan</label>
                <input type="text" class="form-control" id="namalowongan" name="namalowongan" placeholder="Nama Lowongan" autofocus>
              </div>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Devisi</label>
                <input type="text" class="form-control" id="devisi" name="devisi" placeholder="Devisi">
              </div>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Keterangan</label>
                <input type="text" class="form-control" id="devisi" name="devisi" placeholder="Keterangan">
              </div>
              <div class="form-group row">
                <label for="nama Lowongan" class="col-4 col-form-label">Status</label>
                <br>
              </div>
              <div class="form-group row">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="status" value="Aktif">
                  <label class="form-check-label" for="inlineRadio1">Aktif</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Aktif">
                  <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
                </div>
              </div>
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