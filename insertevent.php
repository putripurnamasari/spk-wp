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
$ne = $_POST['ne'];
$te = $_POST['te'];
$ht = $_POST['ht'];
$ps = $_POST['ps'];

$sql="INSERT INTO tb_event (NamaEvent, TanggalEvent, HargaTiket, Peserta) VALUES ('$ne', '$te', '$ht', '$ps')";
$simpan=mysql_query($sql) or die ("Tidak Berhasil");
echo "<br><br>member $ps berhasil ditambahkan <br><br>";
echo "<a href='tampilevent.php'><button type='submit'>Tampilkan</button></a>";
?>