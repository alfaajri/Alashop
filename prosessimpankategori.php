<?php
include "include/koneksi.php";
  
  //tampung data
  $idkategori = $_POST['idkategori'];
  $namakategori = $_POST['namakategori'];
  $keterangan = $_POST['keterangan'];
  
  
  //periksa jika inputan masih kosong tampilkan pesan lengkapi data
  if($idkategori =="" or $namakategori =="" or $keterangan =="")
  {
    ?>
    <script language="javascript">document.location.href="tambahkategori.php"; 
    alert("Periksa Data Anda");</script>
    <?php
  }
  else
  {

    $query = mysql_query("INSERT INTO kategori(idkategori,namakategori,keterangan) VALUES('$idkategori','$namakategori','$keterangan')");


  if($query){
    ?><script language="javascript">document.location.href="kategori.php"; alert("Data Berhasil Disimpan");</script><?php
  }
  else
  {
    ?><script language="javascript">document.location.href="kategori.php"; alert("Data Tidak Berhasil Disimpan");</script><?php
  }
  
}


?>