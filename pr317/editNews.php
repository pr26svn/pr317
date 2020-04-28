<?php
	require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
	require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

	if(isset($_POST["id"]))
		$news=news::updateNews($_POST["id"], $_POST);
		$newsList=news::getByID($_GET["id"]);
?>
<form method="POST">
	<input type="text" name="name" value="<?=$newsList["name"]?>">
	<input type="hidden" name="id" value="<?=$_GET["id"];?>">
	<button type="sumbit" style="width: 50px; height: 20px">ОК</button>
</form>