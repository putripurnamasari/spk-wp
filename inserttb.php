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
$nm = $_POST['nm'];
$tgl = $_POST['tgl'];
$hp = $_POST['hp'];
$amt= $_POST['amt'];

$sql="INSERT INTO tb_anggota (Nama, TanggalLahir, NoHP, Alamat) VALUES ('$nm', '$tgl', '$hp', '$amt')";
$simpan=mysql_query($sql) or die ("Tidak Berhasil");
echo "<br><br>member $nm berhasil ditambahkan <br><br>";
echo "<a href='tampiltb.php'><button type='submit'>Tampilkan</button></a>";
?>