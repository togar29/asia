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
          <h4>Tahap 2 (60 Menit)</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">

          <h5 class="offset-5">Tahap 2 (Waktu: 60 Menit)</h5>
          <hr>
          <!-- Tuliskan dalam Bentuk Kata-Kata-->
          <form action="/ujian/savebagian2b" method="POST">
            <h6>Angka 10 s/d 100</h6><br>

            <input type="text" style="display: none;" name="slug" value="tahap-2-bagian-b">

            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col-1">#</th>
                  <th scope="col-10">Soal</th>
                  <th scope="col-1">Jawaban</th>
                </tr>
              </thead>
              <?php
              $i = 0;



              foreach ($pertanyaanessay as $k) :
              ?>

                <tbody>
                  <tr>
                    <th scope="row"><?= $i + 1; ?></th>
                    <td><?= $k['pertanyaan']; ?></td>
                    <td><input type="number" class="form-control" id="inlineFormInputGroup" min="10" max="100" name="jawaban<?= $i; ?>"></td>

                  </tr>
                </tbody>

              <?php
                $i++;

              endforeach; ?>

            </table>

            <input type="range" id="points" name="points" min="0" max="10">
            <div class="form-group row">
              <div class="offset-10 ">
                <button name="submit" type="submit" class="btn btn-primary col">next</button>
              </div>
            </div>
            <hr>
          </form>

          <!-- Tuliskan dalam Bentuk Angka -->

        </div>
      </div>

    </div>
  </div>

</div>







<?= $this->endSection(); ?>
<!-- /.container-fluid -->