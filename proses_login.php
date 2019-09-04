<?php 	
include "include/koneksi.php";
$username =$_POST['username'];
$password =$_POST['password'];
$baca =mysql_query("SELECT * FROM admin WHERE username ='$username' AND	password='$password'");

$periksa =mysql_fetch_array($baca);
$username =$periksa['username'];
//periksa
if ($periksa > 0) //jika ditemukan
{
	session_start();
	$_SESSION['username']=$username;
	?>
	<script language="javascript">
	alert("SELAMAT DATANG");
	document.location.href="home.php";
	</script>
    <?php
}
else
{
	?>
	<script language="javascript">
	alert("LOGIN ANDA DI TOLAK");
	document.location.href="index.php";
	</script>
    <?php
}

?>