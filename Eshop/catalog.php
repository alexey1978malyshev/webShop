<?php
include('../main/menu.php') ;
include('../main/functions.php') ;
include('../header.php') ;
include('../footer.php') ;
?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Каталог</title>
  <link rel="stylesheet" href="styles/styles_1.css">

</head>
<<?php get_header(); ?>
<body>

<hr>
<h2><b>Каталог</b></h2>
<input type="text" size="20" placeholder="Поиск товара"><br>
<div class="items">
  <div class="item1">
    <img src="../img/preview/nym3х1,5_preview.gif" width="100" height="" alt="кабель NYM 3*1.5" title="кабель NYM 3*1.5"><br>
    <a href="cable_NYM_3х1,5.php">Подробнее..</a>
  </div>
  <div class="item2">
    <img src="../img/preview/розетка.webp" width="100" height="" alt="розека DIN" title="розека DIN"><br>
    <a href="socket.php">Подробнее..</a>
  </div>
  <div class="item3">
    <img src="../img/preview/switcher1.webp" width="100" height="" alt="выкючатель 1кл." title="выкючатель 1кл."><br>
    <a href="switcher.php">Подробнее..</a>
  </div>
</div>
<hr>
<?php get_footer(); ?>
</body>
</html>
