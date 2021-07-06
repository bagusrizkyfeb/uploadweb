<html>
<head>
<title> Tambah Data</title>
<link rel="stylesheet" type="text/css" href="tambah.css">
</head>
<body>
<?php if (empty($_GET['user'])){?> 
<form action="tambah.php" method="GET"> 

    <div class="judul">
       <center> <h2> TAMBAHKAN DATA </h2>
       <hr>
		</div>

<center><table class="table1">
<table> 
<tr> 
<td>User name</td> 
<td><input name="user" id="user" type="text" ></td> 
<tr> 
<td>Password</td> 
<td><input name="password" id="password" type="text"></td> 
</tr> 
<tr> 
<td>Nama </td> 
<td><input name="nama" id="nama" type="text" ></td> 
</tr> 
<tr> 
<td>NPM </td> 
<td><input name="NPM" id="NPM" type="text" ></td> 
</tr> 
<tr> 
<td>Kelas</td> 
<td><input name="kelas" id="kelas" type="text" ></td> 
</tr> 
<tr> 
<td>Prodi</td> 
<td><input name="prodi" id="prodi" type="prodi"></td> 
</tr> 
</div>


<tr> 
 <?php } 
 else{?> 
 <div class="judul">
       <center> <h2> EDIT DATA </h2>
       <hr>
		</div>
<form action="ubah.php" method="GET"> 
<input name="user" id="user" type="hidden" value="<?php echo $_GET['user'];?>" > 

<center><table class="table2">
<table> 
<tr> 
<td>Password</td> 
<td><input name="password" id="password" type="text" value="<?php echo $_GET['password'];?>" ></td> 
</tr> 
<tr> 
<td>Nama</td> 
<td><input name="nama" id="nama" type="text" value="<?php echo $_GET['nama'];?>" >
</td> 
</tr> 
<tr> 
<td>NPM</td> 
<td><input name="NPM" id="NPM" type="text" value="<?php echo $_GET['NPM'];?>" >
</td> 
</tr> 
<tr> 
<td>Kelas</td> 
<td><input name="kelas" id="kelas" type="text" value="<?php echo $_GET['kelas'];?>" ></td> 
</tr> 
<tr> 
<td>Prodi</td> 
<td><input name="prodi" id="prodi" type="text" value="<?php echo $_GET['prodi'];?>" ></td> 
</tr> 
</div>

<div class="tombol">
<tr> 
 <?php }?> 
<td align="center" colspan="2"> 
 <?php if (empty($_GET['user'])){?>  
<input type="submit" class="tombol" name="Submit" value="Tambah"> 
<div>
 <?php } 
 else{?> 
 <div class="tombo2">
<input type="submit" name="Submit" value="Simpan"> 
 <?php } ?>  

 </td> 
</tr> 

	
		</table> 
		</form> 
				</body>
				</html>