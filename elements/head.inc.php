<?php 
Conection :: openConection();
$totalUsers = userRepository :: getUserCount(Conection::getConection());
Conection :: closeConection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelisBoom 💥</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&family=Lemonada:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div id="superContainer" class="">