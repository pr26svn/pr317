<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
$newsList=news::getList();
?>
 <table border="0">
 <tr><td><b>ID</b></td><td><b>Название новости</b></td><td><b>Действия</b></td></tr>
 <?php foreach ($newsList as $arNews):?>
 <tr>
 	<td><?=$arNews['id'];?></td>
 	<td><?=$arNews['name'];?></td>
 	<td><a href="/controllers/delete.php?id=<?=$arNews["id"];?>">Удалить</a><br/>
 	<td><a href="/controllers/edit.php?id=<?=$arNews["id"];?>">Редактировать</a><br/>
 	</td>
 </tr>
 <?php endforeach;?>
</table>