<?php
include ("koneksi.php");
$database = "r6c";

	$selek_db = mysqli_select_db($koneksi, $database);
if (!$selek_db) {
die ("Database tidak terseleksi");
}
?>