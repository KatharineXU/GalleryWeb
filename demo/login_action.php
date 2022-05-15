<?php

$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

if (!empty($username) && !empty($password)) {//Whether the username or password empty
    $conn = mysqli_connect("localhost", "root", "root", "gallery"); 
    $sql = "SELECT username,password FROM usr_info WHERE username = '$username' AND password = '$password'"; 

    $ret = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($ret); //Whether the username or password correct

    if ($username == $row['username'] && $password == $row['password']) 
    {
        header("Location:update_painter.php"); //Jump to update_painter.php
        mysqli_close($conn);
    }else{ 
        //Wrong username or password
        echo "<script>alert(\"Wrong username or password\");parent.location.href='login.php';</script>";
    }
} else { 
    //username or password is empty
    echo "<script>alert(\"Username and password cannot be empty!\");parent.location.href='login.php';</script>";
} 

?>