<?php
class Account {
  public $nomor;
  public $saldo;

  function __construct($nomor, $saldo_awal)
  {
    $this->nomor = $nomor;
    $this->saldo_awal = $saldo_awal;
  }

  public function deposit($uang){
    $this->saldo_tambah = $this->saldo_awal + $uang;
  }

  public function withdraw($uang){
    $this->saldo_kurang = $this->saldo_awal - $uang;
  }

}
?>