<?= $this->extend('tamplate/index'); ?>




<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Hasil Seleksi Data</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive ">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center  d-flex">
              <th class="col-1">#</th>
              <th class="col-6">Nama</th>
              <th class="col-3">Dilamar</th>
              <th class="col-1">Hasil</th>
              <th class="col-1">Rincian</th>
            </tr>
          </thead>
          <tbody>
            <tr class="accordion-toggle collapsed d-flex" id="accordion1" onclick="hiderow('no1','tombol1')" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
              <td class="col-1">1</td>
              <td class="col-6">Ardiansyah</td>
              <td class="col-3">Assembling</td>
              <td class="col-1 bg-warning text-dark">65%</td>
              <td class="col-1 expand-button"><a href="#" id="tombol1" class="btn btn-primary">+</a></td>
            </tr>
            <tr class="flex-column" id="no1" style="display: none;">
              <td class="col-12" colspan="10">
                <div id="collapseOne" class="collapse in">

                  <div class="row">
                    <div class="col-4 font-weight-bold">Deskripsi</div>
                    <div class="col-4 font-weight-bold">Dibutuhkan</div>
                    <div class="col-3 font-weight-bold">Data Pelamar</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Umur</div>
                    <div class="col-4">Max 25 Tahun</div>
                    <div class="col-3">20 Tahun</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Lulusan </div>
                    <div class="col-4">SMK/SMA</div>
                    <div class="col-3">SMK/SMA</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Pengalaman Bekerja</div>
                    <div class="col-4">Minimal 3 Tahun</div>
                    <div class="col-3">5 Tahun</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Dll</div>
                    <div class="col-4">Berpengalaman di bidang elektrikal/industri/bahan bangunan menjadi nilai tambah</div>
                    <div class="col-3">Berpengalaman di bidang elektrikal/industri/bahan bangunan menjadi nilai tambah</div>
                  </div>
                </div>
              </td>
            </tr>

            <tr class="accordion-toggle collapsed d-flex" id="accordion2" onclick="hiderow('no2','tombol2')" data-toggle="collapse" data-parent="#accordion1" href="#collapsetwo">
              <td class="col-1">2</td>
              <td class="col-6">Admin Gudang</td>
              <td class="col-3">Gudang</td>
              <td class="col-1 bg-danger text-dark">50%</td>
              <td class="col-1 expand-button"><a href="#" id="tombol2" class="btn btn-primary">+</a></td>
            </tr>
            <tr class="hide-table-padding" id="no2" style="display: none;">
              <td colspan="4">
                <div id="collapsetwo" class="collapse in">
                  <div class="row">
                    <div class="col-4 font-weight-bold">Deskripsi</div>
                    <div class="col-4 font-weight-bold">Dibutuhkan</div>
                    <div class="col-3 font-weight-bold">Data Pelamar</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Umur</div>
                    <div class="col-4">Max 25 Tahun</div>
                    <div class="col-3">30 Tahun</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Lulusan </div>
                    <div class="col-4">SMK/SMA</div>
                    <div class="col-3">SMK/SMA</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Pengalaman Bekerja</div>
                    <div class="col-4">Minimal 3 Tahun</div>
                    <div class="col-3">5 Tahun</div>
                  </div>
                  <div class="row">
                    <div class="col-4">Dll</div>
                    <div class="col-4">Berpengalaman di bidang elektrikal/industri/bahan bangunan menjadi nilai tambah</div>
                    <div class="col-3">Berpengalaman di bidang elektrikal/industri/bahan bangunan menjadi nilai tambah</div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
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