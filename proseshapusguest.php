<?php
include "include/koneksi.php";
  
  //tampung data
  $nomorurut = $_GET['nomorurut'];
  $query = mysql_query("DELETE FROM guestbook where nomorurut='$nomorurut'");


  if($query){
    ?><script language="javascript">document.location.href="guestbook.php"; alert("Data Berhasil Dihapus");</script><?php
  }
  else
  {
    ?><script language="javascript">document.location.href="guestbook.php"; alert("Data Tidak Berhasil Dihapus");</script><?php
  }
  


?>