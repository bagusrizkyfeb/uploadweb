<html>
<head>
<title>Ruang Kelas</title>
	<link rel="icon" href="gambar/favicon1.png">
	<link rel="stylesheet" type="text/css" href="crud.css">
</head>

<body>

	<div class="wrap">
	<div class="menu">
	<div class="gambar">
<img src="gambar/logo.png" width="200" height="36">
</div>

	<ul>
	
  
  
  <li><a href="logout.php">Logout</a></li>
  <li><a href="home.php">Utama</a></li>
  <li><a href="about.html">About</a></li>

    </div>
  </li>
</ul>
<br>
<br>
<div id="tombol">
							<a href="form.php?">
							<input type="submit" class="wed" name="" value="Tambah Data">
							</a>
						</div>
<table class="table1">
<table border="1">
<tr>
	<th>User name</th>
	<th>Password</th>
	<th>Nama</th>
	<th>NPM</th>
	<th>Kelas</th>
	<th>Prodi</th>
	<th colspan="2">Action</th>
</tr>

<?php
include ("koneksi.php");
include ("seleksi_db.php");
$seleksi = "SELECT * FROM mahasiswa order by user";
$hasil_seleksi = mysqli_query ($koneksi,$seleksi);
if (!$hasil_seleksi){
echo "Proses penyeleksian tabel buku gagal !!!";
} else {
while ($baris = mysqli_fetch_array ($hasil_seleksi)) {
echo "<tr>

<td>$baris[user]</td>
<td>$baris[password]</td>
<td>$baris[nama]</td>
<td>$baris[NPM]</td>
<td>$baris[kelas]</td>
<td>$baris[prodi]</td>
<td><a
href='form.php?action=edit&user=$baris[user]&password=$baris[password]&nama=$baris[nama]&NPM=$baris[NPM]&kelas=$baris[kelas]&prodi=$baris[prodi]'> edit </a></td>
<td><a href='hapus.php?&user=$baris[user]'> hapus
</a></td>
<tr>";
};
};
?>
</table>
<br>

<center><a href="cetak.php" target="_blank">Print</a>

</div>
</body>
</html>