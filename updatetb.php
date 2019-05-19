<body>
<head>
<style type="text/css">
body{
	background-image: url(dora3.png); background-repeat: no-repeat;
}
</style>
</head>

<?php
include "koneksitb.php";
$dbname="tb_dbase";
mysql_select_db($dbname);
$update="UPDATE tb_anggota SET
Nama='$_POST[nama]', TanggalLahir='$_POST[tanggallahir]', NoHP='$_POST[nohp]',
 Alamat='$_POST[alamat]' WHERE anggotaID='$_POST[ID]'";
$hasil=mysql_query($update);

if ($hasil)
{
	echo "Data Anggota berhasil di update <br>";
echo "<a href='tampiltb.php'><button type='submit'>List</button></a>";
}

else 
{
	echo "Data gagal di update";	
}
?>