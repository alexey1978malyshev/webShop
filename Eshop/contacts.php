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
  <title>Контакты</title>
  <link rel="stylesheet" href="styles/styles_1.css">
</head>
<?php get_header(); ?>
<body>
<hr>
<h3>Напишите нам!</h3>
<form action="../index.php" >
  <fieldset>
    <legend>Страница регистрации</legend>
    <input type="text" size="30" placeholder="Ваше Имя">
    <lable>Пароль:</lable>
    <input type="password" size="8">
    <label for="email"> Ваш Email:</label>
    <input type="email" class="emailstyle" placeholder="Email"><br>
    <lable>Пол:</lable><br>
    <lable>М</lable>
    <input type="radio" name="radio"><br>
    <lable>Ж</lable>
    <input type="radio" name="radio"><br>
    <lable>Иное</lable>
    <input type="radio" name="radio"><br>
    <input type="checkbox" checked="checked">
    <input type="file">
    <input type="submit" value="Сохранить">
    <input type="reset" value="Очистить">

  </fieldset>
  <fieldset>
    <legend>Введиите сообщение</legend>
    <textarea cols="40" rows="5" name="text" placeholder="Введите сюда сообщение"></textarea>
    <input type="submit" value="Отправить">
  </fieldset>
</form>
<h4>Адрес: </h4>
<ul>
  <li><b>Наш телефон:</b> &nbsp;&nbsp;8-812-992-17-02</li>
  <li><b>Мы находимся по адресу:</b>&nbsp;&nbsp; г.Санкт-Петербург,пр.Энергетиков, д.37</li>
  <li><b>Email:</b>&nbsp;&nbsp;electroDom@electroDom.ru</li>
</ul>
<a href="https://yandex.ru/maps/?um=constructor%3A35423826f7187afc6cd72fc7e3a89b4f3879d1fd33aea0dfa5abd1cf9e358837&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A35423826f7187afc6cd72fc7e3a89b4f3879d1fd33aea0dfa5abd1cf9e358837&amp;width=374&amp;height=100&amp;lang=ru_RU" alt="" style="border: 0;" /></a>


<hr>
<?php get_footer(); ?>
</body>
</html>
