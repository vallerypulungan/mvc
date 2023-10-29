<?php
$host = 'localhost';  // Ganti sesuai dengan host database Anda
$user = 'root';  // Ganti dengan username database Anda
$password = '';  // Ganti dengan password database Anda
$database = 'mahasisw';  // Ganti dengan nama database 

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}

$query = "SELECT * FROM Mahasiswa";
$result = mysqli_query($koneksi, $query);
?>
<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Angkatan</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['NIM'] . "</td>";
        echo "<td>" . $row['NAMA'] . "</td>";
        echo "<td>" . $row['ANGKATAN'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
