<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "portfolio";

//Config
$connection = mysqli_connect($server, $user, $password, $database);


//Get data from contact form
if (isset($_POST["submit"])) {
    $name =  $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql_command = "INSERT INTO `contact`(`id`, `name`, `email`, `message`) 
    VALUES (NULL,'$name','$email','$message')";

    if (mysqli_query($connection, $sql_command)) {
        echo "Your message has been sent :)<br><br>";
    }
}
