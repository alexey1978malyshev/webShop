<?php
include('../main/menu.php');
include('../header.php') ;
include('../footer.php') ;
?><!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>выключатель 1кл.</title>
 <link rel="stylesheet" href="styles/styles_1.css">


</head>

<?php get_header(); ?>
<body>
<h2 class="describeTitles">Описание товара:</h2>
<div class="describeAndImage">
  <div class="image">
    <a href="../img/switcher1.webp" target="_blank" ><img src="../img/switcher1.webp" width="350" height="" alt="выключатель 1кл." title="выключатель 1кл."></a>
  </div>
  <div class="shortDescribeText">
    <b>Одноклавишный выключатель</b>  - коммутационное устройство, <br>
    позволяющие включать или выключать <br>
    электрические приборы различного назначения.
  </div>
  <form action="bin.php" >
    <div class="btnBuy">
      <input type="submit" value="Купить">
    </div>
  </form>
</div>
<h2 class="describeTitles">Характеристики товара:</h2>
<p class="productFeatures">К основным техническим характеристикам одноклавишных выключателей бытового назначения относят: </p>
<ol class="productFeatures">
  <li>рабочее напряжение: 220-250 В;</li>
  <li>номинальный ток: от 4 до 16 А;</li>
  <li>степень защиты от проникновения твердых частиц и жидкости;</li>
  <li>механическую прочность;</li>
  <li>диапазон температур, в котором производитель гарантирует бесперебойную работу устройства;</li>
</ol>
<hr>
<table class="tabProductFeatures" border="1" cellpadding="4" cellspacing="0"><caption>Технические характеристики товара:</caption>
  
    <tr>
      <td>Рабочее напряжение, В</td>
      <td>Номинальный ток, А</td>
      <td>Степень защиты,IP</td>
      
    
    </tr>
    <tr>
      <td>220</td>
      <td>10</td>
      <td>31</td>
      
    </tr>  
</table>
<hr>


<h2 class="describeTitles">Подробное описание товара:</h2>

<p class="describeText">Конструктивно одноклавишный выключатель состоит из четырех основных частей: </p>
<ul class="describeText">
  <li>основания (металлического, реже пластикового)</li>
  <li>рабочего механизма, состоящего из контактной группы, зажимов (для присоединения электрических проводов) и элементов крепления</li>
  <li>клавиши</li>
  <li>защитного декоративного элемента (рамки или корпуса)</li>
</ul>

<hr>
<?php get_footer(); ?>
</body>
</html>
