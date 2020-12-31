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
$query_DetailRS1 = sprintf("SELECT * FROM datamurid WHERE nokp = %s", GetSQLValueString($colname_DetailRS1, "text"));
$DetailRS1 = mysql_query($query_DetailRS1, $luk) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);
?><!DOCTYPE html>
<html lang="en" style="background-image:url(images/bg.jpg)">
<head>
<title>daftar murid
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Zeta Template Project - Contact">
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
<style type="text/css">
<!--
.style8 {color: #FFFFFF}
.style12 {color: #FFFFFF; font-weight: bold; font-style: italic; }
-->
</style>
</head>

<body>
<div class="super_container" style="background-image:url(images/bg.jpg)">
<div class="super_container">
	
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
				<li class="active"><a href="senaraimurid.php"><span>senarai murid</span></a></li>
				<li><a href="cariandaftar.php"><span>carian daftar</span></a></li>
				<li><a href="daftarmurid.php"><span>daftar rumah sukan</span></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<span class="hamburger_text">Menu</span>
			<span class="hamburger_icon"></span>		</div>

</header>

	<!-- Menu -->

	<div class="fs_menu_overlay"></div>
<div class="fs_menu_container">
		<div class="fs_menu_shapes"><img src="images/menu_shapes.png" alt=""></div>
</div>

	
	<!-- DaFtar -->
    <tr>
          <td class="bodyText"><p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <table border="1" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <td width="77" bgcolor="#000000"><span class="style12">nokp</span></td>
              <td width="164" bgcolor="#000000"><span class="style8"><strong><?php echo $row_DetailRS1['nokp']; ?> </strong></span></td>
            </tr>
            <tr>
              <td bgcolor="#000000"><span class="style12">nama</span></td>
              <td bgcolor="#000000"><span class="style8"><strong><?php echo $row_DetailRS1['nama']; ?> </strong></span></td>
            </tr>
            <tr>
              <td bgcolor="#000000"><span class="style12">tingkatan</span></td>
              <td bgcolor="#000000"><span class="style8"><strong><?php echo $row_DetailRS1['tingkatan']; ?> </strong></span></td>
            </tr>
            <tr>
              <td bgcolor="#000000"><span class="style12">kelas</span></td>
              <td bgcolor="#000000"><span class="style8"><strong><?php echo $row_DetailRS1['kelas']; ?> </strong></span></td>
            </tr>
            <tr>
              <td bgcolor="#000000"><span class="style12">email</span></td>
              <td bgcolor="#000000"><span class="style8"><strong><?php echo $row_DetailRS1['email']; ?> </strong></span></td>
            </tr>
          </table>          
            <p>&nbsp;</p>

		  </td>
		</tr>
      </table>	  </td>
	<td width="100%">&nbsp;</td>
  </tr>
   
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
</body>

</html>
<?php
mysql_free_result($DetailRS1);
?>