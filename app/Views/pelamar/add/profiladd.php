<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Profil Anda</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group row">
              <label for="username" class="col-4 col-form-label">Nama Lengkap</label>
              <div class="col-md">
                <input id="namalengkap" name="namalengkap" placeholder="Nama Lengkap" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">NIK KTP</label>
              <div class="col-8">
                <input id="nikktp" name="nikktp" placeholder="Nomor Induk Kependudukan" class="form-control here" type="number">
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">JenisKelamin</label>
              <div class="col-8">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radiolaki" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioperempuan" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="lastname" class="col-4 col-form-label">Alamat Lengkap</label>
              <div class="col-8">
                <input id="alamat" name="alamat" placeholder="Alamat Lengkap" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Nomor HP</label>
              <div class="col-8">
                <input id="nohp" name="nohp" placeholder="Nomor HP" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="select" class="col-4 col-form-label">Email</label>
              <div class="col-8">
                <input id="email" name="email" placeholder="email@example.com" class="form-control here" required="required" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-4 col-form-label">Tangal Lahir</label>
              <div class="col-8">
                <input id="datepicker" name="tanggallahir" placeholder="Tanggal Lahir" class="form-control here" required="required" type="date">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Agama</label>
              <div class="col-8">
                <input id="agama" name="agama" placeholder="Agama" class="form-control here" type="text">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Golongan Darah</label>
              <div class="col-8">
                <input id="darah" name="darah" placeholder="Golongan Darah" class="form-control here" type="text">
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Pendidikan Terakhir</label>
              <div class="col-8">
                <input id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" class="form-control here" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Status</label>
              <div class="col-8">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="radiasingle" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Single</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="radiomenikah" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="radiojandaduda" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Duda/janda</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="radiocerai" value="option4">
                  <label class="form-check-label" for="inlineRadio4">Cerai</label>
                </div>
              </div>
            </div>


            <div class="form-group row">
              <label for="infokesehatan" class="col-4 col-form-label">Informasi Kesehatan</label>
              <div class="col-8">
                <textarea id="infokesehatan" name="infokesehatan" cols="40" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <div class=" form-group row">
              <label for="website" class="col-4 col-form-label">Foto</label>
              <div class="col-8">
                <input type="file" class="form-control" id="customFile" />
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary ">Update My Profile</button>
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