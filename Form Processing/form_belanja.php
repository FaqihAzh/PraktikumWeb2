<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="form_belanja.css">

  <style>
    .container-fluid {
      padding : 1rem;
    }

    h3 {
      margin-bottom : -0.5rem;
    }
  </style>

  <title>Form Belanja - Muhamad Faqih Azhar</title>
</head>

<body>
<div class="container-fluid">
  <h3>Belanja Online</h3>
  <hr>
	<div class="row">
		<div class="col-md-5">
      <form method="POST" action="form_belanja.php">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label"><strong>Customer</strong></label> 
          <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4"><strong>Pilih Produk</strong></label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi" required="required"> 
              <label for="produk_0" class="custom-control-label">Televisi</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
              <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
              <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label"><strong>Jumlah</strong></label> 
          <div class="col-4">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-success">Kirim</button>
          </div>
        </div>
      </form>
		</div>
    <div class="col-md-3">
    </div>
		<div class="col-md-4 daf_harga">
      <table class="table">
          <tr class="table-primary">
            <td><strong>Daftar Harga Barang</strong></td>
          </tr>
          <tr>
            <td>Televisi : 4.200.000</td>
          </tr>
          <tr>
            <td>Kulkas : 3.100.000</td>
          </tr>
          <tr>
            <td>Mesin Cuci : 3.800.000</td>
          </tr>
          <tr class="table-primary">
            <td><em>*Harga Dapat Berubah Setiap Saat</em></td>
          </tr>
      </table>
		</div>
	</div>
  <div class="row">
    <div class="col-md-12">
      <!-- PHP  -->
      <?php
      // Mengambil data
      $proses = $_POST['proses'];
      $customer = $_POST['customer'];
      $produk = $_POST['produk'];
      $jumlah = $_POST['jumlah'];
      $harga_televisi = 4200000;
      $harga_kulkas = 3100000;
      $harga_mesincuci = 3800000;

      if ($produk == 'Televisi'){
        $total = $harga_televisi*$jumlah;
      } elseif ($produk == 'Kulkas'){
        $total = $harga_kulkas*$jumlah;
      } elseif ($produk == 'Mesin Cuci'){
        $total = $harga_mesincuci*$jumlah;
      } else {
        $total = '';
      }

      ?>

      <table>
      <?php
        echo '<tr><td>'.'Nama Customer'.'</td>';
        echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
        echo '<td>'.$customer.'</td></tr>';
        echo '<tr><td>'.'Produk Pilihan'.'</td>';
        echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
        echo '<td>'.$produk.'</td></tr>';
        echo '<tr><td>'.'Jumlah Pesanan'.'</td>';
        echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
        echo '<td>'.$jumlah.'</td></tr>';
        echo '<tr><td>'.'Total Belanja'.'</td>';
        echo '<td>'.'&emsp;'.':'.'&emsp;'.'</td>';
        echo '<td>'.$total.'</td></tr>';
      ?>
      </table>

    </div>
  </div>
</div>
</body>
</html>