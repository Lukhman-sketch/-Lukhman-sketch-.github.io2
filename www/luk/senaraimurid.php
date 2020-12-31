<?php require_once('Connections/luk.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_luk, $luk);
$query_Recordset1 = "SELECT * FROM datamurid";
$Recordset1 = mysql_query($query_Recordset1, $luk) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>senarai murid</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="images/mm_travel2.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/js-flickr-gallery-1.24/js-flickr-gallery.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/css5.css">
<link rel="stylesheet" type="text/css" href="styles/semua.css">
<link rel="stylesheet" type="text/css" href="css/senaraimurid.css"  />
<style type="text/css">
<!--
.style5 {
	color: #3366CC;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#C0DFFD">'
<?php
if (isset($_POST['btn_uploadpic']))
echo'<script type="text/javascript">alert("gambar anda telah dimuat naik. Terima kasih"); </script>';
{
	$id=$_POST['hf_nama'];
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$id.".jpg");
	
}

?>

<!-- Header -->
<div class="super_container" style="background-image:url(images/bg.jpg)">
<div style="text-align:center;padding:1em 0; margin-top:60px"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FKuala_Lumpur" width="100%" height="115" frameborder="0" seamless></iframe> </div>
<header class="header d-flex flex-row justify-content-end align-items-center" style="background-image:url(images/bg.jpg); opacity:5;">
<div class="logo_container mr-auto">
			<div class="logo">
				<a href="#"><span>S</span>SMKTTJ<span>.</span></a>			</div>
		</div>
        
<!-- Main Navigation -->
		<nav class="main_nav justify-self-end" >
			<ul class="nav_items">
				<li><a href="lamanutama.php"><span>Laman utama</span></a></li>
				<li class="active"><a href="senaraimurid.php"><span>senarai murid</span></a></li>
				<li><a href="cariandaftar.php"><span>carian daftar</span></a></li>
				<li><a href="daftarmurid.php"><span>daftar rumah sukan</span></a></li>
			</ul>
		</nav>

	

</header>

        <tr>
          <td class="bodyText"><table width="1173" height="169" border="1" align="center" >
          <tr bgcolor="#999999">
                <td width="122"><div align="center"><span class="style5">NO KAD PENGENALAN</span></div></td>
                <td width="128"><div align="center"><span class="style5">NAMA</span></div></td>
                <td width="149"><div align="center"><span class="style5">TINGKATAN</span></div></td>
                <td width="125"><div align="center"><span class="style5">KELAS</span></div></td>
                <td width="126"><div align="center"><span class="style5">EMAIL</span></div></td>
                <td width="66"><div align="center" class="style5">EDIT</div></td>
            <td width="66"><div align="center" class="style5">DELETE</div></td>
                <td width="255"><div align="center" class="style5">
                  <div align="center">UPLOAD</div>
                </div></td>
            <td width="85"><div align="center" class="style5">GAMBAR</div></td>
            </tr>
              <?php do { ?>
                <tr bgcolor="#CCCCCC">
                  <td><div align="center"><a href="detailmurid.php?recordID=<?php echo $row_Recordset1['nokp']; ?>"> <?php echo $row_Recordset1['nokp']; ?>&nbsp; </a> </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['nama']; ?>&nbsp; </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['tingkatan']; ?>&nbsp; </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['kelas']; ?>&nbsp; </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['email']; ?>&nbsp; </div></td>
                  <td><div align="center"><a href="editmurid.php?recordID=<?php echo $row_Recordset1['nokp']; ?>"><img src="images/if_pencil_1055013.png" style="width:50px; height:50px;" /></a></div></td>
                  <td><div align="center"><a onclick="return confirm('Anda Pasti Ingin Membuang Pelajar Ini Daripada Senarai ?')" href="deletemurid.php?recordID=<?php echo $row_Recordset1['nokp']; ?>"><img src="images/47-512.png" style="width:50px; height:50px;" /></a></div></td>
                  <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <label>
                    <div align="center">
                      <input type="file" name="file" id="file" />
                      <input type="submit" name="btn_uploadpic" id="btn_uploadpic" value="Upload Gambar" />
                    </div>
                    </label>

                    <div align="center">
                      <input name="hf_nama" type="hidden" id="hf_nama" value="<?php echo $row_Recordset1['nama']; ?>" />
                    </div>
                  </form></td>
                  <td><div align="center"><img src="upload/<?php echo $row_Recordset1['nama']; ?>.jpg" width="114" height="110" /></div></td>
                </tr>
                <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
            </table>
            <br />
            <?php echo $totalRows_Recordset1 ?> Records Total
          </p></td>
		</tr>
      </table>	  </td>
	<td width="257">&nbsp;</td>
  </tr>

 <tr>
    <td width="17">&nbsp;</td>
    <td width="187">&nbsp;</td>
    <td width="627">&nbsp;</td>
	<td width="257">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
