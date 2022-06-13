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
  <title>Розетка</title>
  <link rel="stylesheet" href="styles/styles_1.css">
</head>
<?php get_header(); ?>
<body>
<h2 class="describeTitles">Описание товара:</h2>
<div class="describeAndImage">
    <div class="image">
      <a href="../img/розетка.webp" target="_blank"><img src="../img/розетка.webp" width="350" height="" alt="Розетка DIN" title="Розетка DIN"></a>
    </div>
    <div class="shortDescribeText">
      <b>Розетка штепсельная</b> DIN РДЕ-47 <br> EKF PROxima (mdse-47-pro)
    </div>
    <form action="bin.php" >
      <div class="btnBuy">
        <input type="submit" value="Купить">
      </div>
    </form>
</div>
<h2 class="describeTitles">Характеристики товара:</h2>
<p  class="productFeatures">
  Розетка для установки на DIN-рейку  предназначена для установки в распределительный щит и служит для подключения переносного<br>
  светильника или электрического инструмента малой мощности во время профилактических и ремонтных работ в электрической <br>
  сборке по месту установки.
</p>
<hr>
<table class="tabProductFeatures" border="1" cellpadding="4" cellspacing="0"><caption>Технические характеристики товара:</caption>
  
  
    <tr>
      <td>Номинальное напряжение, В</td>
      <td>Количество полюсов, шт</td>
      <td>Максимальный длительный ток, A</td>
    
    </tr>
    <tr>
      <td>220</td>
      <td>3</td>
      <td>16</td>
    </tr>  
</table>



<h2 class="describeTitles">Подробное описание товара:</h2>

  <p class="describeText">Дополнительные устройства PROxima – это новое поколение устройств, в которые внедрены все самые инновационные разработки<br>
    в области электротехники. Образцы данной серии имеют уникальный дизайн и множество преимуществ перед изделиями предыдущих <br>
    серий. Дополнительное оборудование PROxima предназначено для работы только с модульной автоматикой аналогичной серии. <br>
    Не предназначено для работы с автоматическими выключателями ВА 47-125 и выключателями нагрузки ВН-125.  <br>
    Корпуса изготовлены из пластмассы, не поддерживающей горение. Унификация всех дополнительных устройств. Литая лицевая панель. <br>
    Использование светодиодной лампы вместо неоновой (ЛС-47, ЛСФ-47). Увеличенная жесткость за счет применения шести заклепок <br>
    на корпусе. Оптимизация габаритов изделий (ЛС-47) – экономия места в щитке</p>
<hr>
<?php get_footer(); ?>
</body>
</html>
