<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

if(isset($_POST['id']))
    $news=news::update($_POST['id'], $_POST);
    $newsList=news::getByID($_GET['id']);
?>
<a href="news.php"><h2>Назад</h2></a>
<form method="POST">
    <label for="text">Название</label></br>
    <input type="text"  name="name" value="<?=$newsList['name']?>"></br>
    <label for="text">Контент</label></br>
    <textarea name="content" ><?=$newsList['content']?></textarea></br>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <button type="submit">Отправить</button>
</form>
