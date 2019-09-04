<?php
include "include/koneksi.php";

 //tampung data
  $idbarang = $_POST['idbarang'];
  $namabarang = $_POST['namabarang'];
  $idkategori = $_POST['idkategori'];


$baca = mysql_query("UPDATE barang SET 
						idbarang = '$idbarang',
        				namabarang = '$namabarang',
        				idkategori = '$idkategori'
						where idbarang = '$idbarang'");
	
if($baca){
    	?><script language="javascript">document.location.href="barang.php"; alert("Data barang Berhasil di Edit");</script><?php
}
else
{
    	?><script language="javascript">document.location.href="barang.php"; alert("Data Barang gagal di Edit");</script><?php
}



?>