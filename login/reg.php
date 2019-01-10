<?php include('server.php');
	
	// if user is not logged in, they can not access this page
	if (empty($_SESSION['username'])) {
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>registered user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <meta charset="utf-8">
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="image/logo.png" alt="logo" style="width=25px;height:25px"></a>
      <a class="navbar-brand" href="#">IOT based Project</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
        <ul class="dropdown-menu" mouseover>
          <li><a href="#">IOT</a></li>
          <li><a href="#">Machine learning</a></li>
          <li><a href="#">Automation</a></li>
          <li><a href="#">AI</a></li>
        </ul>
      </li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</nav>
	<h1 style="color:green;text-align:center;">You are Registered Successfully</h1>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class=" error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION['username'])): ?>
			<p style="text-align:center;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p style="text-align:center;"><a href="reg.php?login='1'" style="color: green;">Login here</a></p>
		<?php endif ?>	
	</div>
	
	
	<br><br><br><br><br><br><br><br>
	<!-- Footer-->
	<style type="text/css">
  
#footer .sub_footer h3{
color: white;
}

#footer .sub_footer a {

  color: white;}

</style>



<div class="container-fluid" id="footer" style="margin-top: 30px; background-color: silver;">
	<div class="container">
  		<div class="row">
			<div class=" col-sm-2 sub_footer"  style="color:silver;">
 				<h3 class="text-capitalize">About Us</h3>
 				<a href="https://www.facebook.com/"><img src="image/fb.png" style="width:27px; height:27px:"> Facebook</a><br><br>
				<a href="https://www.youtube.com/"><img src="image/youtube.png" style="width:27px; height:27px:"> Youtube</a><br><br>
 				<a href="https://www.instagram.com/"><img src="image/instagram.png" style="width:27px; height:27px:"> Instagram</a>
			</div>

			<div class=" col-sm-2 sub_footer" style="color:#f00;">
 				<h3 class="text-capitalize">Contact Us </h3> 
 				<p><a href="" class="text-capitalize"><i class="fa fa-arrow-circle-right" style="font-size:18px;color:#fff;"></i>Contact Number</a></p>
 				<p><a href="" class="text-capitalize"><i class="fa fa-arrow-circle-right" style="font-size:18px;color:#fff;"></i>Help</a></p>
				<a href="https://plus.google.com"><img src="image/google.png" style="width:27px; height:27px:"> Google+</a><br><br>
 				<a href="https://twitter.com"><img src="image/twitter.png" style="width:27px; height:27px:"> Twitter</a>
			</div>


			<div class="col-sm-4  sub_footer">
      				<h3 class="text-capitalize">YouTube</h3>
				<iframe width="100%" height="200"  src="https://www.youtube.com" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen ></iframe>
   			</div>



    			<div class="col-sm-4  sub_footer"> 
     				<h3 class="text-capitalize">Map</h3>
 				<iframe src="https:www.google.co.in/maps" width="100%" height="200"  frameborder="0" style="border:1" allowfullscreen>				</iframe>
    			</div>
  		</div>
	</div>
</div>
</body>
</html>