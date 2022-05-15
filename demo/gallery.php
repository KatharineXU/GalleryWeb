<!DOCTYPE html>

<?php
    session_start();
    include ('conn.php');
?>

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
	<!----------------- Start of navigator ----------------->
	<?php
		include('website_nav.php');
	?>
	<!----------------- End of navigator ----------------->

	<!----------------- Start of side image ----------------->

	<div class="sideimg">
		
	</div>

	<!----------------- End of side image ----------------->

	<br>

	<!-------------------------- Start of menu -------------------------->

	<div id="menu_home">
		<div class="menu_all menu_gallery">
			<ul>
				<li><a href="maritime.php">Maritime School</a></li>
				<li><a href="beijing.php">Beijing-Tianjin school</a></li>
				<li><a href="lingnan.php">Lingnan School</a></li>
				<li><a href="jinling.php">Jinling School</a></li>
				<li><a href="changan.php">Chang'an School</a></li>
			</ul>
		</div>

	</div>

	<!-------------------------- End of menu -------------------------->


	<!-------------------------- Start of introduction cell -------------------------->

	<br>

	<div id="intro">

		<div  class="intro_cell">
			<table id="intro_gallery">
				<tr>
					<td class="intro_text"><b>The Maritime School</b><br>The Maritime School was born in the late nineteenth century and flourished in the twentieth century. Shanghai at the end of the nineteenth century was not only a bridgehead for the Western colonizers to penetrate China, but also a point of convergence between Chinese and Western civilizations. For this reason, painters from all over the country gathered in Shanghai, creating the conditions for the formation of the School of Maritime Painting. <br><br>
						<button  type="submit" class="intro_button"><a href="maritime.php">READ MORE</a></button>
					</td>
					<td class="intro_img"><img src="imgs/intro/intro_img1.jpg"></td>
				</tr>
				<tr>
					<td class="intro_img"><img src="imgs/intro/intro_img2.jpg"></td>
					<td class="intro_text"><b>The Beijing-Tianjin School</b><br>The Beijing-Tianjin school of painting mainly refers to the painters in Beijing and Tianjin. Basically, it follows the painting ideology of the orthodox school of the Qing Dynasty, boasting the "Four Kings" of the Qing Dynasty and emphasizing the inheritance of ancient methods. <br><br>
						<button  type="submit" class="intro_button"><a href="beijing.php">READ MORE</a></button>
					</td>
				</tr>
				<tr>
					<td class="intro_text"><b>The Lingnan School</b><br>The Lingnan School is different from the above two schools of painting. It is the most systematic and influential school of painting after the rise of the Maritime School, and modern artists such as Xu Beihong and Fu Baoshi have been influenced by it to varying degrees. <br><br>
						<button  type="submit" class="intro_button"><a href="lingnan.php">READ MORE</a></button>
					</td>
					<td class="intro_img"><img src="imgs/intro/intro_img3.jpg"></td>
				</tr>
				<tr>
					<td class="intro_img"><img src="imgs/intro/intro_img4.jpg"></td>
					<td class="intro_text"><b>The Jinling School</b><br>The Jinling School refers to a group of painters living in the Nanjing area after the establishment of New China, who broke away from the ancient brushwork and ink, set new standards and distinguished themselves with strong national characteristics and a sense of the times, opening up a new generation of the modern school of landscape painting. <br><br>
						<button  type="submit" class="intro_button"><a href="jinling.php">READ MORE</a></button>
					</td>
				</tr>
				<tr>
					<td class="intro_text"><b>The Chang'an School</b><br>The Chang'an School is a group of painters gathered in Xi'an, Shaanxi Province, holding high the banner of "reaching out to tradition with one hand and to life with the other". They have extended their painting themes to ethnic minorities, idyllic landscapes, the vast grasslands of the western part of the country, the snow-covered Qilian Mountains, the sandy Gobi Desert, and the plateau of the great northwest. Their works are rough, poetic and touching in form. The main painters include He Haixia and Liu Wenxi. <br><br>
						<button  type="submit" class="intro_button"><a href="changan.php">READ MORE</a></button>
					</td>
					<td class="intro_img"><img src="imgs/intro/intro_img5.jpg"></td>
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