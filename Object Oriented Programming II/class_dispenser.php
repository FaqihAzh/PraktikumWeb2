<?php
class Dispenser {
  protected $volume;
  protected $harga_segelas;
  private $volume_gelas;
  public $nama_minuman;

  function __construct($volume_awal, $no_minuman, $volume_gelas)
  {
    $this->vol_awal = $volume_awal;
    $this->nama_minuman = $no_minuman;
    $this->volume_gelas = $volume_gelas;
  }

  function harga_minuman(){
    if ($this->nama_minuman = 'Air Kelapa'){
      $this->harga = 11000;
      return 11000;
    } 
    elseif ($this->nama_minuman = 'Susu Kurma'){
      $this->harga = 13000;
      return 13000;
    } 
    elseif ($this->nama_minuman = 'Air Nabeez'){
      $this->harga = 15000;
      return 15000;
    }
    else {
      return 0;
    }
  }
}
?>