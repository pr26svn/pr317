<?php
require ($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require ($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

$news = news::getList();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Вывод новостей</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <?php
            foreach ($news as $new):
        ?>
            <div class="news">
                <a href="new.php?id=<?=$new["id"]?>">
                    <div class="title">
                        <?=$new["name"]?>
                    </div>
                </a>
                <div class="actions">
                    <a href="delete.php?id=<?=$new["id"]?>"><img src="images/trash.png"></a>
                    <a href="edit.php?id=<?=$new["id"]?>"><img src="images/pencil.png"></a>
                </div>
            </div>
        <?php
        endforeach;
        ?>
</body>
</html>
