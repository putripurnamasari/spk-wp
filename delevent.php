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
$eventID = $_GET['eventID'];
mysql_select_db($dbname);

$perintah="DELETE FROM tb_event WHERE eventID='$eventID'";
$hasil=mysql_query($perintah);

if ($hasil)
{
	echo "Data berhasil dihapus <br>";
	echo "<a href='tampilevent.php'><button type='submit'>Back</button></a>";
}

else 
{
	echo "Komentar gagal dihapus. kemungkinan terjadi kegagalan koneksi ke database MySQL.";
}
?>