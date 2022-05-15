<?php

$painterCN=isset($_POST['painterCN']) ? $_POST['painterCN'] : "";
$painterEN=isset($_POST['painterEN']) ? $_POST['painterEN'] : "";
$school=isset($_POST['school']) ? $_POST['school'] : "";
$portraitURL=isset($_POST['portraitURL']) ? $_POST['portraitURL'] : "";
$intro=isset($_POST['intro']) ? $_POST['intro'] : "";

$conn=new mysqli("localhost", "root", "root", "gallery"); 
$sql = "INSERT INTO painter_info (painterCN,painterEN,school,portraitURL,intro) 
	VALUES ('$painterCN', '$painterEN', 'school','$portraitURL','intro')";

if (mysqli_query($conn,$sql)) {
    echo "<script>alert(\"Update successfully!\");parent.location.href='artists.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>