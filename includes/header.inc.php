<?php 
    require 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php
        if (isset($_GET['fontSize'])) {
            if ($_GET['fontSize'] == 'sm') {
                echo '<link rel="stylesheet" href="css/smfont.css">';
            } else if ($_GET['fontSize'] == 'lg') {
                echo '<link rel="stylesheet" href="css/lgfont.css">';
            }
        }
    ?>
    <title>Project 2 - Iosif Livadaru</title>
</head>
<body class=" <?php dark(); ?>">
<div class="container">
