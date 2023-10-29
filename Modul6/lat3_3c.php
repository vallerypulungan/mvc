<?php
session_start();

if (isset($_SESSION['data'])) {
    $data = $_SESSION['data'];
    
    echo "<h1>Data Session</h1>";
    echo "<p>Angka: " . $data['angka'] . "</p>";
    echo "<p>Nilai Faktorial: " . $data['faktorial'] . "</p>";
    echo "<p>NIM: " . $data['nim'] . "</p>";
    echo "<p>Nama: " . $data['nama'] . "</p>";
    
    session_unset();
    session_destroy();
} else {
    echo "<p>Tidak ada data session yang tersimpan.</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Session</title>
</head>
<body>
    <a href="Lat3_3a.php">Kembali ke Form Input</a>
</body>
</html>
