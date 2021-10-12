<?= $this->extend('tamplate/index'); ?>



<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4>Tes Penalaran Analitis (Waktu: 5 Menit)</h4>
          <hr>
        </div>
      </div>
      <div class="table-responsive mt ">
        <?php
        $i = 0;
        foreach ($pilgantahapi as $k) :
          $id = $k["id"];
          $pilihan_a = $k["a"];
          $pilihan_b = $k["b"];
          $pilihan_c = $k["c"];
          $pilihan_d = $k["d"];
          $pilihan_e = $k["e"];
        ?>
          <form action="savepilgani/tes-penalaran-analisis" method="POST">
            <table>
              <tbody>
                <div class="form-group row">

                  <tr>
                    <td><?= $i + 1 . ". "  . $k['soal']; ?>.</td>
                  </tr>
                </div>
                <tr>
                  <td colspan="8">
                    <input type="radio" aria-label="Radio button for following text input" value="a" name="jawaban<?= $i; ?>"><?php echo " A. $pilihan_a"; ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="6">
                    <input type="radio" aria-label="Radio button for following text input" value="b" name="jawaban<?= $i; ?>"><?php echo " B. $pilihan_b"; ?>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">
                    <input type="radio" aria-label="Radio button for following text input" value="c" name="jawaban<?= $i; ?>"><?php echo " C. $pilihan_c"; ?>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">
                    <input type="radio" aria-label="Radio button for following text input" value="d" name="jawaban<?= $i; ?>"><?php echo " D. $pilihan_d"; ?>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">
                    <input type="radio" aria-label="Radio button for following text input" value="e" name="jawaban<?= $i; ?>"><?php echo " E. $pilihan_e"; ?>
                  </td>
                </tr>
              </tbody>
            </table <hr class="sidebar-divider">
            <?php $i++; ?>

          <?php endforeach; ?>
          <?php

          ?>
          <tr>
            <td height="40"></td>
            <td>
              <input type="submit" name="submit" value="Jawab" onclick="return confirm('Perhatian! Apakah Anda sudah yakin dengan semua jawaban Anda?')">
              <input type="reset" value="Reset">
            </td>
          </tr>

          </form>



      </div>



    </div>
  </div>

</div>

<?= $this->endSection(); ?>
<!-- /.container-fluid -->