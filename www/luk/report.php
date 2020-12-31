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

$colname_DetailRS1 = "-1";
if (isset($_GET['recordID'])) {
  $colname_DetailRS1 = $_GET['recordID'];
}
mysql_select_db($database_luk, $luk);
$query_DetailRS1 = sprintf("SELECT datamurid.nokp, datamurid.nama, datamurid.tingkatan, datamurid.kelas, daftarrumahsukan.rumahsukan, daftarrumahsukan.jawatan, daftarrumahsukan.tarikhdaftar FROM datamurid INNER JOIN daftarrumahsukan ON datamurid.nokp=daftarrumahsukan.nokp WHERE datamurid.nokp AND daftarrumahsukan.nokp = %s ", GetSQLValueString($colname_DetailRS1, "text"));
$DetailRS1 = mysql_query($query_DetailRS1, $luk) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);
?><!DOCTYPE html>
<html lang="en" style="background-image:url(images/bg.jpg)">
<head>
<title>Report
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/js-flickr-gallery-1.24/js-flickr-gallery.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/css5.css">
<link rel="stylesheet" type="text/css" href="styles/semua.css">
<link rel="stylesheet" type="text/css" href="css/report.css"  />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<div class="super_container" style="background-image:url(images/bg.jpg)">
	
	<!-- Header -->
   
<header class="header d-flex flex-row justify-content-end align-items-center" style="background-image:url(images/bg.jpg)">

<!-- Logo -->
		<div class="logo_container mr-auto">
			<div class="logo">
				<a href=""><span>S</span>SMKTTJ<span>.</span></a>			</div>
  </div>

<!-- Main Navigation -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li><a href="lamanutama.php"><span>Laman utama</span></a></li>
                <li><a href="cariandaftar.php"><span>Kembali</span></a></li>
			
			</ul>
		</nav>

		
</header>
 


	<p align="center">&nbsp;</p>
	
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">LAPORAN DAN CETAKAN</p>
<p align="center">&nbsp;</p>
	<p align="left"><img src="upload/<?php echo $row_DetailRS1['nama']; ?>.jpg" width="250" height="250" border="5" /></p>
    
    <table border="2" align="center" cellpadding="10" cellspacing="2" bordercolor="#000000">
<tr>
              <td width="135" bgcolor="#666666"><div align="center" class="style1">NO KAD PENGENALAN</div></td>
              <td width="145" bgcolor="#CCCCCC"><div align="center" class="style2"><?php echo $row_DetailRS1['nokp']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center" class="style1">NAMA</div></td>
              <td bgcolor="#CCCCCC"><div align="center" class="style2"><?php echo $row_DetailRS1['nama']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center" class="style1">TINGKATAN</div></td>
              <td bgcolor="#CCCCCC"><div align="center" class="style2"><?php echo $row_DetailRS1['tingkatan']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center" class="style1">KELAS</div></td>
              <td bgcolor="#CCCCCC"><div align="center" class="style2"><?php echo $row_DetailRS1['kelas']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center" class="style1">RUMAH SUKAN</div></td>
              <td bgcolor="#CCCCCC"><div align="center" class="style2"><?php echo $row_DetailRS1['rumahsukan']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center" class="style1">JAWATAN</div></td>
              <td bgcolor="#CCCCCC"><div align="center" class="style2"><?php echo $row_DetailRS1['jawatan']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center" class="style1">TARIKH DAFTAR</div></td>
              <td bgcolor="#CCCCCC"><div align="center" class="style2"><?php echo $row_DetailRS1['tarikhdaftar']; ?> </div></td>
            </tr>
</table>
	  
    <form>
      <div align="">
        <input name="Button" type="button"  id="cetak" onClick="window.print()" value="CETAK" style="margin-left:100px">
      </div>
          </form>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>
      
        </p>
</body>

</html>
<?php
mysql_free_result($DetailRS1);
?>
