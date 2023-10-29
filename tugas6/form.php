<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Form Input Mahasiswa</h2>
    <form action="mahasiswa.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="angkatan">Angkatan:</label>
        <input type="text" id="angkatan" name="angkatan" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
