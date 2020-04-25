<?php
require("../models/db.php");
require("../controllers/news.php");
if(isset($_POST["id"]))
{
    $news=news::update ($_POST["id"], $_POST);
}
$newsList=news::getByID ($_GET["id"]);
?>
<head>
    <title>Изменение новости</title>
    <link rel="stylesheet" href="../css/edit.css">
</head>
<body style="font-family: 'Century Gothic';">
<div class="content">
    <form method="POST">
        <div>
            <input type="hidden" name="id" value="<?=$_GET["id"];?>">
            <input class="txt-input" placeholder="Заголовок новости..." style="margin-bottom: 10px;" type="text" name="name" value="<?=$newsList["name"]?>">
        </div>
        <div>
            <textarea class="txt-input" placeholder="Текст новости..." name="description" ><?=$newsList["description"]?></textarea>
        </div>
        <div class="btns">
            <input class="button" type="submit" value="Сохранить">
            <a class="button" href="/index.php">Назад</a>
        </div>
    </form>
</div>
</body>