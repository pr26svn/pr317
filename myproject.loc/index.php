<?php
require($_SERVER["DOCUMENT_ROOT"] . "/models/db.php");
require($_SERVER["DOCUMENT_ROOT"] . "/controllers/news.php");
if($_GET["id"] != 0){
    news::delete($_GET["id"]);
}
$newsList = news::getList();
?>
<html>
<head>
    <script>
        function onClick() {
            history.pushState(null, null, '/index.php')
        }
    </script>
</head>
<body onload="onClick()">
<h1>Новости</h1>
<?php foreach ($newsList as $arNews): ?>
    <h3><?= $arNews["name"]; ?></h3>
    <div id="news-<?= $arNews["id_news"]; ?>">
        <?= $arNews["description"]; ?>
    </div>
    <a title="удалить" href="index.php?id=<?= $arNews["id_news"]; ?>" onclick="onClick()">Удалить</a>
    <a title="редактировать" href="/actions/editNews.php?id_news=<?= $arNews["id_news"]; ?>">Редактировать</a>
<?php endforeach; ?>
</body>
</html>
