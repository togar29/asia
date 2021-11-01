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
          <h4>Tahap 1 (60 Menit)</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">

          <h5 class="offset-5">Tahap I (Waktu: 60 Menit)</h5>
          <hr>
          <!-- Baian A -->
          <form action="savebagian1a" method="POST">
            <h6>Beri Tanda bagi yang tidak sama!</h6>

            <div class="col mb-4 ">
              <div class="row">
                <?php
                $i = 0;
                foreach ($teskecocokan as $k) :
                ?>

                  <div class="col-3">
                    <div class="card text-center bg-light text-black shadow">
                      <div class="card-header  text-white bg-secondary">Soal <?= $i + 1; ?></div>
                      <div class="card-body justify-content-center mb-3">
                        <label for="" class="" style="font-size: 20px;"><?= $k['nilaiA']; ?></label> <br>
                        <input class="" type="checkbox" id="jawaban<?= $i; ?>" value="benar" name="jawaban<?= $i; ?>"><br>
                        <label for="" style="font-size: 20px;"><?= $k['nilaiB']; ?></label>
                      </div>
                    </div>
                  </div>
                <?php
                  $i++;

                endforeach; ?>
              </div>
            </div>

            <button name="submit" type="submit" class="btn btn-primary offset-11">Next</button>
            <hr>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->