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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO login (id, username, password, nama) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['uname'], "text"),
                       GetSQLValueString($_POST['psw'], "text"),
                       GetSQLValueString($_POST['nama'], "text"));

  mysql_select_db($database_luk, $luk);
  $Result1 = mysql_query($insertSQL, $luk) or die(mysql_error());

  $insertGoTo = "berjaya.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_luk, $luk);
$query_Recordset1 = "SELECT * FROM login";
$Recordset1 = mysql_query($query_Recordset1, $luk) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
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
</head>

<body>
<div class="super_container" style="background-image:url(images/bg.jpg)">
<div style="text-align:center;padding:1em 0; margin-top:100px"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1734810"><span style="color:gray;">Zon waktu tempatan</span><br />Seremban, Malaysia</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FKuala_Lumpur" width="100%" height="115" frameborder="0" seamless></iframe> </div>
<div class="super_container" style=" height:600px;">
	
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center" style="background-image:url(images/bg.jpg)">
    <!-- Logo -->
		<div class="logo_container mr-auto">
			<div class="logo">
				<a href=""><span>S</span>SMKTTJ<span>.</span></a>			</div>
		</div>

		
<!-- DaFtar -->
			<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
	opacity:0.5;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
#button {
background-image:url(images/bg.jpg);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

#button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}

.modal-content {
background:url(images/bg.jpg);
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<button onClick="document.getElementById('id01').style.display='block'" id="button"style="width:auto;">Daftar</button>

<div id="id01" class="modal">
  
<form ACTION="<?php echo $loginFormAction; ?>" class="modal-content animate" method="POST" <form action="<?php echo $editFormAction; ?>" name="form" class="modal-content animate" method="POST" style="width:800px;height:650px;border-top-width: 5px;border-right-width: 5px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;border-bottom-width: 5px;border-left-width: 5px;">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/logo.png" alt="Avatar" class="avatar" style=" width:150px; height:150px;">    </div>

  <div class="container">
      <label for="uname"><b>Nama Pengguna</b></label>
      <input type="text" placeholder="Masuk Nama Pengguna" name="uname" required="">

      <label for="psw"><b>Katalaluan</b></label>
      <input type="password" placeholder="Masuk Katalaluan" name="psw" required="">
      
      <label for="uname"><b>Nama</b></label>
      <input type="text" placeholder="Masuk nama" name="nama" required="">
      
       <input type="submit" id="button" value="Daftar">
       
      <input type="hidden" name="id" value="" />
              <input type="hidden" name="MM_insert" value="form1" />
              <input type="hidden" name="MM_insert" value="form">
              
            </form>
           
        
     
     
</div>

    <div class="container" style="opacity:0.8">
     
      <span class="psw" style="
    background-color:#f44336;

  </form>
    
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
		

	</header>

	<!-- Page -->

	<div class="home prlx_parent">

		<!-- Parallax Background -->
		<div class="home_background prlx" style="background-image:url(images/bg.jpg)"></div>
	

		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="home_content">
						<h1>DAFTAR</h1>
						<span>Pengguna baru</span>					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>	

	


	

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
