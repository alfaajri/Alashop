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
<?php
		include "include/koneksi.php";
		$nama= $_POST ['search']; //get the search value from form
		$result = mysql_query("SELECT barang.namabarang,barang.idbarang,kategori.namakategori FROM barang inner join kategori on kategori.idkategori=barang.idkategori where barang.namabarang like '%$nama%'");
		?>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Welcome To Alashop's Admin Page</a></h1>
			<div id="top-navigation">
				Welcome Administrator<span> |</span>
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
						Search Barang
				      <div class="right">
						  <label></label>
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="747" border="0">
                          <tr>
                            <td width="155"><div align="center">Id Barang </div></td>
                            <td width="333"><div align="center">Nama Barang </div></td>
							<td width="245"><div align="center">Nama Kategori </div></td>
                          </tr>
						  <?php
		while ($data = mysql_fetch_array($result)){
		?>
                          <tr>
                            <td><?php echo $data['idbarang'];?></td>
                            <td><?php echo $data['namabarang'];?></td>
							<td><?php echo $data['namakategori'];?></td>
                          </tr>
						  <?php } ?>
                        </table>
						
					  <!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="searchbarang.php">Kembali</a><a href="#"></a>
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>							</div>
						</div>
						<!-- End Pagging -->
						
				  </div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->
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
					<!-- End Box Head-->
					
					<div class="box-content">
					  <p class="select-all">
				      <label></label>Present
						<!-- End Sort -->
</p>
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