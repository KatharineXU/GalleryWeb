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

	<!----------------- start of menu ----------------->

	<div id="painting">

		<?php
			$conn=new mysqli("localhost","root","root","gallery");
			$sql="SELECT * FROM painting_info";
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

	<!----------------- End of menu ----------------->




</body>

<!----------------- Start of footer ----------------->
<?php 
	include('website_footer.php')
?>
<!----------------- End of footer ----------------->

</html>

<?php
mysqli_close($conn);
?>