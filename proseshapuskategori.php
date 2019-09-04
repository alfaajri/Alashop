<?php
include "include/koneksi.php";
  
  //tampung data
  $idkategori = $_GET['idkategori'];
  $query = mysql_query("DELETE FROM kategori where idkategori='$idkategori'");


  if($query){
    ?><script language="javascript">document.location.href="kategori.php"; alert("Data Berhasil Dihapus");</script><?php
  }
  else
  {
    ?><script language="javascript">document.location.href="kategori.php"; alert("Data Tidak Berhasil Dihapus");</script><?php
  }
  


?>