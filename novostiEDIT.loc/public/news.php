<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Новости</title>
</head>
<body>
<?php
	require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
	require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
	if ($_GET["id"] != 0)
		news::delete($_GET["id"]);
	$newsList=news::getList();
?>
<table>
<tr><td>Номер</td><td>Заголовок</td><td>Описание</td><td>Действия</td></tr>
<?php foreach($newsList as $arNews):?>
		<tr>
<td><?=$arNews["id"];?></td>
<td><?=$arNews["Zagolovok"];?></td>
<td><?=$arNews["Opisanie"];?></td>
<td><a href="/news.php?id=<?=$arNews["id"];?>">
Удалить
</a><br/>
<a href="/editNews.php?id=<?=$arNews["id"];?>">
Изменить</a>
</td>
</tr>
<?php endforeach;?>
</table>
</body>
</html>