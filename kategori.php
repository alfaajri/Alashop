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
				Welcome Administrator</a><span> |</span>
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
						<h2 class="left">Kategori</h2>
						 <form id="form1" name="form1" method="post" action="">
						<div class="right">
							<label></label>
						</div>
						</form>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
					  <form id="form1" name="form1" method="post" action="">
					    <table width="747" border="0">
                          <tr>
                            <td width="84"><div align="center">Id kategori </div></td>
                            <td width="171"><div align="center">Nama kategori </div></td>
                            <td width="320"><div align="center">Keterangan</div></td>
                            <td width="154"><div align="center">Action</div></td>
                          </tr>
						  <?php
		include "include/koneksi.php";
		$baca = mysql_query("SELECT * FROM kategori");
		while($tampil = mysql_fetch_array($baca)){
		?>
                          <tr>
                            <td><?php echo $tampil['idkategori'];?></td>
                            <td><?php echo $tampil['namakategori'];?></td>
                            <td><?php echo $tampil['keterangan'];?></td>
                            <td><a href="editkategori.php?idkategori=<?php echo $tampil['idkategori'];?>"><img src="images/edit.gif" width="11" height="12" border="0"/></a> Edit | <a href="proseshapuskategori.php?idkategori=<?php echo $tampil['idkategori'];?>"><img src="images/delete.gif" width="12" height="13" border="0" /></a> Delete </td>
                          </tr>
						  <?php } ?>
                        </table>
                        
					  </form>
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
						<h2>Tambah Kategori </h2>
					</div>
					<!-- End Box Head -->
					
					<form action="prosessimpankategori.php" method="post">
					  <table width="750" border="0">
                        <tr>
                          <td width="135">Id kategori </td>
                          <td width="605"><label>
                            <input name="idkategori" type="text" id="idkategori" size="50" />
                          </label></td>
                        </tr>
                        <tr>
                          <td>Nama kategori </td>
                          <td><label>
                            <input name="namakategori" type="text" id="namakategori" size="50" />
                          </label></td>
                        </tr>
                        <tr>
                          <td>Keterangan</td>
                          <td><label>
                            <input name="keterangan" type="text" id="keterangan" size="50" />
                          </label></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="Submit" value="Simpan" />
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
			<!-- End Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Foto</h2>
					</div>
					<!-- End Box Head-->
					
				  <div class="box-content">Present</div>
				</div>
				<!-- End Box -->
			</div>
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
