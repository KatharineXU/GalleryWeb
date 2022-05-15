<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
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
				<li><a href="about.php">About & Contact</a></li>
				<li class="current_page"><a href="login.php">Admin</a></li>
			</ul>
		</div>	

	</nav>
	<!----------------- End of navigator ----------------->

	<!----------------- Start of Login Part ----------------->

	<div id="login">

		<div id="login_box">

			<div class="login_title">
				<p class="login_chinart">Chinart
				<p>|</p>
				<p>LOG IN</p>
			</div>

			<form class="login_form" action="login_action.php" method="post">
				<ul class="usr_info">
					<li>Username <input type="text" name="username" id="name" required></li>
					<li>Password <input type="password" name="password" required></li>
				</ul>

				<button type="submit" id="submit" class="checkButton" value="submit">Log in</button>
			</form>
		</div>
	</div>

	<!----------------- End of Login Part ----------------->


</body>

<!----------------- Start of footer ----------------->
<?php 
	include('website_footer.php')
?>
<!----------------- End of footer ----------------->

</html>