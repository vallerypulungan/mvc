<?php
class mahasiswa {
  // Properties
  public $nim;
  public $nama;
  public $angkatan;

  public function __construct($nim, $nama, $angkatan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->angkatan = $angkatan;
  }
  public function cetak (){
    echo "nama : $this->nama<br>";
    echo "nim : $this->nim<br>";
    echo "angkatan : $this->angkatan<br>";
  }
  
}
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$angkatan = $_POST['angkatan'];

    $mhs1 = new mahasiswa($nama, $nim , $angkatan);
    $mhs1->cetak();
?>