<?php
    require_once("includes/config.php");
    require_once("includes/classes/PreviewProvider.php");
    require_once("includes/classes/Entity.php");

    if (!isset($_SESSION["userLoggedIn"])){
        header("Location: register.php");
    }

    $userLoggedIn = $_SESSION["userLoggedIn"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviBox</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>
<body>
    <div class = 'wrapper'></div>