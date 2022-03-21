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
    <div class="container mt-3">
      <div>
      <h4>Form Nilai Ujian</h4>
      <hr>
      </div>
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="data_nilaimahasiswa.php">
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label text-right"><strong>Nama Mahasiswa</strong></label> 
                <div class="col-8">
                  <input id="nama" name="nama" placeholder="Nama Mahasiswa" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="nim" class="col-4 col-form-label text-right"><strong>NIM</strong></label> 
                <div class="col-8">
                  <input id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label text-right"><strong>Mata Kuliah</strong></label> 
                <div class="col-8">
                  <select id="matakuliah" name="matakuliah" class="custom-select">
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
                <label for="nilai" class="col-4 col-form-label text-right"><strong>Nilai</strong></label> 
                <div class="col-4">
                  <input id="nilai" name="nilai" placeholder="Nilai Mahasiswa" type="text" class="form-control" required="required">
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <input type="submit" name="proses" value="Simpan" class="bg-success text-white rounded border-0 p-2">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-3">
          </div>
        </div>
        <div class="container mt-4">
          <?php
          require_once "class_nilaimahasiswa.php";
          $proses= $_POST['proses'];
          $nama = $_POST['nama'];
          $nim = $_POST['nim'];
          $matakuliah = $_POST['matakuliah'];
          $nilai = $_POST['nilai'];
            
          $nm1 = new NilaiMahasiswa($nama,$nim,$matakuliah,$nilai);
          ?>

          <table>
          <?php
            if(!empty($proses)) {
              echo '<tr><td>'.'Nama Mahasiswa'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$nm1->nama.'</td></tr>';
              echo '<tr><td>'.'NIM'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$nm1->nim.'</td></tr>';
              echo '<tr><td>'.'Mata Kuliah'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$nm1->matakuliah.'</td></tr>';
              echo '<tr><td>'.'Nilai'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$nm1->nilai.'</td></tr>';
              echo '<tr><td>'.'Grade'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$nm1->grade().'</td></tr>';
              echo '<tr><td>'.'Predikat'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$nm1->predikat().'</td></tr>';
              echo '<tr><td>'.'Status'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$nm1->keterangan().'</td></tr>';
            }
          ?>
        </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
