<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "urdi"; 

    $con = mysqli_connect("$host","$username","$password","$database");

    if(!$con){
        header("Location: ./error.php");
        echo "Connection error!";
        die();
    }
    // echo "Connected successfully!";
?>