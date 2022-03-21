<?php
class NilaiMahasiswa {
  public $nama;
  public $nim;
  public $matakuliah;
  public $nilai;

  function __construct($nama, $nim, $matakuliah, $nilai){
    $this->nama = $nama;
    $this->nim = $nim;
    $this->matakuliah = $matakuliah;
    $this->nilai = $nilai;
  }

  function keterangan(){
    if ($this->nilai > 55){
      return 'LULUS';
    } else {
      return 'TIDAK LULUS';
    }
  }

  function grade(){
    if ($this->nilai > 0 && $this->nilai <=35){
      $this->grade = 'E';
      return 'E';
    } elseif ($this->nilai > 35 && $this->nilai <=55){
      $this->grade = 'D';
      return 'D';
    } elseif ($this->nilai > 55 && $this->nilai <70){
      $this->grade = 'C';
      return 'C';
    } elseif ($this->nilai >= 70 && $this->nilai <85){
      $this->grade = 'B';
      return 'B';
    } elseif ($this->nilai >= 85 && $this->nilai <= 100){
      $this->grade = 'A';
      return 'A';
    } else {
      $this->grade = 'I';
      return 'I';
    }
  }

  function predikat(){
    switch ($this->grade){
      case 'A':
        return 'Sangat Memuaskan';
        break;
      case 'B':
        return 'Memuaskan';
        break;
      case 'C':
        return 'Cukup';
        break;
      case 'D':
        return 'Kurang';
        break;
      case 'E':
        return 'Sangat Kurang';
        break;
      default :
        return '';
    }
  }
}
?>