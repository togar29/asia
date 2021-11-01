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
        <a href="#" class="btn btn-success col-md-12">Tambah Data</a>
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

<?= $this->endSection(); ?>
<!-- /.container-fluid -->