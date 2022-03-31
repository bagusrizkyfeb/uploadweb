<?php
include ("koneksi.php");
include ("seleksi_db.php");

	$SQL="DELETE FROM mahasiswa WHERE user ='".$_GET['user']."';";

	$cek = mysqli_query($koneksi, $SQL) or die ("Proses update data GAGAL! <br> ");
?>
<script language="javascript">
alert("Data berhasil di hapus !!");
document.location.href="crud.php";
</script>