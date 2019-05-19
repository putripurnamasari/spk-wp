<?php 
session_start();
include 'koneksitb.php';
$un=$_POST['un'];
$pw=$_POST['pw'];
$query=mysql_query("select * from tb_admin where UserName='$un' and Password='$pw'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['un']=$un;
	header("location:fmtb.php");
}else{
	echo "LogIn gagal";
	// mysql_error();
}
// echo $pas;
 ?>