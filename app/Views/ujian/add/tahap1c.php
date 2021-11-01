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
          <!-- Tuliskan dalam Bentuk Kata-Kata-->

          <form action="/ujian/savebagian1c" method="POST">
            <input type="text" style="display: none;" name="slug" value="tahap-1-bagian-c">
            <h6>Tuliskan dalam bentuk angka!</h6><br>

            <?php
            $i = 0;

            foreach ($pertanyaanessay as $k) :
            ?>
              <div class="col-9 offset-1">
                <div class="input-group mb-2">
                  <div class="col-10">
                    <div class="input-group-text"><?= $k['pertanyaan']; ?></div>
                  </div>
                  <input type="text" style="" class="form-control" name="jawaban<?= $i; ?>" id="jawaban<?= $i; ?>" placeholder="Angka">
                </div>
              </div>
            <?php
              $i++;

            endforeach; ?>

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



</div>



<?= $this->endSection(); ?>
<!-- /.container-fluid -->