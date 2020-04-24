<?php
    require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
    require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

    $news = news::updateNews($_POST["id"], $_POST);
    $newsList = news::getByID($_GET["id"]);
?>

    <form method="post">

        <label>Название новости</label>
        <input type="text" name="name" value="<?=$newsList["name"]?>">
        <br>
        <label>Содержание новости</label>
        <input type="text" name="content" value="<?=$newsList["content"]?>">
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <br>
        <input type="submit" value="Сохранить">
        <a href="/news.php">Назад</a>
    </form>
