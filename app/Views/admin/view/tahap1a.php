<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">List Lowongan Kerja</h6>
    </div>
    <div class="card-body">
      <div class="row ">

        <a href="#" class="col-12  btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>

      <div class="table-responsive ">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center  d-flex">
              <th class="col-1">#</th>
              <th class="col-3">Nilai A</th>
              <th class="col-3">Nilai B</th>
              <th class="col-2">Kunci</th>
              <th class="col-3">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0;
            foreach ($kecocokan as $k) : ?>
              <tr class="text-left  d-flex">
                <td class="col-1"><?= $i + 1; ?></td>
                <td class="col-3"><?= $k['nilaiA']; ?></td>
                <td class="col-3"><?= $k['nilaiB']; ?></td>
                <td class="col-2"><?= $k['kunci']; ?></td>
                <td class="col-3">
                  <a href="" id="edit<?= $i; ?>" class="btn btn-primary"> Edit</a>
                  <a href="" id="delete<?= $i; ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="row py-2">
        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
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

          <form action="saveteskecocokan" method="POST">
            <?= csrf_field(); ?>
            <div class="table-responsif">
              <div class="form-group row">
                <div class="col-3 offset-6">
                  <input type="number" class="form-control" id="jumlahsoal" name="jumlahsoal" placeholder="Jumlah soal">
                </div>
                <div class="col-3">
                  <a href="#" class="btn btn-success" onclick="jumlahsoal().doNotSubmit()" id="btnjumlahsoal">Tambah Jumlah</a>
                </div>
              </div>
              <small id="tampil" class="form-text text-muted">Kunci jawaban akan otomatis terisi oleh aplikasi</small>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>

                    <th scope="col">#</th>
                    <th scope="col">nilai 1</th>
                    <th scope="col">nilai 2</th>
                  </tr>
                </thead>
                <tbody id="here">
                  <tr>

                  </tr>

                </tbody>
              </table>
            </div>

        </div>
        <div class="modal-footer">
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>





</div>


<script>
  function jumlahsoal() {
    var dijalankan = 0;
    var count = 0;
    var x = document.getElementById("jumlahsoal");
    var p = document.getElementById("here");

    for (let i = 0; i < x.value; i++) {


      var addtr = document.createElement('tr');
      p.appendChild(addtr);


      var addth1 = document.createElement('th');
      var addtd1 = document.createElement('td');
      var addtd2 = document.createElement('td');
      addtr.appendChild(addth1);
      addtr.appendChild(addtd1);
      addtr.appendChild(addtd2);

      addth1.innerHTML = (i + 1);
      var addinput = document.createElement('input');
      addinput.setAttribute("id", "nilaia" + i);
      addinput.setAttribute("name", "nilaia" + i);
      addinput.setAttribute("placeholder", "nilaia A");
      addinput.setAttribute("class", "form-control here");
      addinput.setAttribute("type", "text");
      addtd1.appendChild(addinput);

      var creatediv1 = document.createElement('input');
      creatediv1.setAttribute("id", "nilaib" + i);
      creatediv1.setAttribute("name", "nilaib" + i);
      creatediv1.setAttribute("placeholder", "nilaib B");
      creatediv1.setAttribute("class", "form-control here");
      creatediv1.setAttribute("type", "text");
      addtd2.appendChild(creatediv1);
    }

    x.setAttribute("readonly", true);

  }
</script>


<?= $this->endSection(); ?>
<!-- /.container-fluid -->