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

$colname_Recordset1 = "-1";
if (isset($_GET['nama'])) {
  $colname_Recordset1 = $_GET['nama'];
}
$colname2_Recordset1 = "-1";
if (isset($_GET['tingkatan'])) {
  $colname2_Recordset1 = $_GET['tingkatan'];
}
$colname3_Recordset1 = "-1";
if (isset($_GET['kelas'])) {
  $colname3_Recordset1 = $_GET['kelas'];
}
mysql_select_db($database_luk, $luk);
$query_Recordset1 = sprintf("SELECT datamurid.nokp, datamurid.nama, datamurid.tingkatan, datamurid.kelas, daftarrumahsukan.rumahsukan, daftarrumahsukan.jawatan, daftarrumahsukan.tarikhdaftar FROM datamurid INNER JOIN daftarrumahsukan ON datamurid.nokp=daftarrumahsukan.nokp WHERE datamurid.nama LIKE %s AND datamurid.tingkatan LIKE%s AND datamurid.kelas LIKE %s", GetSQLValueString("%" . $colname_Recordset1 . "%", "text"),GetSQLValueString("%" . $colname2_Recordset1 . "%", "text"),GetSQLValueString("%" . $colname3_Recordset1 . "%", "text"));
$Recordset1 = mysql_query($query_Recordset1, $luk) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html>
<html lang="en" style="background-image:url(images/bg.jpg)">
<head>
<title>Carian Daftar
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
<link rel="stylesheet" type="text/css" href="css/cariandaftar.css"  />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
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
				<li class="active"><a href="cariandaftar.php"><span>carian daftar</span></a></li>
				<li><a href="daftar.php"><span>daftar rumah sukan</span></a></li>
			</ul>
		</nav>

		
</header>

	<!-- Menu -->



	
<!-- DaFtar -->
   
<tr>
          <td class="bodyText"><form id="form1" name="form1" method="get" action="">
            <table width="878" border="0">
              <tr>
                <td width="58"><div align="center"><span class="style1">NAMA</span></div></td>
          <td width="198">
            <input type="text" name="nama" id="nama" />            </label></td>
                <td width="107"><div align="center"><span class="style1">TINGKATAN</span></div></td>
    <td width="198">
                 <span class="style1">
                    <select name="tingkatan" id="tingkatan">
                      <option value="">SILA PILIH</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
           
    </label></td>
                <td width="75"><div align="center"><span class="style1">KELAS</span></div></td>
                <td width="216"><span class="style1">
                <select name="kelas" id="kelas">
                    <option value="">SILA PILIH</option>
                    <option value="UIA">UIA</option>
                    <option value="UM">UM</option>
                    <option value="USIM">USIM</option>
                    <option value="UKM">UKM</option>
                    <option value="USM">USM</option>
                    <option value="UPM">UPM</option>
                    <option value="UTM">UTM</option>
                    <option value="UITM">UITM</option>
                    <option value="UMS">UMS</option>
                          </select>
                  </span></td>
              </tr>
              <tr>
                <td colspan="6"><label>
                  <p>&nbsp;</p>
                  <div align="center">
                    <input type="submit" name="button" id="button" value="CARI" style="margin-left:320px"/>                  
                  </div>
                </label></td>
              </tr>
            </table>
                              </form>          <p>&nbsp;
                              <!--query-->
                              <table border="1" align="center">
                                <tr bgcolor="#999999">
                                  <td><div align="center"><em><strong>NO KAD PENGENALAN</strong></em></div></td>
                                  <td><div align="center"><em><strong>NAMA</strong></em></div></td>
                                  <td><div align="center"><em><strong>TINGKATAN</strong></em></div></td>
                                  <td><div align="center"><em><strong>KELAS</strong></em></div></td>
                                  <td><div align="center"><em><strong>RUMAH SUKAN</strong></em></div></td>
                                  <td><div align="center"><em><strong>JAWATAN </strong></em></div></td>
                                  <td><div align="center"><em><strong>TARIKH DAFTAR</strong></em></div></td>
                                </tr>
                                <?php do { ?>
                                  <tr bgcolor="#CCCCCC">
                                    <td><div align="center" class="style1"><a href="report.php?recordID=<?php echo $row_Recordset1['nokp']; ?>"> <?php echo $row_Recordset1['nokp']; ?>&nbsp; </a> </div></td>
                                    <td><div align="center"><?php echo $row_Recordset1['nama']; ?>&nbsp; </div></td>
                                    <td><div align="center"><?php echo $row_Recordset1['tingkatan']; ?>&nbsp; </div></td>
                                    <td><div align="center"><?php echo $row_Recordset1['kelas']; ?>&nbsp; </div></td>
                                    <td><div align="center"><?php echo $row_Recordset1['rumahsukan']; ?>&nbsp; </div></td>
                                    <td><div align="center"><?php echo $row_Recordset1['jawatan']; ?>&nbsp; </div></td>
                                    <td><div align="center"><?php echo $row_Recordset1['tarikhdaftar']; ?>&nbsp; </div></td>
                                  </tr>
                      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
            </table>
                              <br />
                              <?php echo $totalRows_Recordset1 ?> Records Total
                              </p></td>
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
mysql_free_result($Recordset1);
?>