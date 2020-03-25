<!DOCTYPE html>
<html lang="en">
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
<body onload="getLocation()" id="top" data-spy="scroll">

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
   
	document.getElementById("lati").value=position.coords.latitude;
	document.getElementById("longi").value=position.coords.longitude;
	
	
}
</script>


	<!--top header-->

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
							<li><a href="sms.php">Fix a meet</a></li>
							
							<li><a href="#contact">contact</a></li>
							<li class="hidden-sm hidden-xs">
	                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>	                        </li>
						</ul>
					</div>

					
				</div>
			</nav>
		</div>

	</header>

	<div class="module form-module">
  <div class="toggle">
  </div>
 
  <div class="form">
    <h2>Create an account</h2>
    <form method="post">
      <input type="text" name="name" placeholder="name"/>
      <input type="text" name="key" placeholder="Keywords" list="abc"/>
	  
	  <datalist id="abc">
<?php	  
	  include("connection.php");
$q="select * from keywords ";
$rs=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($rs))
{

echo "<option>$row[course]</option>";

}

?>
</datalist>
	  
	  
	  
	  </datalist>
	  
	  
      <input type="email" name="email" placeholder="Email Address"/>
      <input type="tel" name="mobileno" placeholder="Phone Number"/>
	  <input type="text" name="longi" id="longi" placeholder="Longitude"/>
      <input type="text" name="lati" id="lati" placeholder="Latitude"/>
     
	 
	  <select name="status"><option>Select Type</option>
	  
	  <option value="L">Learner</option>
	  <option value="T">Teacher</option>
	  </select>
     
	 
	  <button type="submit" name="save">Register</button>
    </form>
	<?php
	if(isset($_REQUEST["save"]))
	{
		$name=$_REQUEST["name"];
		$key=$_REQUEST["key"];
		$email=$_REQUEST["email"];
		$mobileno=$_REQUEST["mobileno"];
		$longi=$_REQUEST["longi"];
		$lati=$_REQUEST["lati"];
	$status=$_REQUEST["status"];

		include("connection.php");
		$q="insert into profile value('$mobileno','$email','$name','$status','$key','$longi','$lati')";
		$rs=mysqli_query($conn,$q);
		
		if($rs){
				
				$q="select * from keywords where course='$key'";
				$rs=mysqli_query($conn,$q);
				
				if(mysqli_num_rows($rs)){}
				else{
					$q="insert into keywords values('$key')";
					$rs=mysqli_query($conn,$q);
				
				
				}
	
		echo "<script>alert('inserted sucessfully');</script>";
		}else{
		echo "<script>alert('Error while ....');</script>";
		
		}
	}
	
	
	?>
  </div>
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <script src="js/index.js"></script>

    <!--about-->
    
			<!--service gapping-->
		
			<!--client-->
		
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
    
</body>
</html>