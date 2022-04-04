<?php

class BankAccount extends Account {
  // Data Customer
  public $customer;

  function __construct($nomor, $saldo_awal, $customer)
  {
    parent::__construct($nomor, $saldo_awal);
    $this->customer = $customer;
  }

  function transfer($account_tujuan, $customer_tujuan, $uang){
    $this->account_tujuan = $account_tujuan;
    $this->uang = $uang;
    $this->customer_tujuan = $customer_tujuan; 
    $this->withdraw($uang);
  }
}
?>