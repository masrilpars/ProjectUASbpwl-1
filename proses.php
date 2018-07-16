<?php
include "koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];
	$login=mysql_query("select * from pelanggan where Nama_Pelanggan='$user' and Password='$pass'");
	
$hasil=mysql_num_rows($login);
$r=mysql_fetch_array($login);
if ($hasil > 0)

{
session_start();
	$_SESSION[ID] =$r[ID_Pelanggan];
	$_SESSION[nama] =$r[Nama_Pelanggan];
	$_SESSION[password] =$r[Password];
	$_SESSION[status] =$r[Status];
	
header ('location:index.php');
} else { echo "Username dan Password Anda Salah"; }

?>