
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rumah Sukan</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Zeta Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/maincss.css">
<link rel="stylesheet" type="text/css" href="styles/css8.css">
<link rel="stylesheet" type="text/css" href="css/comment.css">
<iframe width="0" height="0" src="Yiruma-When-The-Love-Falls_IVeD9b8cgow.mp3" frameborder="0" allowfullscreen></iframe>
<!--komen-->
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">
function post()
{
  var comment = document.getElementById("komen").value;
  var name = document.getElementById("nama").value;
  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comments.php',
      data: 
      {
         user_comm:comment,
	     user_name:name
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("komen").value="";
        document.getElementById("nama").value="";
  
      }
    });
  }
  
  return false;
}
</script>
<!--komen-->
<style>
#container{
	margin:auto;
	width:38%;
}
#nama{
	width:100%;
	height:40px;
	border:1px solid silver;
	margin-top:40px;
	border-radius:5px;
	font-size:17px;
	padding:10px;
	font-family:helvetica;
	margin-bottom:10px;
}
#komen{
	width:100%;
	height:100px;
	border:1px solid silver;
	border-radius:5px;
	font-size:17px;
	padding:10px;
	font-family:helvetica;
}
#submit{
	width:200px;
	height:60px;
	border:none;
	background-color:tomato;
	color:#fff;
	margin-top:20px;
	border-radius:5px;
	font-size:20px;
	border-bottom:6px solid #E90003;
	margin-left:140px;
}
.comment_div
{
	width:500px;
	text-align:left;
	margin:20px auto;
	background:#F3F3F3;
	text-align:center;
}
.name{
	height:30px;
	line-height:30px;
	padding:8px;
	background:#fff;
	color:#777;
	text-align:left;
}
.comments{
	padding:0px 0px 24px 0px;
	font-size:20px;	
}
<!--rumah sukan-->
</style>
<style type="text/css">
<!--
.style2 {color: #FFCC00}
.style3 {color: #FF0000}
.style4 {color: #33CC00}
.style6 {color: #338DFF  }
-->
</style></head>

<body>
	<div class="super_container" style="background-image:url(images/bg.jpg)">
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center" style="background-image:url(images/bg.jpg)" >
   

		<!-- Logo -->
		<div class="logo_container mr-auto" >
			<div class="logo">
				<a href=""><span>S</span>SMKTTJ<span>.</span></a>
			</div>
		</div>

		<!-- menu -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li><a href="daftarmurid.php"><span>Daftar Murid</span></a></li>
				<li><a href="senaraimurid.php"><span>Senarai Murid</span></a></li>
				<li><a href="daftar.php"><span>Daftar Rumah Sukan</span></a></li>
				<li><a href="cariandaftar.php"><span>Carian Daftar</span></a></li>
                <a href="index.php" class="btn btn-info btn-lg" style="background-image:url(images/bg.jpg)" >
          <span class="glyphicon glyphicon-log-out"></span> Log Keluar</a>
       
			</ul>
		</nav>

		
	</header>
<div style="text-align:center; margin-top:80px; background-image:url(images/bg.jpg);"> <h2 style="padding-top:20px"><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1734810"><span style="color:gray;">
Zon waktu tempatan</span><br />Seremban, Malaysia</a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FKuala_Lumpur" width="100%" height="140" frameborder="0" seamless></iframe> </div>
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg" style="background-image:url(images/DSC_1218.JPG)"></div>
					<div class="main_slider_shapes"><img src="images/main_slider_shapes.png" alt="" style="width: 100% !important;"></div>
					<div class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
									<h1>Pendaftaran</h1>
									<h1>Rumah<span>Sukan</span>SMKTTJ</h1>
									<div class="button discover_button">
										<a href="gallery.php" class="d-flex flex-row align-items-center justify-content-center">gallery<img src="images/arrow_right.svg" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			
			
	
	

	<div class="about prlx_parent">
		
		<div class="about_background prlx" style="background-image:url(images/bg.jpg)"></div>
		<div class="about_shapes"><img src="images/about_shapes.png" alt=""></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title">
					<h2>Taman Tuanku Jaafar<span>rumahsukan</span></h2>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-6">
					<div class="about_text">
					<img src="images/bg-02.png" alt="">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="skills_container">
						<ul class="progress_bar_container col_12 clearfix">
							<li class="pb_item">
								<div id="skill_1_pbar" class="skill_bars" data-perc="0.85" data-name="skill_1_pbar"></div>
								<h5>Kekuatan</h5>
							</li>
							<li class="pb_item">
								<div id="skill_2_pbar" class="skill_bars" data-perc="1" data-name="skill_2_pbar"></div>
								<h5>Kerjasama</h5>
							</li>
							<li class="pb_item">
								<div id="skill_3_pbar" class="skill_bars" data-perc="0.75" data-name="skill_3_pbar"></div>
								<h5>Olahraga</h5>
							</li>
							<li class="pb_item">
								<div id="skill_4_pbar" class="skill_bars" data-perc="0.95" data-name="skill_4_pbar"></div>
								<h5>Semangat</h5>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		
	</div>
    	
	

	<div class="services prlx_parent">
		
		<div class="services_background prlx" style="background-image:url(images/bg.jpg)"></div>
		<div class="services_shapes"><img src="images/services_shapes.png" alt=""></div>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start" style="margin-top:50px">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/panthers_team_logo.png" alt="">
					</div>
					<h3><span class="style6">SYAHBANDAR</span></h3>
					<p>Winning are the best that we can do </p><p> <a> "cold blue team blood"</a></p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start" style="margin-top:50px">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/tiger.png" alt="">
					</div>
					<h3><span class="style2">Bendahara</span></h3>
				  <p>logo rumah sukan BENDAHARA</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start" style="margin-top:50px">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/images.png" alt="">
					</div>
					<h3><span class="style3">LAKSAMANA</span></h3>
				  <p>logo rumah sukan LAKSAMANA</p>
				</div>
                

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start" style="margin-top:170px">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/rsz_1lion.png" alt="">
					</div>
					<h3><span class="style4">TEMENGGONG</span></h3>
				  <p>logo rumah sukan TEMENGGONG</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start" style="margin-top:170px">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/rsz_bear.png" alt="">
					</div>
					<h3><span class="style6">PPKI</span></h3>
				  <p>logo rumah sukan PPKI</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start" style="margin-top:170px">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/bg-02.png" alt="">
					</div>
					<h3>SMKTTJ</h3>
					<p>logo rasmi sekolah smkttj</p>
				</div>

			</div>

			<div class="row">
				<div class="col text-center">
					<div class="button services_button">
						<a href="daftar.php" class="d-flex flex-row align-items-center justify-content-center">
							daftar<img src="images/arrow_right.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	

</div>


<!--komen-->
<form method='post' action="" style="background-image:url(images/bg.jpg); width:1358px;"  onSubmit="return post();" id="container">
	  <p>
	    <input type="text" style="width:200px; margin-left:570px;"id="nama" placeholder="Nama" autocomplete="off">
  </p>
	  <p>    
	    <textarea id="komen" style="width:500px; margin-left:425px;" placeholder="Tulis komen anda disini"></textarea>  
    </p>
	  <p align="center">
	    <input type="submit" style=" cursor:pointer; margin-right:150px; background: #ff4200;" value="Hantar Komen" id="submit">
              </p>
</form>

  <div id="all_comments"  >
  <?php
    $host="localhost";
    $username="root";
    $password="root1234";
    $databasename="luk";

    $connect=mysql_connect($host,$username,$password);
    $db=mysql_select_db($databasename);
  
    $comm = mysql_query("select name,comment,post_time from comments order by id desc");
    while($row=mysql_fetch_array($comm))
    {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['post_time'];
    ?>
	
<div class="comment_div" style="background-image:url(images/bg.jpg)"> 
 <p class="name"><strong>Dihantar oleh:</strong> <?php echo $name;?> <span style="float:right"><?php                        
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo date('d-m-Y H:i:s'); //Returns IST
?></span></p>
 <p class="comments"><?php echo $comment;?></p>	
</div>
  
    <?php
    }
    ?>
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
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>