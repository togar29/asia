<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tahap 1 Bagian G</h6>
    </div>
    <div class="card-body">
      <div class="row py-2">

        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>


      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center  d-flex">
              <th class="col-1">#</th>
              <th class="col-8">Soal</th>
              <th class="col-3">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0;
            foreach ($soal as $k) : ?>
              <tr class="text-left  d-flex">
                <td class="col-1"><?= $i + 1; ?></td>
                <td class="col-8"><?= $k['pertanyaan']; ?></td>
                <td class="col-3">
                  <a href="" data-toggle="modal" data-target="#modalEdit<?= $k['id']; ?>" class="btn btn-primary"> Edit</a>
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


  <!--Modal Edit Soal-->
  <?php foreach ($soal as $k) : ?>

    <div class="modal fade" id="modalEdit<?= $k['id']; ?>" role="dialog" aria-labelledby="modelEdit<?= $k['id']; ?>" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalSayaLabel">Edit Soal <?= $jenistes['jenisTes']; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="saveteskecocokan" method="POST">
              <?= csrf_field(); ?>
              <div class="table-responsif">
                <div class="form-group row">
                  <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th scope="col">Soal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><textarea name="" id="" cols="20" rows="10" class="form-control"><?= $k['pertanyaan']; ?></textarea>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>

              </div>
              <div class="modal-footer">
                <button name="submit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

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
          <form action="savepertanyaanessay/pertanyaan" method="POST" id="form1">
            <?= csrf_field(); ?>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="pertanyaanessay">
            <div class="form-group row">
              <label for="jenistes" class="col-4 col-form-label">Jenis tes</label>
              <div class="col-6">
                <input type="text" class="form-control" value="Tahap 1 Bagian G" readonly>
                <input type="text" class="form-control" style="display: none;" id="jenistes" name="jenistes" value="<?= $jenistes['id']; ?>">
              </div>
              <div class="col-2">
                <a href="jenistes" style="display: none;" class="btn btn-success" id="btntambah">Tambah Jenis Tes</a>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-3 offset-4">
                <input type="number" class="form-control" id="jumlahsoal" name="jumlahsoal" placeholder="Jumlah soal">
              </div>
              <div class="col-3">
                <a href="#" class="btn btn-success" onclick="jumlahsoal().doNotSubmit()" id="btnjumlahsoal">Tambah Jumlah</a>
              </div>
            </div>

            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="jenistes">
            <hr>
            <div class="form-group row">
              <label style="display: none;" class="col-4 col-form-label" id="nomorcol">Nomor</label>

              <label style="display: none;" class="col-4 col-form-label" id="soalcol">Soal</label>

              <div class="col-2">
                <label style="display: none;" id="jawabancol">Jawaban</label>
              </div>
            </div>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="jenistes">


            <div class="form-group row" id="here">
              <!-- Inputan Disini-->
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

<script type="text/javascript">
  function hideunhide() {
    var tombol = document.getElementById("form1").jenistes.value;
    var x = document.getElementById("btntambah");

    if (tombol == "tambah") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  function jumlahsoal() {

    var tombol = document.getElementById("form1").jenistes.value;
    var dijalankan = 0;
    var count = 0;
    var x = document.getElementById("jumlahsoal");
    var btnn = document.getElementById("btnjumlahsoal");
    var p = document.getElementById("here");
    var y = document.getElementById("disini");
    if (x.value == 0) {
      alert("Jumlah Soal Masih Kosong")
    } else {
      for (let i = 0; i < x.value; i++) {
        var addelement = document.createElement('label');
        addelement.innerHTML = "Soal " + (i + 1);
        addelement.setAttribute("class", "col-4 col-form-label");
        p.appendChild(addelement);

        var creatediv = document.createElement('div');
        creatediv.setAttribute("class", "col-8")
        p.appendChild(creatediv)

        var addelement1 = document.createElement('textarea');
        addelement1.setAttribute("name", "soal" + i);
        addelement1.setAttribute("cols", "4");
        addelement1.setAttribute("rows", "1");
        addelement1.setAttribute("class", "form-control");
        creatediv.appendChild(addelement1);
        count++;
      }
    }
    document.getElementById("soalcol").style.display = "block";
    document.getElementById("nomorcol").style.display = "block";
    x.setAttribute("readonly", true);
    btnn.style.display = 'none';
  }
</script>


<?= $this->endSection(); ?>
<!-- /.container-fluid -->