<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Painter</title>
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

	<!----------------- Start of Update Part ----------------->

	<div id="admin">
		<h1 >HI Admin！ You want to </h1>
		<div id="admin_perform">
			<ul>
				<li class="current_update"><a href="update_painter.php">update painetr information</a></li>
				<li><a href="update_painting.php">update painting information</a></li>
			</ul>
		</div>

	</div>


	<div id="update">
		<div id="update_box">

			<form class="update_form" action="update_painter_action.php" method="post">
				<ul class="painter_info">
					<li>Painter Name (CN) <input type="text" name="painterCN" placeholder="e.g. 傅抱石" required></li>
					<li>Painter Name (pinyin) <input type="text" name="painterEN" placeholder="e.g. Baoshi Fu" required></li>
					<li>School<br>
						<input type="radio" name="school" value="Maritime School">Maritime School
						<input type="radio" name="school" value="Beijing-Tianjin School">Beijing-Tianjin School
						<input type="radio" name="school" value="Lingnan School">Lingnan School
						<input type="radio" name="school" value="Jinling School">Jinling School
						<input type="radio" name="school" value="Chang'an School">Chang'an School
					</li>
					<li>Portrait URL <input type="text" name="portraitURL" class="input_text" required></li>
					<li>Introduction<br><br></body><textarea cols="80" rows="7" placeholder="Write down the brief introduction of this artist..." name="intro" required></textarea></li>
				</ul>
				<div class="button">
					<button type="submit" id="submit" class="checkButton" value="submit">submit</button>
				</div>
			</form>
		</div>
	</div>

	<!----------------- End of Update Part ----------------->


</body>

<!----------------- Start of footer ----------------->
<?php 
	include('website_footer.php')
?>
<!----------------- End of footer ----------------->

</html>