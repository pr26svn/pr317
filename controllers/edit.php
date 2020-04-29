<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

$idNews = $_GET["id"];
$newsList = news::getByID($idNews);
if(isset($_POST["id"])){
	news::edit($_POST["id"], $_POST["name"]);
	header("location: /news.php");
}
?>
<h2>Изменение новости</h2>
<form action="/controllers/edit.php" method="POST">
	<input type="hidden" name="id" value="<?=$newsList['id'];?>">
	<input type="text" name="name" value="<?=$newsList['name'];?>">
	<input type="submit" name="edit" value="Редактировать">
</form>