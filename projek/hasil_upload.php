<?php
 

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];


$folder = "file/$nama_file";
$tgl_upload = date("Ymd"); 


if (move_uploaded_file($lokasi_file,"$folder")) {
  echo "Nama File : <b> $nama_file</b> sukses di upload";

  $konek= mysqli_connect("localhost","root","","r6c");

  $query= "insert into upload (nama_file,deskripsi,tgl_upload)
          VALUES('$nama_file','$_POST[deskripsi]','$tgl_upload')";
          mysqli_query($konek,$query);

 }
 else {
  echo "File gagal di upload";
 }
?>