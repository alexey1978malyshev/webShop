<?php
include('../main/menu.php') ;
include('../header.php') ;
include('../footer.php') ;
?><!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NYM 3*1,5</title>
  <link rel="stylesheet" href="styles/styles_1.css">
</head>
<?php get_header(); ?>
<body>
<h2 class="describeTitles">Описание товара:</h2>
<div class="describeAndImage">
    <div class="image">
        <a href="../img/nym3х1,5.jpeg" target="_blank"><img src="../img/nym3х1,5.jpeg" width="350" height="" alt="кабель NYM 3*1.5" title="кабель NYM 3*1.5"></a>
    </div>
    <div class="shortDescribeText">
        <p><b>Силовой кабель NYM</b> представляет собой кабельное изделие, которое широко используется в стационарных <br>
            электросиловых, а также осветительных промышленных и бытовых сетях с напряжением до 0,66 кВ на частотах 50 Гц.<br>
    </div>
    <form action="bin.php" >
    <div class="btnBuy">
        <input type="submit" value="Купить">
    </div>
    </form>
</div>
    <h2 class="describeTitles">Характеристики товара:</h2>

<ol class="productFeatures">
  <li>Наружный диаметр -9мм;</li>
  <li>Вес - 140 кг/км;</li>
  <li>Диаметр токопроводящей жилы - 1,35мм;</li>
  <li>Максимальный длительный ток - 19А;</li>
</ol>

<p class="productFeatures">Расшифровка маркировочного обозначения:</p>
<ul class="productFeatures">
  <li >N – соответствие немецкому стандарту классификации кабельных изделий Normenleitung,</li>
  <li>Y – изоляционный слой выполнен из поливинилхлорида (ПВХ-пластиката),</li>
  <li>M – возможен монтаж в разных условиях.</li>
</ul>
<hr>
<table class="tabProductFeatures" border="1" cellpadding="4" cellspacing="0"><caption>Технические характеристики товара:</caption>
  
  
    <tr>
      <td>Наружный диаметр, мм</td>
      <td>Вес, кг/км</td>
      <td>Диаметр токопроводящей жилы, мм</td>
      <td>Максимальный длительный ток, A</td>
    
    </tr>
    <tr>
      <td>9</td>
      <td>140</td>
      <td>1.35</td>
      <td>19</td>
    </tr>  
</table>


<h2 class="describeTitles">Подробное описание товара:</h2>

  <p class="describeText">Монтаж силового кабеля NYM возможен как внутри сухих, влажных, мокрых помещений, так и на открытом<br>
  пространстве, при условии соблюдения достаточного уровня защищенности от механических повреждений и солнечного <br>
  ультрафиолета (в кабель-каналах, металлорукавах или гофротрубах). Допускается прокладка провода под штукатуркой или <br>
  поверх нее, в кладке из кирпича или в бетоне. Категорически запрещена прямая запрессовка кабеля в штампованный или <br>
  виброзасыпной бетон.
     Дополнительно на изоляции провода должно присутствовать обозначение VDE, которое свидетельствует о том, что <br>
кабель произведен по германскому отраслевому стандарту Veiband Deutscher Electrotechniker 0250 и допускается к применению<br>
в зонах с повышенным риском возникновения пожаров, например, в деревянных постройках. </p>
<hr>
<?php get_footer(); ?>
</body>
</html>
