<?php
include('../main/menu.php');
include('../main/functions.php');
include('../header.php') ;
include('../footer.php') ;
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles_1.css">
    <title>Корзина</title>

</head>
<?php get_header(); ?>
<h1><b><strong>Вы попали в корзину:)</strong></b></h1>
<body>
    <div class="bin">
       <div class="binImage">
       </div><!-- <img src="../img/binImage.png" alt="корзина">-->
    </div>
    <hr>
    <hr>
</body>
<?php get_footer(); ?>
</html>