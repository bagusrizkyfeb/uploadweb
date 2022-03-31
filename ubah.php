<?php
include ("koneksi.php");

include ("seleksi_db.php");

	$SQL="UPDATE mahasiswa SET password = '".$_GET['password']."',nama = '".$_GET['nama']."',NPM = '".$_GET['NPM']."',kelas =
'".$_GET['kelas']."',prodi= '".$_GET['prodi']."' WHERE user ='".$_GET['user']."';";

$cek = mysqli_query($koneksi, $SQL) or die ("Proses update data GAGAL! <br> ");
//echo $SQL;
?>
<script language="javascript">
alert("Data berhasil di edit !!");
document.location.href="crud.php";
</script>

