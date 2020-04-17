<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
if ($_GET["id"] != 0):
    news::delNews($_GET["id"]);
endif;
$newsList=news::getList();
?>

<table>
    <tr>
        <td>ID</td>
        <td>Название новости</td>
        <td>Действия</td>
    </tr>

    <?foreach($newsList as $arNews):?>
        <tr>
            <td><?=$arNews["id"];?></td>
            <td><?=$arNews["name"];?></td>
            <td>
                <a href="/news.php?id=<?=$arNews["id"];?>">
                    Удалить
                </a>
            </td>
        </tr>
    <?endforeach;?>
</table>