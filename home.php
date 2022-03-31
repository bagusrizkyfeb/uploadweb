<!DOCTYPE html>
<html>
<head>
	<title>Ruang Kelas</title>
	<link rel="icon" href="gambar/favicon1.png">
	<link rel="stylesheet" type="text/css" href="home.css">
	<style>
	h1 {
		font-size:20px;
		font-family:calibri;
		padding:0 0 0 30px;
		color:black;
	}
	h3 {
		background:#5A52CC;
		font-size:20px;
		padding:7px 7px 7px 7px;
		font-family:calibri;
		font-size:15px;
		text-decoration:none;
		float: right;
		margin-right:35px;
		color:white;
		border:1px solid #5A52CC;
		border-radius:30px;
	}
	</style>
</head>
<body>
	<div class="wrap">
	<div class="menu">
	<div class="gambar">
<img src="gambar/logo.png" width="200" height="36">
</div>

	<ul>
	
  
  <li><a href="logout.php">Logout</a></li>
  <li><a href="crud.php">Data Mahasiswa</a></li>	

    </div>
  </li>
</ul>

			<div class="badan">
			
		<div class="header">	
		<center> <img src="gambar/header3.png" width="100%" height="600"> </center>
		</div>
		
<div class="form">
  <input class="search" type="text" placeholder="Cari..." required>	
  <input class="button" type="button" value="Cari">		
</form>
</div>
				<div class="content1">
				
				
				<h2> Materi Kuliah Terbaru Kelas R6C </h2>
				<br>
<?php
$konek = mysqli_connect("localhost","root","","r6c");

$query = "SELECT * FROM upload ORDER BY id_upload DESC";
$hasil = mysqli_query($konek, $query);
while ($r = mysqli_fetch_array($hasil)){
echo "<pre><h1>Nama Makalah : <b>$r[nama_file]</b> <br>";
echo "Deskripsi 	   : $r[deskripsi] <br>";
echo "Tanggal		   : $r[tgl_upload]";
echo "<br><a href=\"simpan.php?file=$r[nama_file]\"><h3>Download File</h3></a><br><br><hr><br></pre>";
}
?>	      
</div>

<div class="samping">
<h2> Upload Makalah </h2>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
<a><input type="file" name="fupload"><br><br>
<a>Deskripsi File : </a>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>
</div>


		
</body>
</html>