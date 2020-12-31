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
{
	$id=$_POST['hf_nama'];
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$id.".jpg");
	
}

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td colspan="2" rowspan="2" nowrap="nowrap"><img src="images/bg-02.png" width="203" height="155" /></td>
    <td width="627" height="63" id="logo" valign="bottom" align="center" nowrap="nowrap">SISTEM PENDAFTARAN RUMAH SUKAN</td>
    <td width="257">&nbsp;</td>
  </tr>
  <tr bgcolor="#3366CC">
    <td height="64" id="tagline" valign="top" align="center">SMK TAMAN TUANKU JAAFAR</td>
	<td width="257">&nbsp;</td>
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
    <td width="17">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
    <table border="0" cellspacing="0" cellpadding="2" width="500">
        <tr>
          <td class="pageName">SENARAI MURID </td>
        </tr>
        <tr>
          <td class="bodyText"><p>&nbsp;
            <table border="1" align="center">
              <tr bgcolor="#999999">
                <td><div align="center"><span class="style5">NO KAD PENGENALAN</span></div></td>
                <td><div align="center"><span class="style5">NAMA</span></div></td>
                <td><div align="center"><span class="style5">TINGKATAN</span></div></td>
                <td><div align="center"><span class="style5">KELAS</span></div></td>
                <td><div align="center"><span class="style5">EMAIL</span></div></td>
                <td><div align="center"><strong>EDIT</strong></div></td>
                <td><div align="center"><strong>DELETE</strong></div></td>
                <td><div align="center"><strong>UPLOAD</strong></div></td>
                <td><div align="center"><strong>GAMBAR</strong></div></td>
              </tr>
              <?php do { ?>
                <tr bgcolor="#CCCCCC">
                  <td><div align="center"><a href="detailmurid.php?recordID=<?php echo $row_Recordset1['nokp']; ?>"> <?php echo $row_Recordset1['nokp']; ?>&nbsp; </a> </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['nama']; ?>&nbsp; </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['tingkatan']; ?>&nbsp; </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['kelas']; ?>&nbsp; </div></td>
                  <td><div align="center"><?php echo $row_Recordset1['email']; ?>&nbsp; </div></td>
                  <td><div align="center"><a href="editmurid.php?recordID=<?php echo $row_Recordset1['nokp']; ?>">EDIT</a></div></td>
                  <td><div align="center"><a href="deletemurid.php?recordID=<?php echo $row_Recordset1['nokp']; ?>">DELETE</a></div></td>
                  <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <label>

                    <input type="file" name="file" id="file" />
                    <input type="submit" name="btn_uploadpic" id="btn_uploadpic" value="Upload Gambar" />
                    </label>

                    <input name="hf_nama" type="hidden" id="hf_nama" value="<?php echo $row_Recordset1['nama']; ?>" />
                    </form></td>
                  <td><div align="center"><img src="upload/<?php echo $row_Recordset1['nama']; ?>.jpg" width="67" height="81" /></div></td>
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
