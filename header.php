<?php
session_start(); // basic authentication 
//print_r($_SESSION); // prints array of session variable and its value, after initialisation
if (isset($_SESSION['user'])!="mints") {
    header("location:login.php"); // redirects to login.php if session variable is not correct
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Depository</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <a href="index.php">Home</a> |
            <a href="depository.php">Depository</a> |
            <a href="close.php">Close</a>
        <br>
        
    