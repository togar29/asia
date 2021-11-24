<?= $this->extend('tamplatepelamar/index'); ?>

<style>
  .box {
    padding: 5px 5px 5px 5px;
  }
</style>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Tahap 1 Bagain G (10 Menit)</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">


          <!-- Tuliskan dalam Bentuk Kata-Kata-->
          <form action="/ujian/savebagian1f" method="POST">
            <h6>Penjumlahan, Pengurangan, Perkalian dan Pembagian</h6><br>
            <input type="text" style="display: none;" name="slug" value="tahap-1-bagian-g">
            <div class="table-responsive row">
              <table class="table table-bordered align-middle" id="dataTable" cellspacing="0">
                <thead>
                  <tr class=" text-center  d-flex">
                    <th class="col-1">No.</th>
                    <th class="col-8">Soal</th>
                    <th class="col-1">Setuju</th>
                    <th class="col-1">Kurang setuju</th>
                    <th class="col-1">Tidak Setuju</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 0;

                  foreach ($pertanyaanessay as $k) :
                  ?>
                    <tr class=" d-flex">
                      <td class="col-1 text-center"><?= $i + 1 ?>.</td>
                      <td class="col-8"><?= $k['pertanyaan']; ?></td>
                      <td class="col-1 text-center"><input class="form-check-input" type="radio" name="soal<?= $i; ?>" id="soal<?= $i; ?>" value="Setuju"></td>
                      <td class="col-1 text-center"><input class="form-check-input" type="radio" name="soal<?= $i; ?>" id="soal<?= $i; ?>" value="Kurang Setuju"></td>
                      <td class="col-1 text-center"><input class="form-check-input" type="radio" name="soal<?= $i; ?>" id="soal<?= $i; ?>" value="Kurang Setuju"></td>

                    </tr>
                  <?php
                    $i++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="form-group row">
              <div class="offset-5 col-8">
                <button name="submit" type="submit" class="btn btn-primary">next</button>
              </div>
            </div>
            <hr>
          </form>

        </div>
      </div>

    </div>
  </div>

</div>







<?= $this->endSection(); ?>
<!-- /.container-fluid -->