<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
$newsList=news::getList();
?>
 <table border="1">
 <tr><td><b>ID</b></td><td><b>Название новости</b></td><td><b>Тема</b></td><td><b>Содержание</b></td><td><b>Действия</b></td></tr>
 <?php foreach ($newsList as $arNews):?>
 <tr>
 	<td><?=$arNews['id'];?></td>
 	<td><?=$arNews['name'];?></td>
 	<td><?=$arNews['theme'];?></td>
 	<td><?=$arNews['body'];?></td>
 	<td><a href="/models/delete.php?id=<?=$arNews["id"];?>">удалить</a><br/>
 	<td><a href="/models/edit.php?id=<?=$arNews["id"];?>">редактировать</a><br/>
 	</td>
 </tr>
 <?php endforeach;?>
</table>