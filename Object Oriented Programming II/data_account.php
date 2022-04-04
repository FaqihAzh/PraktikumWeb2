<!DOCTYPE html>

<html>
  <head>
      <title>Daftar Mahasiswa - Muhamad Faqih Azhar</title>
      
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  </head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
          <h2 style="text-align: center;margin-bottom: 30px;">DATA TRANSAKSI NASABAH BANK</h2>
          <hr style="width: 60%;margin-top:-1rem;">
          <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nomor Account</th>
                  <th style="text-align: center;">Nama Nasabah</th>
                  <th style="text-align: center;">Masuk/Keluar</th>
                  <th style="text-align: center;">Ke/Dari</th>
                  <th style="text-align: center;">Saldo Awal</th>
                  <th style="text-align: center;">Saldo Akhir</th>
                  <th style="width: 60px;text-align: center;">Edit</th>
              </tr>
            </thead>

              <?php
              require_once "class_account.php";
              require_once "class_bank_account.php";

              $account1 = new BankAccount('F001', 6000000, 'Ahmad');
              $account2 = new BankAccount('F002', 5350000, 'Budi');
              $account3 = new BankAccount('F002', 2500000, 'Kurniawan');

              // Ahmad Nabung 1 Juta
              $account1->transfer('F001','Ahmad', 1000000);
              // Saldo + 1 Juta
              $account1->deposit(1000000);      

              ?>

              <?php
              echo '<tbody>
              <tr>
                <th style="text-align: center;" scope="row">1</th>
                <td style="text-align: center;">'.$account1->nomor.'</td>
                <td style="text-align: center;">'.$account1->customer.'</td>
                <td style="text-align: center;">'.'+ '.$account1->uang.'</td>
                <td style="text-align: center;">'.$account1->customer_tujuan.'</td>
                <td style="text-align: center;">'.$account1->saldo_awal.'</td>
                <td style="text-align: center;">'.$account1->saldo_tambah.'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>';
              
              $account1 = new BankAccount('F001', $account1->saldo_tambah, 'Ahmad');
              // Transfer 1,5 Juta -> Kurniawan
              $account1->transfer('F003','Kurniawan', 1500000);
              // Saldo - 1,5 Juta
              $account1->withdraw(1500000);

              echo '<tr>
                <th style="text-align: center;" scope="row">2</th>
                <td style="text-align: center;">'.$account1->nomor.'</td>
                <td style="text-align: center;">'.$account1->customer.'</td>
                <td style="text-align: center;">'.'- '.$account1->uang.'</td>
                <td style="text-align: center;">'.$account1->customer_tujuan.'</td>
                <td style="text-align: center;">'.$account1->saldo_awal.'</td>
                <td style="text-align: center;">'.$account1->saldo_kurang.'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>';

              $account3 = new BankAccount('F003', 2500000, 'Kurniawan');
              // Terima 1,5 Juta -> Ahmad
              $account3->transfer('F001','Ahmad', 1500000);
              // Saldo - 1,5 Juta
              $account3->deposit(1500000);

              echo '<tr>
                <th style="text-align: center;" scope="row">3</th>
                <td style="text-align: center;">'.$account3->nomor.'</td>
                <td style="text-align: center;">'.$account3->customer.'</td>
                <td style="text-align: center;">'.'+ '.$account3->uang.'</td>
                <td style="text-align: center;">'.$account3->customer_tujuan.'</td>
                <td style="text-align: center;">'.$account3->saldo_awal.'</td>
                <td style="text-align: center;">'.$account3->saldo_tambah.'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>';

              $account1 = new BankAccount('F001', $account1->saldo_kurang, 'Ahmad');
              // Transfer 500rb -> Budi
              $account1->transfer('F002','Budi', 500000);
              // Saldo - 500rb
              $account1->withdraw(500000);

              echo '<tr>
                <th style="text-align: center;" scope="row">4</th>
                <td style="text-align: center;">'.$account1->nomor.'</td>
                <td style="text-align: center;">'.$account1->customer.'</td>
                <td style="text-align: center;">'.'- '.$account1->uang.'</td>
                <td style="text-align: center;">'.$account1->customer_tujuan.'</td>
                <td style="text-align: center;">'.$account1->saldo_awal.'</td>
                <td style="text-align: center;">'.$account1->saldo_kurang.'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>';

              $account2 = new BankAccount('F002', 5350000, 'Budi');
              // Terima 500rb -> Ahmad
              $account2->transfer('F001','Ahmad', 500000);
              // Saldo + 500rb
              $account2->deposit(500000);

              echo '<tr>
                <th style="text-align: center;" scope="row">5</th>
                <td style="text-align: center;">'.$account2->nomor.'</td>
                <td style="text-align: center;">'.$account2->customer.'</td>
                <td style="text-align: center;">'.'+ '.$account2->uang.'</td>
                <td style="text-align: center;">'.$account2->customer_tujuan.'</td>
                <td style="text-align: center;">'.$account2->saldo_awal.'</td>
                <td style="text-align: center;">'.$account2->saldo_tambah.'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>';

              $account2 = new BankAccount('F002', $account2->saldo_tambah, 'Budi');
              // Terima 500rb -> Ahmad
              $account2->transfer('F002','Budi', 2500000);
              // Saldo + 500rb
              $account2->withdraw(2500000);

              echo '<tr>
                <th style="text-align: center;" scope="row">6</th>
                <td style="text-align: center;">'.$account2->nomor.'</td>
                <td style="text-align: center;">'.$account2->customer.'</td>
                <td style="text-align: center;">'.'- '.$account2->uang.'</td>
                <td style="text-align: center;">'.$account2->customer_tujuan.'</td>
                <td style="text-align: center;">'.$account2->saldo_awal.'</td>
                <td style="text-align: center;">'.$account2->saldo_kurang.'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              </tbody>'
              ?>
          </table>
        </div>
      </div>
  <div class="container">
  <div class="card-footer text-muted" style="margin-top: 5rem;">
    <p><strong>Lab Pemograman Web Lanjutan</strong>
      <br><span style="font-size: small;">Dosen : Sirojul Munir, S.Si, M.Kom</span>
      <br><span style="font-size: small;">STT Terpadu Nurul Fikri - Kampus B</span>
    </p>
  </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
  </script>
</body>
</html>

