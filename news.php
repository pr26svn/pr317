<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
	$newsList = news::getList();
?>
<h2>Новости</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Название новости</td>
        <td>Действия</td>
    </tr>
    <?php foreach($newsList as $arNews):?>
        <tr>
            <td><?=$arNews["id"];?></td>
            <td><?=$arNews["name"];?></td>
            <td>
                <a href="/news.php?func=delete&id=<?=$arNews["id"];?>">Удалить</a><br/>
            </td>
        </tr>
    <?php endforeach;?>
</table>