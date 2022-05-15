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
	<?php
		include('website_nav.php');
	?>
	<!----------------- End of navigator ----------------->

	<!----------------- Start of slide ----------------->

	<div class="slide">
		<img src="imgs/slide/running.gif">
		<div class="slide_title">
			<p class="slide_word">CHINART</p>

		</div>

	<!----------------- End of slide ----------------->

	<!----------------- Start of menu ----------------->

	<div id="menu_home">
		<div class="menu_all">
			<ul>
				<li><a href="works.php">All</a></li>
				<li><a href="gallery.php">Art Gallery</a></li>
				<li><a href="artists.php">Artists</a></li>
			</ul>
		</div>

		<div class="menu_img">
			<img src="imgs/paintings/Beijing-Tianjin/csz_smoke_0.jpg">
			<img src="imgs/paintings/Changan/hhx_sunrise_0.jpg">
			<img src="imgs/paintings/Beijing-Tianjin/xjx_village_0.jpg">
			<img src="imgs/paintings/Beijing-Tianjin/yfa_bird_0.jpg">
			<!-- <a href="">More...</a> -->
		</div>

	</div>

	<!----------------- End of menu ----------------->

	<br><br>

	<!----------------- Start of introdction cell ----------------->

	<div id="intro">
		<div class="title">
			<p>Enjoy Chinese Art</p>
		</div>

		<div  class="intro_cell">
			<table>
				<tr>
					<td class="intro_text">In the twentieth century, the Chinese painting world was characterized by numerous schools that made indelible contributions to the development of Chinese painting. Among these schools, the Maritime School, the Beijing-Tianjin School, the Lingnan School, the Jinling School, and the Chang'an School were the most influential. Among them, the Maritime School is the strongest and most influential, and the Lingnan School is the most systematic.</td>
					<td class="intro_img"><img src="imgs/slide/home_slide_pic1.jpeg"></td>
				</tr>
				<tr>
					<td class="intro_img"><img src="imgs/slide/home_slide_pic2.jpeg"></td>
					<td class="intro_text">From the trend of the above five schools, most of them show from prosperous to declining, with one generation being worse than the other, and some schools have been at the end of their powers. The main reason for this situation is that Nowadays, the painter's academic cultivation and traditional skills are far inferior to previous painters. How to revive the majestic style of the painting school has been an important issue in front of today's painters. important issue in front of painters today.</td>
				</tr>
			</table>
		</div>
	</div>

	<!----------------- End of introdction cell ----------------->

	<br><br><br>



</body>

<!----------------- Start of footer ----------------->
<?php 
	include('website_footer.php')
?>
<!----------------- End of footer ----------------->


</html>