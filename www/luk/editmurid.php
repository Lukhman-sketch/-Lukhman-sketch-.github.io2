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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE datamurid SET nama=%s, tingkatan=%s, kelas=%s, email=%s WHERE nokp=%s",
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['tingkatan'], "text"),
                       GetSQLValueString($_POST['kelas'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['nokp'], "text"));

  mysql_select_db($database_luk, $luk);
  $Result1 = mysql_query($updateSQL, $luk) or die(mysql_error());

  $updateGoTo = "senaraimurid.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['recordID'])) {
  $colname_Recordset1 = $_GET['recordID'];
}
mysql_select_db($database_luk, $luk);
$query_Recordset1 = sprintf("SELECT * FROM datamurid WHERE nokp = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $luk) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
<link rel="stylesheet" type="text/css" href="css/editmurid.css">
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
}
.style2 {color: #000000}
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

	
	<!-- EDit -->
      <form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <table width="432" height="329" align="center">
                <tr valign="baseline">
                  <td width="72" align="right" nowrap="nowrap"><span class="style1">Nokp:</span></td>
                  <td width="348"><strong style="padding-left:20px"><?php echo $row_Recordset1['nokp']; ?></strong></td>
                </tr>
                <tr valign="baseline">
                  <td height="55" align="right" nowrap="nowrap"><span class="style1">Nama:</span></td>
                  <td style="padding-left:10px"><input type="text" name="nama" id="nama" value="<?php echo htmlentities($row_Recordset1['nama'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                </tr>
                <tr valign="baseline">
                  <td height="55" align="right" nowrap="nowrap"><span class="style1">Tingkatan:</span></td>
                  <td style="padding-left:10px"><input type="text" name="tingkatan" id="tingkatan" value="<?php echo htmlentities($row_Recordset1['tingkatan'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                </tr>
                <tr valign="baseline">
                  <td height="55" align="right" nowrap="nowrap"><span class="style1">Kelas:</span></td>
                  <td style="padding-left:10px"><input type="text" name="kelas" id="kelas" value="<?php echo htmlentities($row_Recordset1['kelas'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                </tr>
                <tr valign="baseline">
                  <td height="55" align="right" nowrap="nowrap"><span class="style1">Email:</span></td>
                  <td style="padding-left:10px"><input type="text" name="email" id="email" value="<?php echo htmlentities($row_Recordset1['email'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap="nowrap" align="right"><span class="style2"></span></td>
                  <td style="padding-left:10px"><input type="submit" value="Kemas Kini" onClick="return confirm('Kemas Kini ?')" id="update" /></td>
                </tr>
        </table>
              <input type="hidden" name="MM_update" value="form1" />
              <input type="hidden" name="nokp" value="<?php echo $row_Recordset1['nokp']; ?>" />
</form>
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
mysql_free_result($Recordset1);
?>