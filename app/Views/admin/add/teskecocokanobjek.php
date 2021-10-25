<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Tambah Soal</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">

          <form action="saveteskecocokan" method="POST">
            <div class="table-responsif">
              <div class="form-group row">
                <label for="soal" class="col-4 col-form-label">Jumlah Soal</label>
                <div class="col-3 offset-3">
                  <input type="number" class="form-control" id="jumlahsoal" name="jumlahsoal" placeholder="Jumlah soal">
                </div>
                <br>
                <div class="col-2">
                  <a href="#" class="btn btn-success" onclick="jumlahsoal().doNotSubmit()" id="btnjumlahsoal">Tambah Jumlah</a>
                </div>
              </div>
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
            <div class="form-group row">
              <div class="offset-11 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>

        </div>
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