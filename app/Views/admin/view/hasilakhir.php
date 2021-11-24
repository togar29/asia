<?= $this->extend('tamplate/index'); ?>




<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
    </div>
    <div class="card-body">

      <div class="table-responsive ">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center  d-flex">
              <th class="col-1">#</th>
              <th class="col-3">Nama Pelamar</th>
              <th class="col-2">Lowongan</th>
              <th class="col-2">Devisi</th>
              <th class="col-1">Data</th>
              <th class="col-1">Tes</th>
              <th class="col-1">Interview</th>
              <th class="col-1">Akhir</th>
            </tr>
          </thead>
          <tbody>
            <tr class="accordion-toggle collapsed d-flex" id="accordion1" onclick="hiderow('no1','tombol1')" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
              <td class="col-1">1</td>
              <td class="col-3">Ardiansyah</td>
              <td class="col-2">Assembling</td>
              <td class="col-2">Assembling</td>
              <td class="col-1 bg-warning text-dark">65%</td>
              <td class="col-1 bg-success text-dark">90%</td>
              <td class="col-1 bg-success text-dark">70%</td>
              <td class="col-1 bg-success text-dark">70%</td>
            </tr>
            <tr class="accordion-toggle collapsed d-flex" id="accordion1" onclick="hiderow('no1','tombol1')" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
              <td class="col-1">2</td>
              <td class="col-3">Harmoko Simatupang</td>
              <td class="col-2">Admin Gudang</td>
              <td class="col-2">Gudang</td>
              <td class="col-1 bg-warning text-dark">65%</td>
              <td class="col-1 bg-warning text-dark">650%</td>
              <td class="col-1 bg-danger text-dark">50%</td>
              <td class="col-1 bg-danger text-dark">50%</td>
            </tr>
          </tbody>
        </table>
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