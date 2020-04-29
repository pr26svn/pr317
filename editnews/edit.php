<?php
    require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
    require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
    if(isset($_POST["id"]))
    {
        news::updateNews(array($_POST["head"], $_POST["body"], $_POST["id"]));
    }
    $news = news::getByID($_GET["id"]);
?>
<form method="post">
    <label>Название новости</label>
    <input type="text" name="head" value="<?=$news["head"]?>"><br>
    <label>Содержание новости</label>
    <textarea name="body"><?=$news["body"]?></textarea>
    <input type="hidden" name="id" value="<?=$_GET["id"]?>"><br>
    <input type="submit" value="Сохранить">
    <a href="/index.php">Назад</a>
</form>
