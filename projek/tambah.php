<?php
include ("koneksi.php");
include ("seleksi_db.php");
$SQL="INSERT INTO mahasiswa
		(user,password ,nama,NPM, kelas, prodi)
VALUES
		('".$_GET['user']."', '".$_GET['password']."', '".$_GET['nama']."','".$_GET['NPM']."', '".$_GET['kelas']."', '".$_GET['prodi']."');";

	$cek = mysqli_query($koneksi, $SQL) or die ("Proses update data GAGAL! <br> ");
?>
	<script language="javascript">
	alert("sukses bossss !!");
		document.location.href="crud.php";
</script>