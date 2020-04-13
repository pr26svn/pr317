<?php
require ($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require ($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

$news = news::getList();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Вывод новостей</title>
</head>
<body>
    <ul>
        <?php
            foreach ($news as $new):
        ?>
        <a href="new.php?id=<?=$new["id"]?>">
            <li>
                <?=$new["name"]?>
            </li>
        </a>
        <?php
        endforeach;
        ?>
    </ul>
</body>
</html>
