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
				<!-- End Box -->
                <!-- Box -->
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Edit Kategori </h2>
					</div>
					<!-- End Box Head -->
					
					<form action="proseseditbarang.php" method="post">
					  <table width="607" border="0">
	  <?php
        include "include/koneksi.php";
		$idbarang = $_GET['idbarang'];
$query = mysql_query("SELECT * FROM barang WHERE idbarang ='$idbarang'");
$tampil = mysql_fetch_array($query);?>
	    <tr>
          <td>Id Barang </td>
          <td><label>
            <input name="id" type="text" size="50" value="<?php echo $tampil['idbarang'] ;?>" disabled="disabled"/>
			<input name="idbarang" type="hidden" size="50" value="<?php echo $tampil['idbarang'] ;?>"/>
          </label></td>
        </tr>
        <tr>
          <td>Nama Barang </td>
          <td><label>
            <input name="namabarang" type="text" size="50" value="<?php echo $tampil['namabarang'] ;?>"/>
          </label></td>
        </tr>
		<tr>
          <td width="126">Nama Kategori</td>
          <td width="471">
            <select name="idkategori" value="<?php echo $tampil['namakategori'] ;?>">
			<?php
		$baca = mysql_query("SELECT * FROM kategori");
		while($tampil = mysql_fetch_array($baca)){
		?>
        <option value='<?php echo $tampil['idkategori'];?>'><?php echo $tampil['namakategori'];?></option>
        <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Edit" />
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
					
					<div class="box-content"><!-- Sort -->
                      <!-- End Sort --> Present
</div>
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
