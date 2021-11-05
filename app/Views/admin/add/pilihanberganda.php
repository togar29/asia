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
          <form action="savepilihanberganda" method="POST">
            <?= csrf_field(); ?>
            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="pilihanberganda">
            <div class="form-group row">
              <label for="jenistes" class="col-4 col-form-label">Jenis tes</label>
              <div class="col-8">
                <input class="form-control" name="jenistes" readonly=true value="<?= $jenistes['jenisTes']; ?>" type="text">
              </div>
            </div>

            <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="jenistes">
            <div class="form-group row">
              <label for="soal" class="col-4 col-form-label">Soal</label>
              <div class="col-8">
                <textarea id="soal" name="soal" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="a" class="col-4 col-form-label">Jawaban A</label>
              <div class="col-8">
                <input id="a" name="a" placeholder="jawaban A" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="b" class="col-4 col-form-label">jawaban B</label>
              <div class="col-8">
                <input id="b" name="b" placeholder="Jawaban B" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="c" class="col-4 col-form-label">Jawaban C</label>
              <div class="col-8">
                <input id="c" name="c" placeholder="jawaban C" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="d" class="col-4 col-form-label">Jawaban D</label>
              <div class="col-8">
                <input id="d" name="d" placeholder="Jawaban D" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="e" class="col-4 col-form-label">Jawaban E</label>
              <div class="col-8">
                <input id="e" name="e" placeholder="Jawaban E" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="jenistes" class="col-4 col-form-label">Kunci Jawaban</label>
              <div class="col-8">
                <select name="kunci" id="kunci" class="form-control">
                  <option value="a">A</option>
                  <option value="b">B</option>
                  <option value="c">C</option>
                  <option value="d">D</option>
                  <option value="e">E</option>
                </select>
              </div>
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

<?= $this->endSection(); ?>
<!-- /.container-fluid -->