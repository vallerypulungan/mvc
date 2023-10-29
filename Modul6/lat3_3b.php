<?php

function faktorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}


if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $faktorial = faktorial($angka);
    
    
    session_start();
    $_SESSION['data'] = array(
        'angka' => $angka,
        'faktorial' => $faktorial,
        'nim' => '225150701111026',
        'nama' => 'Vallery Pulungan'
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Faktorial</title>
</head>
<body>
    <h1>Hasil Perhitungan Faktorial</h1>
    <?php if (isset($angka) && isset($faktorial)) { ?>
        <p>Angka yang dimasukkan: <?php echo $angka; ?></p>
        <p>Nilai Faktorial: <?php echo $faktorial; ?></p>
        <a href="Lat3_3c.php">Tampilkan Data Session</a>
    <?php } else { ?>
        <p>Silakan isi form di halaman sebelumnya.</p>
    <?php } ?>
</body>
</html>
