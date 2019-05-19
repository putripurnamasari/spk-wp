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
$ps= $_POST['ps'];
$hasil=mysql_query("SELECT * FROM tb_event where NamaEvent='$ne' or Peserta='$ps'");
echo "<table border=7 width=1000>
	<tr><th>eventID</th><th>NamaEvent</th><th>TanggalEvent</th><th>HargaTiket</th><th>Peserta</th><th>Edit</th><th>Hapus</th>";

echo "<pre><font size=30 color=blue><B><br>		DAFTAR PESERTA EVENT</B></font></pre><br>";


$no=0;

While($data=mysql_fetch_array($hasil))
{ $no++;
echo "<tr><td align=center>$no</td><td><align=left>$data[NamaEvent]</td><td align=left>$data[TanggalEvent]</td><td align=left>$data[HargaTiket]</td>
<td align=left>$data[Peserta]</td></td><td align=left><a href='editevent.php?eventID=$data[eventID]'>Edit</a></td><td align=left><a href='delevent.php?eventID=$data[eventID]'>Hapus</a></td></tr>";
}
echo "</table><br><br>";
echo "<pre><a href='fmevent.php'><button type='submit'>Insert Data Baru</button></a>		<a href='fmcarievent.php'><button type='submit'>Cari Data</button></a></pre>";
?>