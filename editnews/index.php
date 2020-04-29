<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
if ($_GET["id"] != 0):
    news::deleteNews($_GET["id"]);
endif;
$newsList=news::getList();
?>

<table>
    <tr>
        <td>Заголовок</td>
        <td>Описание</td>
        <td>Удалить</td>
    </tr>
    <?foreach($newsList as $arNews):?>
        <tr>
            <td><?=$arNews["head"];?></td>
            <td><?=$arNews["body"];?></td>
            <td>
                <a href="/index.php?id=<?=$arNews["id"];?>">Удалить</a>
                <a href="/edit.php?id=<?=$arNews["id"];?>">Изменить</a>
            </td>
        </tr>
    <?endforeach;?>
</table>