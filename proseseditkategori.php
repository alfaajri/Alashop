<?php
include "include/koneksi.php";

 //tampung data
  $idkategori = $_POST['idkategori'];
  $namakategori = $_POST['namakategori'];
  $keterangan = $_POST['keterangan'];


$baca = mysql_query("UPDATE kategori SET 
						idkategori = '$idkategori',
        				namakategori = '$namakategori',
        				keterangan = '$keterangan'
						where idkategori = '$idkategori'");
	
if($baca){
    	?><script language="javascript">document.location.href="kategori.php"; alert("Data Kategori Berhasil di Edit");</script><?php
}
else
{
    	?><script language="javascript">document.location.href="kategori.php"; alert("Data Kategori gagal di Edit");</script><?php
}



?>