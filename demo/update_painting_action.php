<?php

$paintingCN=isset($_POST['paintingCN']) ? $_POST['paintingCN'] : "";
$paintingEN=isset($_POST['paintingEN']) ? $_POST['paintingEN'] : "";
$painterCN=isset($_POST['painterCN']) ? $_POST['painterCN'] : "";
$painterEN=isset($_POST['painterEN']) ? $_POST['painterEN'] : "";
$school=isset($_POST['school']) ? $_POST['school'] : "";
$paintingURL=isset($_POST['paintingURL']) ? $_POST['paintingURL'] : "";

$conn=new mysqli("localhost", "root", "root", "gallery"); 
$sql = "INSERT INTO painting_info (paintingCN,paintingEN,painterCN,painterEN,school,paintingURL) 
    VALUES ('paintingCN','paintingEN','$painterCN', '$painterEN', 'school','$paintingURL')";

if (mysqli_query($conn,$sql)) {
    echo "<script>alert(\"Update successfully!\");parent.location.href='works.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>