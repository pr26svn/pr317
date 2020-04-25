<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET["id"])) {
        header("Location: news.php");
        exit();
    }
    $id = $_GET['id'];
    require($_SERVER["DOCUMENT_ROOT"] . "/models/db.php");
    require($_SERVER["DOCUMENT_ROOT"] . "/controllers/news.php");

    $new = news::getByID($id);
}else{
    if (!isset($_POST["id"])) {
        header("Location: news.php");
        exit();
    }
    require($_SERVER["DOCUMENT_ROOT"] . "/models/db.php");
    require($_SERVER["DOCUMENT_ROOT"] . "/controllers/news.php");
    $id = $_POST['id'];

    news::updateNewsById($id,$_POST['name'],$_POST['body']);
    header("Location: news.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Редактирование новости
        </title>
    </head>
    <body>
        <form action="editNews.php" method="post">
            <input type="hidden" name="id" value="<?=$new['id']?>">
            <label for="name">
                Название:
            </label>
            <input type="text" style="width: 500px;" name="name" value="<?=$new['Zagolovok']?>" id="name"><br>
            <label for="body">
                Контент:
            </label>
            <textarea style="width: 500px;height: 500px;" name="body" id="body"><?=$new['Opisanie']?></textarea><br>
            <a href="/news.php"><button><= Назад</button></a>
            <input type="submit">
        </form>
    </body>
</html>