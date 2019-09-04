<?php
include "include/koneksi.php";
  
  //tampung data
  $idkategori = $_POST['idkategori'];
  $idbarang = $_POST['idbarang'];
  $namabarang = $_POST['namabarang'];
  
  
  //periksa jika inputan masih kosong tampilkan pesan lengkapi data
  if($idkategori =="" or $idbarang =="" or $namabarang =="")
  {
    ?>
    <script language="javascript">document.location.href="barang.php"; 
    alert("Periksa Data Anda");</script>
    <?php
  }
  else
  {

    $query = mysql_query("INSERT INTO barang(idkategori,idbarang,namabarang) VALUES('$idkategori','$idbarang','$namabarang')");


  if($query){
    ?><script language="javascript">document.location.href="barang.php"; alert("Data Berhasil Disimpan");</script><?php
  }
  else
  {
    ?><script language="javascript">document.location.href="barang.php"; alert("Data Tidak Berhasil Disimpan");</script><?php
  }
  
}


?>