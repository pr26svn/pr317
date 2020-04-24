<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

$idNews = $_GET["id"];
$newsList = news::getByID($idNews);
//var_dump($_POST);
if(isset($_POST["id"])){
	news::edit($_POST["id"], $_POST["name"], $_POST["theme"], $_POST["body"]);
	header("location: /news.php");
}
?>
<h2>Редактирование</h2>
<form action="/models/edit.php" method="POST">
	<input type="hidden" name="id" value="<?=$newsList['id'];?>">
	<input type="text" name="name" value="<?=$newsList['name'];?>">
	<input type="text" name="theme" value="<?=$newsList['theme'];?>">
	<input type="text" name="body" value="<?=$newsList['body'];?>">
	<input type="submit" name="edit" value="Редактировать">
</form>