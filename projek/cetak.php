<html>
<head>
	<title>Cetak Data</title>
	<link rel="icon" href="gambar/favicon1.png">
	<link rel="stylesheet" type="text/css" href="cetak.css">
</head>
<body>
 
	<center>
		
		<h2>DATA MAHASISWA</h2>
		
 
	</center>
 
	<table class="table">
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Username</th>
			
			<th>Nama</th>
			<th>NPM</th>
			<th>kelas</th>
			<th>prodi</th>
			
		</tr>
		<?php 
		$no = 1;
		$koneksi=mysqli_connect("localhost","root","","r6c") or die ("gagal");
		$sql = mysqli_query($koneksi,"select * from mahasiswa");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['user']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['NPM']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['prodi']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 </div>
	<script>
		window.print();
	</script>
 
</body>
</html>