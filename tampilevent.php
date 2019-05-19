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
$hasil=mysql_query("select * from tb_event order by NamaEvent asc");
echo "<table border=7 width=1000>
	<tr><th>eventID</th><th>NamaEvent</th><th>TanggalEvent</th><th>HargaEvent</th><th>Peserta</th><th>Edit</th><th>Hapus</th>";

echo "<pre><font size=30 color=blue><B><br>		DAFTAR PESERTA EVENT</B></font></pre><br>";

$no=0;

While($data=mysql_fetch_array($hasil))
{ $no++;
echo "<tr><td align=center>$no</td><td><align=left>$data[NamaEvent]</td><td align=left>$data[TanggalEvent]</td><td align=left>$data[HargaTiket]</td>
<td align=left>$data[Peserta]</td><td align=left><a href='editevent.php?eventID=$data[eventID]'>Edit</a></td><td align=left><a href='delevent.php?eventID=$data[eventID]'>Hapus</a></td></tr>";
}


echo "</table><br><br>";
$hasil=mysql_query("select SUM(HargaTiket) as total from tb_event");
While($data=mysql_fetch_array($hasil))
	{
print "<pre><br><font size=5 color=blue>Total Harga Event Seluruhnya : Rp.$data[total]</font></pre><br>";
    }
echo "<pre><a href='fmevent.php'><button type='submit'>Insert Data Baru</button></a>

<a href='fmcarievent.php'><button type='submit'>Cari Data</button></a></pre><br><br>";
echo "<hr width=100% size=3 color=grey align=left>";
?>
</body>