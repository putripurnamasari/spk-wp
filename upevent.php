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
$dbname="tb_event";
mysql_select_db($dbname);
$update="UPDATE tb_event SET
NamaEvent='$_POST[namaevent]', TanggalEvent='$_POST[tanggalevent]', HargaTiket='$_POST[hargatiket]',
 Peserta='$_POST[peserta]' WHERE eventID='$_POST[ID]'";
$hasil=mysql_query($update);

if ($hasil)
{
	echo "Data Peserta Event berhasil di update <br>";
echo "<a href='tampilevent.php'><button type='submit'>List</button></a>";
}

else 
{
	echo "Data gagal di update";	
}
?>