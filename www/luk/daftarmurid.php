<?php require_once('Connections/luk.php'); ?><?php require_once('Connections/luk.php');  
/*
 nama projek ialah Pendaftaran rumah sukan SMKTTJ
 server:"localhost"
 database name:"amir"
 server username:"root"
*/ ?>
<?php
//* ini adalah aturcara daftar murid from table datamurid



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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO datamurid (nokp, nama, tingkatan, kelas, email) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nokp'], "text"),
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['tingkatan'], "text"),
                       GetSQLValueString($_POST['kelas'], "text"),
                       GetSQLValueString($_POST['email'], "text"));

  mysql_select_db($database_luk, $luk);
  $Result1 = mysql_query($insertSQL, $luk) or die(mysql_error());

  $insertGoTo = "berjaya2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO datamurid (nokp, nama, tingkatan, kelas, email) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nokp'], "text"),
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['tingkatan'], "text"),
                       GetSQLValueString($_POST['kelas'], "text"),
                       GetSQLValueString($_POST['email'], "text"));

  mysql_select_db($database_amir, $amir);
  $Result1 = mysql_query($insertSQL, $amir) or die(mysql_error());

  $insertGoTo = "berjaya2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}//*select from table data murid
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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/daftarmurid.css">
</head>

<body>
<div class="super_container" style="background-image:url(images/bg.jpg)">

	
	<!-- Header -->
<div style="text-align:center;padding:1em 0; margin-top:50px"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1734810"><span style="color:gray;">Current local time in</span><br />Seremban, Malaysia</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FKuala_Lumpur" width="100%" height="115" frameborder="0" seamless></iframe> </div>
<header class="header d-flex flex-row justify-content-end align-items-center" style="background-image:url(images/bg.jpg)">

		<!-- Logo -->
		<div class="logo_container mr-auto">
			<div class="logo">
				<a href="#"><span>S</span>SMKTTJ<span>.</span></a>			</div>
		</div>

<!-- Main Navigation -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li><a href="lamanutama.php"><span>Laman utama</span></a></li>
				<li><a href="senaraimurid.php"><span>senarai murid</span></a></li>
				<li><a href="cariandaftar.php"><span>carian daftar</span></a></li>
				<li><a href="daftar.php"><span>daftar rumah sukan</span></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		

</header>


	
	<!-- DaFtar -->
	<form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1" style="background-image:url(images/bg.jpg);  width:350px; border-radius:10px; margin-left:480px; padding-left:75px; " >
             
  <p><em><strong>DAFTAR MURID</strong></em></p>
  <table width="235" border="0" align="center" cellspacing="10" bordercolor="#333333">
<tr valign="baseline">
                 
<td width="229"><span id="sprytextfield1"> NO KAD PENGENALAN<br>
          <input name="nokp" type="text" value="" size="32"  id="button"   placeholder="NoKP" />
      <span class="textfieldRequiredMsg">Perlu diisi</span><span class="textfieldInvalidFormatMsg">Bukan Nokp</span><span class="textfieldMinCharsMsg">Nokp tidak mempunyai jumlah yang betul</span><span class="textfieldMaxCharsMsg">Nokp melebihi jumlah yang betul</span></span><br></td>
    <tr valign="baseline">
      <td>NAMA
              <input type="text" name="nama" value="" id="button"size="32"  placeholder="Nama" />
              <br>          
    </tr> 
    <tr valign="baseline">
                
<td><label>TINGKATAN
                    <br>
                    <select name="tingkatan" id="tingkatan">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
        </select>
                    <br> 
      </label></td>
    </tr>
                <tr valign="baseline">
             
<td><label> 
KELAS
<br>
<select name="kelas" id="kelas">
                      <option value="UIA">UIA</option>
                      <option value="UM">UM</option>
                      <option value="USIM">USIM</option>
                      <option value="UKM">UKM</option>
                      <option value="USM">USM</option>
                      <option value="UPM">UPM</option>
                      <option value="UTM">UTM</option>
                      <option value="UITM">UITM</option>
                      <option value="UMS">UMS</option>
                      <option value="KELAS KHAS(PPKI)">KELAS KHAS(PPKI)</option>
</select>
                            </label></td>
    </tr>        
                <tr valign="baseline">
                
                  <td><p>EMAIL
                    <input type="text" name="email" value="" id="button"size="32"  placeholder="email" />         </p>
                  </td>
                </tr>
    <tr valign="baseline" bordercolor="#333333">
                
      <td colspan="2" align="right"><div align="center" class="style1">
                    <p>
                      <input type="submit" value="DAFTAR" id="daftar" style="margin-right:30px" />
                  
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
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
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {minChars:12, maxChars:12});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer", {minValue:12});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
//-->
</script>
</body>

</html>
<?php
mysql_free_result($Recordset1);
?>
