<?php
if(!isset($_SESSION)){
session_start();
}
ini_set("display_errors",0);
include("koneksi.php");
if(!isset($_SESSION['username']))
{
?><script languange="javascript">document.location.href = "index.php";
alert("ANDA BELUM LOGIN !!!");
</script>
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/logo.png">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Alashop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Welcome To Alashop's Admin Page</a></h1>
			<div id="top-navigation">
				Welcome Administrator <span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="logout.php">Log out</a>			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="home.php"><span>Home</span></a></li>
			    <li><a href="kategori.php"><span>Kategori</span></a></li>	
			    <li><a href="barang.php"><span>Barang</span></a></li>
				<li><a href="searchbarang.php"><span>Search Barang</span></a></li>
			    <li><a href="guestbook.php"><span>Guest Book</span></a></li>
				
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav"></div>
		<!-- End Small Nav -->
		
		<!-- Message OK -->
		<!-- End Message OK -->
        <!-- Message Error -->
        <!-- End Message Error -->
        <br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Barang</h2>
					  <div class="right">
						  <label></label>
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="747" border="0">
                          <tr>
                            <td width="80"><div align="center">Kode Barang </div></td>
                            <td width="171"><div align="center">Nama Barang </div></td>
                            <td width="317"><div align="center">Kategori</div></td>
                            <td width="151"><div align="center">Action</div></td>
                          </tr>
						  <?php
		include "include/koneksi.php";
		$baca = mysql_query("SELECT barang.namabarang,barang.idbarang,kategori.namakategori FROM barang inner join kategori on kategori.idkategori=barang.idkategori");
		while($tampil = mysql_fetch_array($baca)){
		?>
                          <tr>
                            <td><?php echo $tampil['idbarang'];?></td>
                            <td><?php echo $tampil['namabarang'];?></td>
                            <td><?php echo $tampil['namakategori'];?></td>
                            <td><a href="editbarang.php?idbarang=<?php echo $tampil['idbarang'];?>"><img src="images/edit.gif" width="11" height="12" border="0" /></a> Edit | <a href="proseshapusbarang.php?idbarang=<?php echo $tampil['idbarang'];?>"><img src="images/delete.gif" width="12" height="13" border="0" /></a> Delete </td>
                          </tr>
						  <?php } ?>
                        </table>
						
					  <!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->
						
				  </div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Tambah Barang </h2>
					</div>
					<!-- End Box Head -->
					
					<form action="prosessimpanbarang.php" method="post">
					  <table width="750" border="0">
                        <tr>
                          <td width="134">Kode barang </td>
                          <td width="606"><label>
                            <input name="idbarang" type="text" id="idbarang" size="50" />
                          </label></td>
                        </tr>
                        <tr>
                          <td>Nama barang </td>
                          <td><label>
                            <input name="namabarang" type="text" id="namabarang" size="50" />
                          </label></td>
                        </tr>
                        <tr>
                          <td>Nama Kategori </td>
                          <td><label>
                            <select name="idkategori">
			<?php
		include "include/koneksi.php";
		$baca = mysql_query("SELECT * FROM kategori");
		while($tampil = mysql_fetch_array($baca)){
		?>
        <option value='<?php echo $tampil['idkategori'];?>'><?php echo $tampil['namakategori'];?></option>
        <?php } ?>
            </select>
                          </label></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><input type="submit" name="Submit" value="Simpan" />
                            <label>
                            <input type="submit" name="Submit2" value="Batal" />
                          </label></td>
                        </tr>
                      </table>
						
                  </form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
				  <div class="box-head">
				    <h2>Foto</h2>
					</div>
				  <div class="box-content">
					  <p class="select-all">
					    <label></label>
					  Present</p>
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2015 - Alashop </span>
		<span class="right">
			Design by Alashop Designer
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>