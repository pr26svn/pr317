<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/db.php");
require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
$newsList=news::getList();
?>
<html>
    <head>
        <title>Новости</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>
    <body onload="onload()">
    <div class="">
        <div id="content">
            <div id="news-block">
                <h1>Новости</h1>
                <?php foreach($newsList as $arNews):?>
                    <div class="news-single">
                        <div class="news-header-block">
                            <h3 class="news-header"><?=$arNews["name"];?></h3>
                            <div class="buttons-panel">
                                <a title="удалить" class="del-button news-buttons" href="actions/delete.php?id=<?=$arNews["id"];?>"></a>
                                <a title="изменить" class="corr-button news-buttons" href="actions/edit.php?id=<?=$arNews["id"];?>"></a>
                            </div>
                        </div>
                        <div class="news-description"  id="news-num-<?=$arNews["id"];?>">
                            <?=$arNews["description"];?>
                        </div>
                        <button class="show-button" onclick="switch_text('news-num-<?=$arNews["id"];?>', this)">Читать далее...</button>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    </body>
</html>
