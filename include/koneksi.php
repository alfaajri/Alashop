<?php

$host = "localhost";
$user = "root";
$pass = "";
$namedb = "alashop";

$koneksi = mysql_connect($host, $user, $pass);
mysql_select_db($namedb);
$date = date("d-m-y");


?>