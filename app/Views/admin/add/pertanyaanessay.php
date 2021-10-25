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
          <form action="savepertanyaanessay/pertanyaan" method="POST" id="form1">
            <?= csrf_field(); ?>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="pertanyaanessay">
            <div class="form-group row">
              <label for="jenistes" class="col-4 col-form-label">Jenis tes</label>
              <div class="col-6">
                <select name="jenistes" id="jenistes" class="form-control" onchange="hideunhide()" value="<?= old('jenistes') ?> ">
                  <?php
                  foreach ($jenistes as $k) : ?>
                    <option value="<?= $k['id']; ?>"><?= $k['jenisTes']; ?></option>



                  <?php
                    if (strcmp($k['slug'], 'tahap-1-bagian-f') == 0) {
                      $jenisoal = $k['id'];
                    }
                  endforeach; ?>
                  <option value="tambah" class="green">Tambah Data</option>
                </select>

              </div>
              <div class="col-2">
                <a href="jenistes" style="display: none;" class="btn btn-success" id="btntambah">Tambah Jenis Tes</a>
              </div>
            </div>


            <div class="form-group row">
              <label for="soal" class="col-4 col-form-label">Jumlah Soal</label>
              <div class="col-6">
                <input type="number" class="form-control" id="jumlahsoal" name="jumlahsoal" placeholder="Jumlah soal">
              </div>
              <div class="col-2">
                <a href="#" class="btn btn-success" onclick="jumlahsoal().doNotSubmit()" id="btnjumlahsoal">Tambah Jumlah</a>
              </div>
            </div>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="jenistes">
            <hr>
            <div class="form-group row">
              <label style="display: none;" class="col-4 col-form-label" id="nomorcol">Nomor</label>
              <div class="col-6">
                <label style="display: none;" class="col-4 col-form-label" id="soalcol">Soal</label>
              </div>
              <div class="col-2">
                <label style="display: none;" id="jawabancol">Jawaban</label>
              </div>
            </div>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="jenistes">


            <div class="form-group row" id="here">

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
      if (tombol == <?= $jenisoal; ?>) {

        for (let i = 0; i < x.value; i++) {
          var addelement = document.createElement('label');
          addelement.innerHTML = "Soal " + (i + 1);
          addelement.setAttribute("class", "col-4 col-form-label");
          p.appendChild(addelement);

          var creatediv = document.createElement('div');
          creatediv.setAttribute("class", "col-6")
          p.appendChild(creatediv)

          var addelement1 = document.createElement('textarea');
          addelement1.setAttribute("name", "soal" + i);
          addelement1.setAttribute("cols", "2");
          addelement1.setAttribute("rows", "1");
          addelement1.setAttribute("class", "form-control");
          creatediv.appendChild(addelement1);

          var addelement2 = document.createElement('input');
          addelement2.setAttribute("name", "kunci" + i);
          addelement2.setAttribute("rows", "1");
          addelement2.setAttribute("class", "col-2 form-control");
          addelement2.setAttribute("placeholder", "Kunci");
          p.appendChild(addelement2);
          count++;
          document.getElementById("jawabancol").style.display = "block";
        }
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
  }
</script>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->