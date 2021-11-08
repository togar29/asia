<?= $this->extend('tamplate/index'); ?>


<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
    </div>
    <div class="card-body">
      <div class="row py-2">
        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Soal</th>
              <th>A</th>
              <th>B</th>
              <th>C</th>
              <th>D</th>
              <th>E</th>
              <th>Kunci</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0;
            foreach ($pilgan as $k) : ?>
              <tr>
                <td><?= $i + 1; ?></td>
                <td><?= $k['soal']; ?></td>
                <td><?= $k['a']; ?></td>
                <td><?= $k['b']; ?></td>
                <td><?= $k['c']; ?></td>
                <td><?= $k['d']; ?></td>
                <td><?= $k['e']; ?></td>
                <td><?= $k['kunci']; ?></td>
                <td>
                  <a href="" id="edit<?= $i; ?>" class="btn btn-primary"> Edit</a>
                  <br><br>
                  <a href="" id="delete<?= $i; ?>" class="btn btn-danger"> Delete</a>
                </td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="row py-2">
        <a href="#" class="col-12 btn btn-primary" data-toggle="modal" data-target="#modalSaya">Tambah Data</a>
      </div>
    </div>
  </div>


</div>

<!-- Modals Untuk Tambah data -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel"><?= $jenistes['jenisTes']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/savepilihanberganda" method="POST">
          <?= csrf_field(); ?>
          <input id="page" style="display: none;" name="page" class="form-control here" type="text" value="pilihanberganda">
          <div class="form-group row">
            <label for="jenistes" class="col-4 col-form-label">Jenis tes</label>
            <div class="col-8">
              <input class="form-control" name="namate" readonly=true value="<?= $jenistes['jenisTes']; ?>" type="text">
              <input class="form-control" style="display: none;" name="jenistes" readonly=true value="<?= $jenistes['id']; ?>" type="text">
              <input class="form-control" style="display: none;" name="slug" readonly=true value="<?= $slug; ?>" type="text">
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

      </div>
      <div class="modal-footer">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>




<script>
  function mouseOveredit(id) {
    document.getElementById(id).innerHTML = 'edit';
  }

  function mouseOverdelete(id) {
    document.getElementById(id).innerHTML = 'hapus';
  }
</script>


<?= $this->endSection(); ?>
<!-- /.container-fluid -->