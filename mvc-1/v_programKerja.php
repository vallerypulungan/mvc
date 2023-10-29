<html>
<head>
</head>
<body>
<h1><center>Daftar Program Kerja 
BEM</center></h1>
<table border="1" cellpadding="3" 
cellspacing="0" align="center">
<tr align="center">
<td>Nomor</td>
<td>Nama Program Kerja</td>
<td>Surat Keterangan</td>
<td colspan="2">Aksi</td>
</tr>
<?php while($row = $this->model->fetch($data)){
echo "
<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td><a 
href='kadep.php?e=$row[0]'>Edit</a></td>
<td><a 
href='kadep.php?d=$row[0]' onClick=\"return 
confirm('Hapus Data?')\"\>Delete</a></td>
</tr>
";
}?>
</table>
<center><a href='kadep.php?i=add'>Tambah 
Data</a></center>
<center><a href='index.php?
i=add'>Logout</a></center>
</body>
</html>