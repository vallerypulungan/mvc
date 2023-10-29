<?php
 include "pengurusBEM.php";
 class menteri extends pengurusBEM {
 public function __construct($nama) {
 $this->nama = $nama;
 }
 function setJabatan($jabatan) {
 $this->jabatan = $jabatan;
 }
 public function getJabatan() {
 echo "$this->jabatan";
 }
 }
 $pengurus1 = new menteri('Vallery Pulungan');
 $pengurus1->setNIM('225150701111026');
 $pengurus1->setJabatan('Menteri kominfo'); echo 
"<br><br>";
 $pengurus1->getNama(); echo "<br>";
 $pengurus1->getJabatan(); echo "<br>";
 $pengurus1->getNIM();
?>
