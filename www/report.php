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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Text</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="images/mm_travel2.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
</head>
<body bgcolor="#C0DFFD">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td width="382" colspan="2" rowspan="2" nowrap="nowrap"><img src="images/bg-02.png" width="216" height="155" /></td>
    <td width="378" height="63" id="logo" valign="bottom" align="center" nowrap="nowrap">SISTEM PENDAFTARAN RUMAH SUKAN</td>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr bgcolor="#3366CC">
    <td height="64" id="tagline" valign="top" align="center">SMK TAMAN TUANKU JAAFAR</td>
	<td width="100%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#003366"><img src="images/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr bgcolor="#CCFF99">
  	<td>&nbsp;</td>
  	<td colspan="3" id="dateformat" height="25"><a href="index.php">LAMAN UTAMA</a> :: 
    <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
 <tr>
    <td colspan="4" bgcolor="#003366"><img src="images/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
 <tr>
    <td width="40">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
    <table border="0" cellspacing="0" cellpadding="2" width="500">
        <tr>
          <td class="pageName"><div align="center">LAPORAN DAN CETAKAN</div></td>
        </tr>
        <tr>
          <td class="bodyText"><p>&nbsp; </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p align="center"><img src="upload/<?php echo $row_DetailRS1['nama']; ?>.jpg" width="250" height="250" border="5" /></p>
          <p>&nbsp;</p>
          <table border="2" align="center" cellpadding="10" cellspacing="2" bordercolor="#000000">
            <tr>
              <td width="135" bgcolor="#666666"><div align="center"><em><strong>NO KAD PENGENALAN</strong></em></div></td>
              <td width="145" bgcolor="#CCCCCC"><div align="center"><?php echo $row_DetailRS1['nokp']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center"><em><strong>NAMA</strong></em></div></td>
              <td bgcolor="#CCCCCC"><div align="center"><?php echo $row_DetailRS1['nama']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center"><em><strong>TINGKATAN</strong></em></div></td>
              <td bgcolor="#CCCCCC"><div align="center"><?php echo $row_DetailRS1['tingkatan']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center"><em><strong>KELAS</strong></em></div></td>
              <td bgcolor="#CCCCCC"><div align="center"><?php echo $row_DetailRS1['kelas']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center"><em><strong>RUMAH SUKAN</strong></em></div></td>
              <td bgcolor="#CCCCCC"><div align="center"><?php echo $row_DetailRS1['rumahsukan']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center"><em><strong>JAWATAN</strong></em></div></td>
              <td bgcolor="#CCCCCC"><div align="center"><?php echo $row_DetailRS1['jawatan']; ?> </div></td>
            </tr>
            <tr>
              <td bgcolor="#666666"><div align="center"><em><strong>TARIKH DAFTAR</strong></em></div></td>
              <td bgcolor="#CCCCCC"><div align="center"><?php echo $row_DetailRS1['tarikhdaftar']; ?> </div></td>
            </tr>
          </table>          
          <p><form>
            <div align="center">
              <input name="Button" type="button" onClick="window.print()" value="CETAK">
            </div>
          </form></p></td>
		</tr>
      </table>	  </td>
	<td width="100%">&nbsp;</td>
  </tr>

 <tr>
    <td width="40">&nbsp;</td>
    <td width="342">&nbsp;</td>
    <td width="378">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($DetailRS1);
?>