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
$amt= $_POST['amt'];
$hasil=mysql_query("SELECT * FROM tb_anggota where Nama='$nm' or Alamat='$amt'");
echo "<table border=7 width=1000>
	<tr><th>anggotaID</th><th>Nama</th><th>Tanggal Lahir</th><th>No.HP</th><th>Alamat</th><th>Edit</th><th>Hapus</th>";

echo "<pre><font size=30 color=blue><B><br>		DAFTAR ANGGOTA</B></font></pre><br>";


$no=0;

While($data=mysql_fetch_array($hasil))
{ $no++;
echo "<tr><td align=center>$no</td><td><align=left>$data[Nama]</td><td align=left>$data[TanggalLahir]</td><td align=left>$data[NoHP]</td>
<td align=left>$data[Alamat]</td></td><td align=left><a href='edittb.php?anggotaID=$data[anggotaID]'>Edit</a></td><td align=left><a href='deletetb.php?anggotaID=$data[anggotaID]'>Hapus</a></td></tr>";
}
echo "</table><br><br>";
echo "<pre><a href='fmtb.php'><button type='submit'>Insert Data Baru</button></a>		<a href='fmcaritb.php'><button type='submit'>Cari Data</button></a></pre>";
?>