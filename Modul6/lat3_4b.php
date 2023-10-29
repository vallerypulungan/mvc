<?php
if(isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
    $cd_order = $_POST['cd_order'];
    $dvd_order = $_POST['dvd_order'];
    
    setcookie("cd_order", $cd_order);
    setcookie("dvd_order", $dvd_order);
    header("Location: Lat3_4c.php");
}
?>
