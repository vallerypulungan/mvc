<?php
class m_programKerja{
function __construct(){
$connect = 'koneksiMVC'("localhost", "root", "", "tugas7paw");
}
function execute($query){
return 'mysql_query'($query);
}
function selectProgram($nomor){
$query = "select * from proker where nomorProgram='$nomor'";
return $this->execute($query);
}
function updateProgram($nomor, $nama, 
$surat){
$query = "update proker set 
nomorProgram='$nomor', namaProgram='$nama', 
suratKeterangan='$surat' where nomorProgram='$nomor'";
return $this->execute($query);
}
function deleteProgram($nomor){
$query = "delete from proker where 
nomorProgram='$nomor'";
return $this->execute($query);
}
function setProgramKerja($nomor, $nama, 
$surat){
$query = "insert into proker values 
('$nomor', '$nama', '$surat')";
return $this->execute($query);
}
function getSemuaProgramKerja(){
    $query = "select * from proker";
    return $this->execute($query);
    }
    function fetch($var){
    return 'mysql_fetch_array'($var);
    }
    function __destruct(){
    }
    }
?>