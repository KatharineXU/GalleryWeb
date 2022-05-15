<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title title="Enjoy Chinese Art!">Baoshi Fu</title>
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

	<div class="artist_slide">
		<div class="slide_name">
			<h1>Baoshi Fu ｜ 傅抱石</h1>
		</div>
		<div class="slide_portrait">
			<img src="imgs/portrait/p_Jinling/FuBaoshi.jpg">
		</div>
		<div class="slide_des">
			<p>Chinese name: 傅抱石 (Baoshi Fu)</p>
			<p>Alias: Changsheng, Ruiling</p>
			<p>School of painting: New Jinling School of Painting</p>
			<p>Nationality: China</p>
			<p>Nation: Han</p>
			<p>Birthplace: Nanchang, Jiangxi</p>
		</div>
		<div class="slide_des">
			<p>Date of birth: 25-10-1904</p>
			<p>Date of death: 29-9-1965</p>
			<p>School: Jiangxi First Normal School</p>
			<p>Career: Painter</p>
			<p>Representative works: <i>On the Vagina of the Mountain</i>, <i>Zhong Kui</i>, <i>Qu Yuan</i>, <i>Such a Beautiful River and Mountain</i></p>
			<p>Main achievements: Theory and creation of Chinese painting, Baoshi's Style of Painting</p>
		</div>

	</div>

	<!----------------- End of slide ----------------->

	<!----------------- start of introduction/blog ----------------->

	<div class="blog">

		<div class="blog_text">
			<p class="blog_en">Fu Baoshi (October 5, 1904 - September 29, 1965), formerly known as Changsheng, Ruilin, No. Baoshi Zhai master, born in Nanchang, Jiangxi, Jiangxi Xinyu, ancestral home, modern painter, "new landscape painting" on behalf of the painter. He studied in Japan in his early years and taught at Central University after returning to China, and after 1949 he was a professor at Nanjing Normal College and the director of Jiangsu National Painting Institute.
			<br><br>
			He was good at painting landscapes, and in his middle age, he created the "Baishi Chao", with loose brushwork and boldness, and was especially good at making scenes of waterfalls and rain; in his later years, he made many large paintings, with a strong sense of the times. In his later years, he painted many large paintings with a strong sense of the times. He is the author of "A Study of Ancient Chinese Painting" and "Outline of the History of Changes in Chinese Painting".
			<br></p>
			<p class="blog_cn">傅抱石（1904年10月5日—1965年9月29日），原名长生、瑞麟，号抱石斋主人，生于江西南昌，祖籍江西新余，现代画家，“新山水画”代表画家 。早年留学日本，回国后执教于中央大学。1949年后曾任南京师范学院教授、江苏国画院院长等职。<br><br>
			他擅画山水，中年创为“抱石皴”，笔致放逸，气势豪放，尤擅作泉瀑雨雾之景；晚年多作大幅，气魄雄健，具有强烈的时代感。人物画多作仕女、高士，形象高古。著有《中国古代绘画之研究》《中国绘画变迁史纲》等。<br><br></p>
		</div>
		
	</div>

	<!----------------- End of introduction/blog ----------------->

	<!----------------- start of menu ----------------->
	<div id="painting_list">
		<p class="list_title">His / Her Works</p>

		<div id="painting">

			<?php
				$conn=new mysqli("localhost","root","root","gallery");
				$sql="SELECT * FROM painting_info WHERE painterEN='Baoshi Fu'";
				$dbRecords=mysqli_query($conn,$sql)
					or die("Problem reading table: ".mysqli_error());
				while ($record=mysqli_fetch_row($dbRecords)){
			?>
			<a href="<?php echo str_replace(' ','',$record[2]) ?>.php">
				<div class="painting_cell">
					<div class="painting_img">
						<img src="<?php echo $record[6] ?>">
					</div>

					<div class="painting_text">
						<p class="painting_name"><b><i><?php echo $record[2] ?></i></b> (<?php echo $record[1] ?>)</p>
						<p>BY <?php echo $record[4] ?></p>
						<p><?php echo $record[5] ?></p>
					</div>

				</div>
			</a>

			<?php
				}
			?>


		</div>
	</div>

	<!----------------- End of menu ----------------->


	

</body>

<!----------------- Start of footer ----------------->
<?php 
	include('website_footer.php')
?>
<!----------------- End of footer ----------------->

</html>