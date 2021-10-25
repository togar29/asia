<?= $this->extend('tamplate/index'); ?>

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
          <form action="/ujian/savebagian1b" method="POST">
            <h6>Tuliskan dalam bentuk kata-kata!!</h6><br>

            <input type="text" style="display: none;" name="slug" value="tahap-1-bagian-b">
            <?php
            $i = 0;

            foreach ($pertanyaanessay as $k) :
            ?>
              <div class="col-7 offset-2">
                <div class="input-group mb-2">
                  <div class="input-group-prepend mx-6">
                    <div class="input-group-text"><?= $k['pertanyaan']; ?></div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" name="jawaban<?= $i; ?>" placeholder="Kata-kata">
                  <input type="text" style="display: none;" name="kunci<?= $i; ?>" class="form-control" id="inlineFormInputGroup" value="<?= terbilang((int)$k['pertanyaan']); ?>" placeholder="Kata-kata">

                </div>
              </div>


            <?php
              $i++;

            endforeach; ?>

            <input type="text" style="display: none;" name="jumlahsoal" class="form-control" id="inlineFormInputGroup" value="<?= $i; ?>" placeholder="Kata-kata">
            <div class="form-group row">
              <div class="offset-5 col-8">
                <button name="submit" type="submit" class="btn btn-primary">next</button>
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