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
            <h2 style="text-align: center;margin-bottom: 30px">DAFTAR NILAI MAHASISWA</h2>
            <hr style="width: 60%;margin-top:-1rem;">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">NIM</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Prodi</th>
                    <th style="text-align: center;">Thn Angkatan</th>
                    <th style="text-align: center;">IPK</th>
                    <th style="text-align: center;">Predikat</th>
                    <th style="width: 60px;text-align: center;">Edit</th>
                </tr>
              </thead>

              <?php
              require_once "class_mahasiswa.php";
              $m1 = new Mahasiswa('0110221092', 'Muhamad Faqih Azhar', 2020, 'TI', 4.0);
              $m2 = new Mahasiswa('0110221075', 'Adzhimatinur Azzahra', 2020, 'TI', 3.96);
              $m3 = new Mahasiswa('0110221081', 'Anggi Novita Sari Harahap', 2020, 'TI', 4.0);
              $m4 = new Mahasiswa('0110221070', 'Annisa Maulida Rahma', 2020, 'TI', 4.0);
              $m5 = new Mahasiswa('0110221076', 'Deriyamsi Ritonga', 2020, 'TI', 3.96);
              $m6 = new Mahasiswa('0110221091', 'Fahri Prastyo', 2020, 'TI', 3.78);
              $m7 = new Mahasiswa('0110221084', 'Farid Syahroni', 2020, 'TI', 3.0);
              $m8 = new Mahasiswa('0110221078', 'Farida Afrina', 2020, 'TI', 4.0);
              $m9 = new Mahasiswa('0110221090', 'Fathi Farhat Hidayat', 2020, 'TI', 3.31);
              $m10 = new Mahasiswa('0110221074', 'Fikri Kholish Siregar', 2020, 'TI', 3.8);
              $m11 = new Mahasiswa('0110221072', 'Jaisy Muhamad Fatih', 2020, 'TI', 3.8);
              $m12 = new Mahasiswa('0110221082', 'Muhammad Ammar Ayyasy', 2020, 'TI', 3.96);
              $m13 = new Mahasiswa('0110221085', 'Muhammad Gilbran Khatami', 2020, 'TI', 3.8);
              $m14 = new Mahasiswa('0110221089', 'Rafi Nur Latif', 2020, 'TI', 3.8);
              $m15 = new Mahasiswa('0110221093', 'Restu Abie Sucipto', 2020, 'TI', 3.8);
              $m16 = new Mahasiswa('0110221088', 'Sayid Nashif Arrafi', 2020, 'TI', 3.8);
              $m17 = new Mahasiswa('0110221080', 'Seri Ani Ritonga', 2020, 'TI', 4.0);
              $m18 = new Mahasiswa('0110221069', 'Siti Nur Kaffah', 2020, 'TI', 3.8);
              $m19 = new Mahasiswa('0110221073', 'Yulia Ananda Siregar', 2020, 'TI', 3.96);
              $m20 = new Mahasiswa('0110221071', 'Zakiah Nabila', 2020, 'TI', 3.8);
              ?>

              <?php
              echo '<tbody>
              <tr>
                <th style="text-align: center;" scope="row">1</th>
                <td>'.$m1->nim.'</td>
                <td>'.$m1->nama.'</td>
                <td style="text-align: center;">'.$m1->prodi.'</td>
                <td style="text-align: center;">'.$m1->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m1->ipk.'</td>
                <td style="text-align: center;">'.$m1->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">2</th>
                <td>'.$m2->nim.'</td>
                <td>'.$m2->nama.'</td>
                <td style="text-align: center;">'.$m2->prodi.'</td>
                <td style="text-align: center;">'.$m2->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m2->ipk.'</td>
                <td style="text-align: center;">'.$m2->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">3</th>
                <td>'.$m3->nim.'</td>
                <td>'.$m3->nama.'</td>
                <td style="text-align: center;">'.$m3->prodi.'</td>
                <td style="text-align: center;">'.$m3->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m3->ipk.'</td>
                <td style="text-align: center;">'.$m3->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">4</th>
                <td>'.$m4->nim.'</td>
                <td>'.$m4->nama.'</td>
                <td style="text-align: center;">'.$m4->prodi.'</td>
                <td style="text-align: center;">'.$m4->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m4->ipk.'</td>
                <td style="text-align: center;">'.$m4->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">5</th>
                <td>'.$m5->nim.'</td>
                <td>'.$m5->nama.'</td>
                <td style="text-align: center;">'.$m5->prodi.'</td>
                <td style="text-align: center;">'.$m5->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m5->ipk.'</td>
                <td style="text-align: center;">'.$m5->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">6</th>
                <td>'.$m6->nim.'</td>
                <td>'.$m6->nama.'</td>
                <td style="text-align: center;">'.$m6->prodi.'</td>
                <td style="text-align: center;">'.$m6->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m6->ipk.'</td>
                <td style="text-align: center;">'.$m6->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">7</th>
                <td>'.$m7->nim.'</td>
                <td>'.$m7->nama.'</td>
                <td style="text-align: center;">'.$m7->prodi.'</td>
                <td style="text-align: center;">'.$m7->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m7->ipk.'</td>
                <td style="text-align: center;">'.$m7->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">8</th>
                <td>'.$m8->nim.'</td>
                <td>'.$m8->nama.'</td>
                <td style="text-align: center;">'.$m8->prodi.'</td>
                <td style="text-align: center;">'.$m8->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m8->ipk.'</td>
                <td style="text-align: center;">'.$m8->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">9</th>
                <td>'.$m9->nim.'</td>
                <td>'.$m9->nama.'</td>
                <td style="text-align: center;">'.$m9->prodi.'</td>
                <td style="text-align: center;">'.$m9->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m9->ipk.'</td>
                <td style="text-align: center;">'.$m9->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">10</th>
                <td>'.$m10->nim.'</td>
                <td>'.$m10->nama.'</td>
                <td style="text-align: center;">'.$m10->prodi.'</td>
                <td style="text-align: center;">'.$m10->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m10->ipk.'</td>
                <td style="text-align: center;">'.$m10->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">11</th>
                <td>'.$m11->nim.'</td>
                <td>'.$m11->nama.'</td>
                <td style="text-align: center;">'.$m11->prodi.'</td>
                <td style="text-align: center;">'.$m11->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m11->ipk.'</td>
                <td style="text-align: center;">'.$m11->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">12</th>
                <td>'.$m12->nim.'</td>
                <td>'.$m12->nama.'</td>
                <td style="text-align: center;">'.$m12->prodi.'</td>
                <td style="text-align: center;">'.$m12->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m12->ipk.'</td>
                <td style="text-align: center;">'.$m12->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">13</th>
                <td>'.$m13->nim.'</td>
                <td>'.$m13->nama.'</td>
                <td style="text-align: center;">'.$m13->prodi.'</td>
                <td style="text-align: center;">'.$m13->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m13->ipk.'</td>
                <td style="text-align: center;">'.$m13->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">14</th>
                <td>'.$m14->nim.'</td>
                <td>'.$m14->nama.'</td>
                <td style="text-align: center;">'.$m14->prodi.'</td>
                <td style="text-align: center;">'.$m14->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m14->ipk.'</td>
                <td style="text-align: center;">'.$m14->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">15</th>
                <td>'.$m15->nim.'</td>
                <td>'.$m15->nama.'</td>
                <td style="text-align: center;">'.$m15->prodi.'</td>
                <td style="text-align: center;">'.$m15->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m15->ipk.'</td>
                <td style="text-align: center;">'.$m15->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">16</th>
                <td>'.$m16->nim.'</td>
                <td>'.$m16->nama.'</td>
                <td style="text-align: center;">'.$m16->prodi.'</td>
                <td style="text-align: center;">'.$m16->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m16->ipk.'</td>
                <td style="text-align: center;">'.$m16->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">17</th>
                <td>'.$m17->nim.'</td>
                <td>'.$m17->nama.'</td>
                <td style="text-align: center;">'.$m17->prodi.'</td>
                <td style="text-align: center;">'.$m17->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m17->ipk.'</td>
                <td style="text-align: center;">'.$m17->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">18</th>
                <td>'.$m18->nim.'</td>
                <td>'.$m18->nama.'</td>
                <td style="text-align: center;">'.$m18->prodi.'</td>
                <td style="text-align: center;">'.$m18->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m18->ipk.'</td>
                <td style="text-align: center;">'.$m18->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">19</th>
                <td>'.$m19->nim.'</td>
                <td>'.$m19->nama.'</td>
                <td style="text-align: center;">'.$m19->prodi.'</td>
                <td style="text-align: center;">'.$m19->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m19->ipk.'</td>
                <td style="text-align: center;">'.$m19->predikat_ipk().'</td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                  <button class="btn btn-sm btn-light"><i class="glyphicon glyphicon-eye-open"></i></button>
                </td>
              </tr>
              <tr>
                <th style="text-align: center;" scope="row">20</th>
                <td>'.$m20->nim.'</td>
                <td>'.$m20->nama.'</td>
                <td style="text-align: center;">'.$m20->prodi.'</td>
                <td style="text-align: center;">'.$m20->thn_angkatan.'</td>
                <td style="text-align: center;">'.$m20->ipk.'</td>
                <td style="text-align: center;">'.$m20->predikat_ipk().'</td>
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
  </div>
  <div class="container">
  <div class="card-footer text-muted" style="margin-top: 5rem;margin-left:1.5rem;">
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
