<?php
include "include/koneksi.php";
  
  //tampung data
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $nomorhp = $_POST['nomorhp'];
  $email = $_POST['email'];
  
  //periksa jika inputan masih kosong tampilkan pesan lengkapi data
  if($nama =="" or $alamat =="" or $nomorhp =="")
  {
    ?>
    <script language="javascript">document.location.href="index.php"; 
    alert("Periksa Data Anda");</script>
    <?php
  }
  else
  {

   $query=mysql_query("INSERT INTO guestbook(nomorurut,nama,alamat,nomorhp,email) VALUES(nomorurut,'$nama','$alamat','$nomorhp','$email')");

  if($query){
    ?><script language="javascript">document.location.href="index.php"; alert("Data Berhasil Disimpan");</script><?php
  }
  else
  {
    ?><script language="javascript">document.location.href="index.php"; alert("Data Tidak Berhasil Disimpan");</script><?php
  }
  
}


?>