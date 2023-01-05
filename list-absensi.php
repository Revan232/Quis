<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Absensi Mahasiswa | Ulbi</title>
</head>
<body>
<header>
<h3>Absensi Mahasiswa </h3>
</header>
<nav>
<a href="form-absen.php">[+] Tambah Data</a>
</nav>
<br>
<table border="1">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>NPM</th>
<th>Prodi</th>
<th>Kelas</th>
<th>Kehadiran</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM absensi perkuliahan";
$result = mysqli_query($db, $sql);

while($absen = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>".$absen['Nama']."</td>";
echo "<td>".$absen['NPM']."</td>";
echo "<td>".$absen['Prodi']."</td>";
echo "<td>".$absen['Kelas']."</td>";
echo "<td>".$absen['Kehadiran']."</td>";

echo "<td>";
echo "<a href='form-edit.p0hp?id=".$absen['id']."'>Edit</a> | ";
echo "<a href='hapus.php?id=".$absen['id']."'>Hapus</a>";
echo "</td>";
echo "</tr>";
}
?>
</tbody>
</table>
<p> Total: <?php echo mysqli_num_rows($result) ?></p>
</body>
</html>