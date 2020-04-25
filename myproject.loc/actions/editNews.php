<?php
require("../models/db.php");
require("../controllers/news.php");
if(isset($_POST["id_news"]))
{
    $news=news::update ($_POST["id_news"], $_POST);
}
$newsList=news::getByID ($_GET["id_news"]);
?>
<head>
    <title>Изменение новости</title>
</head>
<body>
<div>
    <form action="editNews.php" method="POST">
        <div>
            <input type="hidden" name="id_news" value="<?=$_GET["id_news"];?>">
            <input placeholder="Заголовок новости..." style="margin-bottom: 10px;" type="text" name="name" value="<?=$newsList["name"]?>">
        </div>
        <div>
            <textarea placeholder="Текст новости..." name="description" ><?=$newsList["description"]?></textarea>
        </div>
        <div class="btns">
            <input type="submit" value="Сохранить">
            <a href="/index.php">Назад</a>
        </div>
    </form>
</div>
</body>
