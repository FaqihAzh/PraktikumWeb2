<?php
require_once 'class_dispenser.php';

// Aritmatika Pembelian Minuman
class Pembelian extends Dispenser {
  function __construct($volume_awal, $no_minuman, $volume_gelas, $jumlah)
  {
    parent::__construct($volume_awal, $no_minuman, $volume_gelas);
    $this->jumlah = $jumlah;
  }

// Fungsi Beli Minuman
  function vol_kurang(){
    return $this->vol_awal - ($this->jumlah * 250);
  }

// Fungsi Harga Bayar
  function bayar(){
    return $this->jumlah * $this->harga;
  }
}
?>