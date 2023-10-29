<?php
include_once ("m_programKerja.php");
class c_programKerja{
public $model;
function __construct(){
$this->model = new m_programKerja();
}
function data(){
$data = $this->model->getSemuaProgramKerja();
include "menteriload.php";
}
function invoke(){
$data = $this->model->getSemuaProgramKerja(); 
include "v_programKerja.php"; 
}
function viewEdit($surat){
$data = $this->model->selectProgram($surat); 
$row = $this->model->fetch($data); 
include "v_programKerjaUpdate.php"; 
}
function viewInsert(){
include "v_programKerjaCreate.php"; 
}
function update(){
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$surat = $_POST['surat'];
$update = $this->model->updateProgram($nomor, $nama, $surat);
header("location:kadep.php");
}
function delete($nomor){
$delete = $this->model->deleteProgram($nomor);
header("location:kadep.php");
}
function insert(){
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $surat = $_POST['surat'];
    $insert = $this->model->setProgramKerja($nomor, $nama, $surat);
    header("location:kadep.php");
    }
    function __destruct(){
    }
    }
    ?>