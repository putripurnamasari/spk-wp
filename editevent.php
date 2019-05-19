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
$perintah="SELECT * FROM tb_event WHERE eventID = '$eventID'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
?>

<h1> Form Biodata Peserta Event</h1>
<form name=peserta method=post action="upevent.php">
	<input type="hidden" name="ID" value="<?php echo "$row[0]" ?>">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="18%">Nama Event</td>
		<td width="2%">:</td>
		<td width="80%"><input type="text" 
		name="namaevent" size="100"
		value="<?php echo "$row[1]" ?>"</td>
	</tr>
	
	<tr>
		<td>Tanggal Event</td>
		<td>:</td>
		<td width="80%"><input type="text" 
		name="tanggalevent" size="100"
		value="<?php echo "$row[2]" ?>"</td>
	</tr>
	
	<tr valign="top">
		<td>Harga Tiket</td>
		<td>:</td>
		<td width="80%"><input type="text" 
		name="hargatiket" size="100"
		value="<?php echo "$row[3]" ?>"</td>
	</tr>

	<tr valign="top">
		<td>Peserta</td>
		<td>:</td>
		<td width="80%"><input type="text" 
		name="peserta" size="100"
		value="<?php echo "$row[4]" ?>"</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	
	<td>
	<input type="submit" name="masuk" value="Update">
	<input type="submit" name="reset" value="Cancel">
	</td>
	
	</tr>
	</table>
	</form>