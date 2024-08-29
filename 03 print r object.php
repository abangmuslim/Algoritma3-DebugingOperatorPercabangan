<?php
class Buah {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$apel = new Buah("Apel", "Merah");
$pisang = new Buah("pisang", "warna");
print_r($apel);
print "<p>";
print_r($pisang);
