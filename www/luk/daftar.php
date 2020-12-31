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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO daftarrumahsukan (nokp, rumahsukan, jawatan, tarikhdaftar) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['nokp'], "text"),
                       GetSQLValueString($_POST['rumahsukan'], "text"),
                       GetSQLValueString($_POST['jawatan'], "text"),
                       GetSQLValueString($_POST['tarikhdaftar'], "date"));

  mysql_select_db($database_luk, $luk);
  $Result1 = mysql_query($insertSQL, $luk) or die(mysql_error());

  $insertGoTo = "berjaya2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_luk, $luk);
$query_Recordset1 = "SELECT * FROM daftarrumahsukan";
$Recordset1 = mysql_query($query_Recordset1, $luk) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_luk, $luk);
$query_Recordset2 = "SELECT * FROM datamurid";
$Recordset2 = mysql_query($query_Recordset2, $luk) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?><?php require_once('Connections/luk.php');  /*
 nama projek ialah Pendaftaran rumah sukan SMKTTJ
 server:"localhost"
 database name:"luk"
 server username:"root"
*/?>
<?php
//* ini adalah aturcara daftar
//* daripada jadual daftarrumahsukan

//* select dari database daftarrumahsukan
?><!DOCTYPE html>
<html lang="en" style="background-image:url(images/bg.jpg)">
<head>
<title>daftar rumah sukan
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
<link rel="stylesheet" type="text/css" href="css/daftar.css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-style: italic;
}
.style2 {color: #3300FF}
-->
</style>
</head>

<body>
<div class="super_container" style="background-image:url(images/bg.jpg)">

	
	<!-- Header -->
<div style="text-align:center;padding:1em 0; margin-top:50px"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1734810"><span style="color:gray;">Zon waktu tempatan</span><br />Seremban, Malaysia</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FKuala_Lumpur" width="100%" height="115" frameborder="0" seamless></iframe> </div>
<header class="header d-flex flex-row justify-content-end align-items-center" style="background-image:url(images/bg.jpg)">

		<!-- Logo -->
		<div class="logo_container mr-auto">
			<div class="logo">
				<a href="#"><span>S</span>SMKTTJ<span>.</span></a>			</div>
		</div>

<!-- YEAH YEAH -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li><a href="lamanutama.php"><span>Laman utama</span></a></li>
				<li><a href="senaraimurid.php"><span>senarai murid</span></a></li>
				<li><a href="cariandaftar.php"><span>carian daftar</span></a></li>
				<li class="active"><a href="daftar.php"><span>daftar rumah sukan</span></a></li>
			</ul>
		</nav>

		
</header>

	

	

	
	<!-- DaFtar -->
    
   
<form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1"  style="background-image:url(images/bg.jpg);  width:350px; border-radius:10px; margin-left:450px; padding-left:75px; ">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <em><strong>DAFTAR RUMAH SUKAN  </strong></em>
  <table width="200" border="0" align="center" cellspacing="10" bordercolor="#333333">
<tr valign="baseline">
                  
      <td>
      NO KAD PENGENALAN<br>
     
      <?php do { ?>
       
<select name="nokp" id="button" >
  <?php do { ?>
  <option><?php echo $viewallRecordset2['nokp']; ?></option>
  <?php } while ($viewallRecordset2 = mysql_fetch_assoc($Recordset2)); ?>
</select>

        <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
      <br>
<tr valign="baseline">
                  <br>
                  <br>
<td><label>RUMAH SUKAN<br>
<select name="rumahsukan" id="rumahsukan" placeholder="Rumah Sukan">
                      <option value="SYAHBANDAR" selected="selected">SYAHBANDAR</option>
                      <option value="LAKSAMANA">LAKSAMANA</option>
                      <option value="TEMENGGONG">TEMENGGONG</option>
                      <option value="BENDAHARA">BENDAHARA</option>
                      <option value="PPKI">PPKI</option>
        </select>
  <br>
                  </label></td>
    </tr>
                <tr valign="baseline">
                  
<td><label>
                    JAWATAN<br>
                    <select name="jawatan" id="jawatan">
                      <option value="PENGERUSI">PENGERUSI</option>
                      <option value="NAIB PENGERUSI">NAIB PENGERUSI</option>
                      <option value="SETIAUSAHA">SETIAUSAHA</option>
                      <option value="BENDAHARI">BENDAHARI</option>
                      <option value="AJK">AJK</option>
                      <option value="AHLI BIASA">AHLI BIASA</option>
                  </select>
                  <br>
                  <br>
                  </label></td>
    </tr>
                <tr valign="baseline">
                  <td colspan="2" align="right" nowrap="nowrap">                    <div align="center">
                    <input type="submit" value="DAFTAR" id="daftar" />                  
                  </div></td>
    </tr>
  </table>
  <p>
  <input type="hidden" name="tarikhdaftar" value="" />
  <input type="hidden" name="MM_insert" value="form1">
</p>
  <p class="style1" style="margin-right:20px; padding-right:20px;">Sila Daftar Murid Terdahulu Sebelum Mendaftar Rumah Sukan, Sudah mendaftar ? Teruskan. Jika Belum Klik <strong><a href="daftarmurid.php" class="style2">DI SINI</a></strong> </p>
  <p class="style1" style="margin-right:20px; padding-right:20px;">&nbsp;</p>
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {minValue:12, maxValue:12, isRequired:false});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer", {minValue:12});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
//-->
</script>
</body>

</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>