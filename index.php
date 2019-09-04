<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/logo.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<title>Admin</title>
<style type="text/css">
<!--
body {
	background-image: url();
	background-color: #CC9966;
}
.style1 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style></head>

<body>
<div align="center"</div>
<table width="434" border="0" align="center">
  <tr>
    <td height="62" colspan="2" bgcolor="#CC3300"><div align="center"><span class="style1">LOGIN FORM TO ALASHOP'S ADMIN PAGE </span></div></td>
  </tr>
  <tr> <div class="box-head">
    <td height="132" colspan="2" bgcolor="#FFCC99" align="center"><label></label>      <form id="form1" name="form1" method="post" action="proses_login.php">
      <table width="466" height="103" border="0" align="center">
        <tr>
          <td width="124" height="29">User name </td>
          <td width="332"><label>
            <input name="username" type="text" size="40" />
          </label></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><label>
            <input name="password" type="password" size="40" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Masuk" />
          </label></td>
        </tr>
      </table>
        </form>      <label></label></td>
  </tr>
</table>
<br />
<form id="form2" name="form2" method="post" action="prosessimpanguest.php">
  <table width="466" height="197" border="0" align="center">
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><marquee>
        Untuk mendaftar sebagai pengunjung
      </marquee></td>
    </tr>
    <tr>
      <td width="123">Nama</td>
      <td width="333"><label>
        <input name="nama" type="text" size="40" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><label>
        <input name="alamat" type="text" size="40" />
      </label></td>
    </tr>
    <tr>
      <td>No Hp </td>
      <td><label>
        <input name="nomorhp" type="text" size="40" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input name="email" type="text" size="40" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit2" value="Daftar" />
        <input type="submit" name="Submit3" value="Batal"  />
      </label></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
