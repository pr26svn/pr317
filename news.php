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
    <ul>
        <?php
            foreach ($news as $new):
        ?>
        <a href="new.php?id=<?=$new["id"]?>">
            <li>
                <?=$new["name"]?>
            </li>
        </a>
            <a href="delete.php?id=<?=$new["id"]?>">DEL</a>
        <?php
        endforeach;
        ?>
    </ul>
</body>
</html>
