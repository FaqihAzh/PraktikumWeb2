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

  <title>Dispenser - Muhamad Faqih Azhar</title>
</head>
<body>
    <div class="container mt-3">
      <div>
      <h4>Mesin Minuman Sehat</h4>
      <hr>
      </div>
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="action_dispenser.php">
              <div class="form-group row">
                <label for="nama_minuman" class="col-4 col-form-label text-right"><strong>Pilih Minuman</strong></label> 
                <div class="col-8">
                  <select id="nama_minuman" name="nama_minuman" class="custom-select">
                    <option value="Air Kelapa">Air Kelapa</option>
                    <option value="Susu Kurma">Susu Kurma</option>
                    <option value="Air Nabeez">Air Nabeez</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label text-right"><strong>Jumlah Pesanan</strong></label> 
                <div class="col-4">
                  <input id="jumlah" name="jumlah" placeholder="Jumlah Pesanan" type="number" class="form-control" required="required">
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <input type="submit" name="proses" value="Pesan" class="bg-success text-white rounded border-0 p-2">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-3">
          </div>
        </div>
        <div class="container mt-4">
          <?php
          require_once "class_pembelian.php";
          $proses= $_POST['proses'];
          $nama_minuman = $_POST['nama_minuman'];
          $volume_gelas = 250;
          $jumlah = $_POST['jumlah'];
            
          $pesanan1 = new Pembelian(14000, $nama_minuman, $volume_gelas, $jumlah);
          ?>

          <table>
          <?php
            if(!empty($proses)) {
              echo '<tr><td>'.'Stok Tersedia'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$pesanan1->vol_awal.' ml</td></tr>';
              echo '<tr><td>'.'Nama Minuman'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$pesanan1->nama_minuman.'</td></tr>';
              echo '<tr><td>'.'Harga/Gelas'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>Rp. '.$pesanan1->harga_minuman().'</td></tr>';
              echo '<tr><td>'.'Jumlah Pesanan'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$pesanan1->jumlah.' gelas</td></tr>';
              echo '<tr><td>'.'<strong>Total</strong>'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>Rp. '.$pesanan1->bayar().'</td></tr>';
              echo '<tr><td>'.'<strong>Stok Sisa</strong>'.'</td>';
              echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
              echo '<td>'.$pesanan1->vol_kurang().' ml</td></tr>';
            }
          ?>
        </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
