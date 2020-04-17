<?php
require($_SERVER["DOCUMENT_ROOT"] . "/db.php");
require($_SERVER["DOCUMENT_ROOT"] . "/news.php");
$newsList = news::getList();
?>
<html>
<body onload="onload()">
<h1>Новости</h1>
<?php foreach ($newsList as $arNews): ?>
    <h3><?= $arNews["Название"]; ?></h3>
    <div id="news-num-<?= $arNews["id_news"]; ?>">
        <?= $arNews["Описание"]; ?>
    </div>
    <a title="удалить" href="/delete.php?id=<?= $arNews["id_news"]; ?>">Удалить</a>
<?php endforeach; ?>
</body>
</html>
