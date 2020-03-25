<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>MyBiz Bootstrap Theme</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/2.css.css">
    <!-- =======================================================
        Theme Name: MyBiz
        Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<header id="home">
	<style>
	{
	background-color:#000000;
	}
	body
	{background-image:url(images/education-background-checks.jpg);
	}
	</style>

		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">					</div>

					<div class="col-md-6">					</div>
				</div>
			</div>
		</section>

		<!--main-nav-->

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						<a href="index.php" class="navbar-brand">Teacher-Learner</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index1.php">Registration</a></li>
							<li><a href="searchdata.php">Find the</a></li>
							<li><a href="#">Fix a meet</a></li>
							
							<li><a href="#contact">contact</a></li>
							<li class="hidden-sm hidden-xs">
	                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>	                        </li>
						</ul>
					</div>

					
				</div>
			</nav>
		</div>

	</header>
<?php
$mob=$_REQUEST["mob"];
$msg=$_REQUEST["msg"];

$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '7000637374',
    'To'    => array("7000637374", "$mob"),
    'Body'  => "$msg"
);

 
$exotel_sid = "noname8"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "736d970fb48bcdbc04a7981bc2e5ff6be502ba7a"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 echo "Send Sucessfully...";
//print "Response = ".print_r($http_result);
?>
<a href="index.php">HOME</a>
<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!--footer-->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>about</span> us</h3>
							<p>To explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before. It's time to play the music.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>latest</span> news</h3>
							<ul>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>follow</span> us on instagram</h3>
							<div class="insta">
								<ul>
									<img src="images/footer/footer1.jpg" alt="">
									<img src="images/footer/footer2.jpg" alt="">
									<img src="images/footer/footer3.jpg" alt="">
									<img src="images/footer/footer4.jpg" alt="">
									<img src="images/footer/footer5.jpg" alt="">
									<img src="images/footer/footer6.jpg" alt="">
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--bottom footer-->
		
	
	<!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/script.js"></script>
    <script src="contactform/contactform.js"></script>
    <strong></strong>