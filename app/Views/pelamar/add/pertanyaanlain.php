<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Tambah Data Keluarga</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <!-- Isi Data Profil-->

        <div class="col-md-12">
          <form>
            <div class="form-group row">
              <label for="infoloker" class="col-4 col-form-label">Dari mana anda memperoleh informasi mengenai
                perusahaan kami sehingga anda mengajukan lamaran kerja? jelaskan!</label>
              <div class="col-8">
                <textarea id="infoloker" name="infoloker" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="kerabat" class="col-4 col-form-label">Apakah anda memiliki kenalan, famili,
                atau keluarga yang bekerja di perusahaan ini? jika ya, sebutkan!</label>
              <div class="col-8">
                <textarea id="kerabat" name="kerabat" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="hobby" class="col-4 col-form-label">
                Apakah anda memiliki kenalan, famili, atau keluarga yang bekerja di perusahaan ini? jika ya, sebutkan!
              </label>
              <div class="col-8">
                <textarea id="hobby" name="hobby" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="skck" class="col-4 col-form-label">
                Apakah anda pernah berurusan denan pihak berwajib karena tindakan kriminalitas? jika ya Jelaskan!
              </label>
              <div class="col-8">
                <textarea id="skck" name="skck" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="alasanmelamar" class="col-4 col-form-label">
                Apakah yang mendoron anda mengajukan lamaran kerja di perusahaan ini?
              </label>
              <div class="col-8">
                <textarea id="alasanmelamar" name="alasanmelamar" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="bidangkerja" class="col-4 col-form-label">
                Seandainya boleh memilih, jenis/bidan pekerjaan apa yang lebih anda minati? Jelaskan!
              </label>
              <div class="col-8">
                <textarea id="bidangkerja" name="bidangkerja" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="referensi" class="col-4 col-form-label">
                Keberatankah anda jika kami minta referensi pada perusahaan dimana anda pernah atau saat ini masih bekerja? jika ya, Jelaskan!
              </label>
              <div class="col-8">
                <textarea id="referensi" name="referensi" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="training" class="col-4 col-form-label">
                Bersediakah anda menjalani masa training di perusahaan ini? jika tidak Jelaskan!
              </label>
              <div class="col-8">
                <textarea id="training" name="training" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="tunduk" class="col-4 col-form-label">
                Jika diterima, apakah anda bersedia tunduk pada perusahaan yang berlaku?
              </label>
              <div class="col-8">
                <textarea id="tunduk" name="tunduk" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="penghasilan" class="col-4 col-form-label">
                Berapa besar penghasilan anda sebulan dan fasilitas apa saja yang anda peroleh dari perusajaan terakhir anda bekerja?
              </label>
              <div class="col-8">
                <textarea id="penghasilan" name="penghasilan" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="buktipenghasilan" class="col-4 col-form-label">
                Dapatkah anda menyerahkan bukti tertulis penghasilan anda? jika tidak, jelaskan!
              </label>
              <div class="col-8">
                <textarea id="buktipenghasilan" name="buktipenghasilan" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="penghasilanharapan" class="col-4 col-form-label">
                Berapa besar penghasilan anda sebulan dan fasilitas apa saja yang anda harapkan jika diterima di perusahaan ini?
              </label>
              <div class="col-8">
                <textarea id="penghasilanharapan" name="penghasilanharapan" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="tekanan" class="col-4 col-form-label">
                Bersediakah anda bekerja dengan tejanan/ target deadline? jelaskan!
              </label>
              <div class="col-8">
                <textarea id="tekanan" name="tekanan" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="kelebihan" class="col-4 col-form-label">
                Coba sebutkan apa yang menjadi kelebihan anda!
              </label>
              <div class="col-8">
                <textarea id="kelebihan" name="kelebihan" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="kekurangan" class="col-4 col-form-label">
                Coba sebutkan apa yang menjadi kekurangan anda!
              </label>
              <div class="col-8">
                <textarea id="kekurangan" name="kekurangan" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="bekerja" class="col-4 col-form-label">
                Coba jelaskan untuk apa anda bekerja
              </label>
              <div class="col-8">
                <textarea id="bekerja" name="bekerja" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="pilihanposisi" class="col-4 col-form-label">
                Apa alasan anda memilih posisi pekerjaan ini?
              </label>
              <div class="col-8">
                <textarea id="pilihanposisi" name="pilihanposisi" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label for="pilihanposisi" class="col-4 col-form-label">
                Setelah terjadi kesepakatan antara anda dan perusahaan, berapa hari anda sanggup mulai masuk bekerja?
              </label>
              <div class="col-8">
                <textarea id="pilihanposisi" name="pilihanposisi" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <hr>

            <div class="form-group row">
              <div class="offset-10 col-2">
                <button name="submit" type="submit" class="btn btn-primary btn-block">Simpan</button>
              </div>
          </form>

        </div>
      </div>

    </div>
  </div>

</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->