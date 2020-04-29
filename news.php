
<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
$newsList=news::getList();
?>
<style>
            table {
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                text-align: left;
                border-collapse: separate;
                border-spacing: 5px;
                background: #ECE9E0;
                color: #656665;
                border: 16px solid #ECE9E0;
                border-radius: 20px;
            }
            th {
                font-size: 18px;
                padding: 10px;
            }
            td {
                background: #F5D7BF;
                padding: 10px;
            }
        </style>
<table>
    <tr><td>ID</td><td>Название новости</td><td>Действия</td></tr>
    <?php foreach($newsList as $arNews):?>
        <tr>
            <td><?=$arNews["id"];?></td>
            <td><?=$arNews["name"];?></td>
            <td><a href="/models/delete.php?id=<?=$arNews["id"];?>">
                    Удалить
                </a><br/>
                <a href="/models/editNews.php?id=<?=$arNews["id"];?>">
                    Изменить</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
