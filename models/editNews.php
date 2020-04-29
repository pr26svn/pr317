<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

$idNews = $_GET["id"];
$newsList = news::getByID($idNews);
//var_dump($_POST);
if(isset($_POST["id"])){
    news::edit($_POST["id"], $_POST["name"], $_POST["theme"]);
    //header("location: /news.php");
}
?>
<h2>Редактирование</h2>
<form action="/models/editNews.php" method="POST">
    <input type="hidden" name="id" value="<?=$newsList['id'];?>">
<p>Название новости
    <input type="text" name="name" value="<?=$newsList['name'];?>">
</p>
<p>Описание новости
    <input type="text" name="theme" value="<?=$newsList['theme'];?>">
</p>
 
    <p><input type="submit" name="edit" value="Редактировать"></p>
<a href="../news.php">Назад</a>

</form>