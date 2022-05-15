<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title title="Enjoy Chinese Art!">Chinese Art</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/brands.css">
	<link rel="stylesheet" type="text/css" href="css/brands.min.css">
	<link rel="stylesheet" type="text/css" href="webfonts">
</head>



<body>
	<!----------------- start of navigator ----------------->
	<nav id="navbar">
		<div class="logo">
			<img src="imgs/logo.png">
		</div>
		<div class="nav_title">
			<p class="nav_p">Chinart</p>
		</div>
		<div id="nav_content">
			<ul>
				<li><a href="home.php">Home</a></li>
				<!-- <li><a href="blog.php" target="_blank">Blog</a></li> -->
				<li class="current_page"><a href="about.php">About & Contact</a></li>
				<li><a href="login.php">Admin</a></li>
			</ul>
		</div>	

	</nav>
	<!----------------- End of navigator ----------------->

	<div id="about">
		<div class="about_title">
			<h1>About US</h1>
		</div>
		<div class="about_text">
			<p>Chinart is a Chinese gallery website displaying Chinese painting in the twenties century.</p>
			<p>It was done in collaboration with Kay and Luna.</p>
			<p>The website code can be found in <a href="https://github.com/KatharineXU/GalleryWeb">https://github.com/KatharineXU/GalleryWeb</a></p>
		</div>
		<div class="about_title">
			<h1>Contact US</h1>
		</div>

		<div class="contact">
			<div class="us">
				<p><i class="fa-solid fa-rainbow"></i> Kay</p>
				<p>Email: xucheny@kean.edu</p>
				<p>Telephone: (+86)17357705027</p>
				<p>Wechat:<br><img src="imgs/Wechat_kay.jpg"></p>
			</div>
			<div class="us">
				<p><i class="fa-solid fa-star-and-crescent"></i> Luna</p>
				<p>Email: qiuh@kean.edu</p>
				<p>Telephone: (+86)18969834863</p>
				<p>Wechat:<br><img src="imgs/Wechat_luna.jpg"></p>
			</div>
		</div>


	</div>



</body>

<!----------------- Start of footer ----------------->
<?php 
	include('website_footer.php')
?>
<!----------------- End of footer ----------------->


</html>