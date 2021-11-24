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
          <h4>Tahap 1 Bagain F (10 Menit)</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">

          <!-- Tuliskan dalam Bentuk Kata-Kata-->
          <form action="/ujian/savebagian1f" method="POST">
            <h6>Penjumlahan, Pengurangan, Perkalian dan Pembagian</h6><br>
            <input type="text" style="display: none;" name="slug" value="tahap-1-bagian-f">
            <?php
            $i = 0;

            foreach ($pertanyaanessay as $k) :
            ?>
              <div class="form-group row">
                <label class="col-1 col-form-label text-center"><?= $i + 1 ?>.</label>
                <label for="jabatanawal" class=" font-weight-bold  col-4 col-form-label "><?= $k['pertanyaan']; ?></label>
                <label class=" col-1 col-form-label">=</label>
                <div class="col-6">
                  <input type="text" class="form-control" id="inlineFormInputGroup" name="jawaban<?= $i; ?>" placeholder="Jumlah">
                </div>

              </div>
              <hr>
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