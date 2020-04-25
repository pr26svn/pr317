<?php
require($_SERVER["DOCUMENT_ROOT"] . "/models/db.php");
require($_SERVER["DOCUMENT_ROOT"] . "/controllers/news.php");
$newsList = news::getList();
?>
<html>
<body>
<h1>Новости</h1>
<?php foreach ($newsList as $arNews): ?>
    <h3><?= $arNews["name"]; ?></h3>
    <div id="news-<?= $arNews["id_news"]; ?>">
        <?= $arNews["description"]; ?>
    </div>
    <a title="удалить" href="/actions/delete.php?id=<?= $arNews["id_news"]; ?>">Удалить</a>
    <a title="редактировать" href="/actions/editNews.php?id_news=<?= $arNews["id_news"]; ?>">Редактировать</a>
<?php endforeach; ?>
</body>
</html>
