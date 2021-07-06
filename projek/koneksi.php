<?php

$host = "localhost";
$user = "root";
$pass = "";

	$koneksi = mysqli_connect($host, $user, $pass);

if (!$koneksi) {
echo "Koneksi ke database gagal";
};
?>