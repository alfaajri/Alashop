<?php
include "include/koneksi.php";
  
  //tampung data
  $idbarang = $_GET['idbarang'];
  $query = mysql_query("DELETE FROM barang where idbarang='$idbarang'");


  if($query){
    ?><script language="javascript">document.location.href="barang.php"; alert("Data Berhasil Dihapus");</script><?php
  }
  else
  {
    ?><script language="javascript">document.location.href="barang.php"; alert("Data Tidak Berhasil Dihapus");</script><?php
  }
  


?>