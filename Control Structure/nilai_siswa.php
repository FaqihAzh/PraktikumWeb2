<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .container-fluid {
      padding : 1rem;
    }
  </style>

  <title>Form Nilai - Muhamad Faqih Azhar</title>
</head>
<body>
  <div class="card">
    <div class="card-header">
      <h5>Sistem Penilaian</h5>
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="form_nilai.php">
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label text-right"><strong>Nama Lengkap</strong></label> 
                <div class="col-8">
                  <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label text-right"><strong>Mata Kuliah</strong></label> 
                <div class="col-8">
                  <select id="matkul" name="matkul" class="custom-select">
                    <option value="PPKn">PPKn</option>
                    <option value="Basis Data I">Basis Data I</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Pemograman Web II">Pemograman Web II</option>
                    <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                    <option value="Statistika & Probabilitas">Statistika & Probabilitas</option>
                    <option value="User Interface & User Experience">User Interface & User Experience</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label text-right"><strong>Nilai UTS</strong></label> 
                <div class="col-4">
                  <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label text-right"><strong>Nilai UAS</strong></label> 
                <div class="col-4">
                  <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label text-right"><strong>Nilai Praktikum/Tugas</strong></label> 
                <div class="col-4">
                  <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required">
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <input type="submit" name="proses" value="Simpan" class="bg-primary text-white rounded border-0 p-2">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </div>

      <!-- PHP Code -->

      <div class="container">
      <?php
      require_once 'libfungsi.php';

      $nama_siswa = $_POST['nama'];
      $mata_kuliah = $_POST['matkul'];
      $nilai_uts = $_POST['nilai_uts'];
      $nilai_uas = $_POST['nilai_uas'];
      $nilai_tugas = $_POST['nilai_tugas'];
      $nilai_total = (0.3*$nilai_uts) + (0.35*$nilai_uas) + (0.35*$nilai_tugas);
      $status = kelulusan($nilai_total);
      $grade = grade($nilai_total);
      $predikat = predikat($grade);
      ?>

      <table>
      <?php
        if(!empty($proses)) {
          echo '<tr><td>'.'Nama Mahasiswa'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$nama_siswa.'</td></tr>';
          echo '<tr><td>'.'Mata Kuliah'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$mata_kuliah.'</td></tr>';
          echo '<tr><td>'.'Nilai UTS'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$nilai_uts.'</td></tr>';
          echo '<tr><td>'.'Nilai UAS'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$nilai_uas.'</td></tr>';
          echo '<tr><td>'.'Nilai Tugas'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$nilai_tugas.'</td></tr>';
          echo '<tr><td>'.'Nilai Total'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$nilai_total.'</td></tr>';
          echo '<tr><td>'.'Status'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$status.'</td></tr>';
          echo '<tr><td>'.'Grade'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$grade.'</td></tr>';
          echo '<tr><td>'.'Predikat'.'</td>';
          echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
          echo '<td>'.$predikat.'</td></tr>';
        }
      ?>
      </table>
      </div>
    </div>
  </div>
</body>
</html>