<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

if(isset($_POST['id']))
    $news=news::update($_POST['id'], $_POST);
    $newsList=news::getByID($_GET['id']);
?>
<a href="news.php"><h2>Назад</h2></a>
<form method="POST" style="display: inline-grid">
    <label for="text">Название</label>
    <input type="text"  name="name" value="<?=$newsList['name']?>">
    <label for="text">Контекст</label>
    <textarea name="context" ><?=$newsList['context']?></textarea>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <button type="submit" style="margin:10px">Отправить</button>
</form>
