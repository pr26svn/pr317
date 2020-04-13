<?php
if(!isset($_GET["id"])){
    header("Location: news.php");
    exit();
}
$id = $_GET["id"];
require ($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require ($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
$new = news::getByID($id);
if(!$new){
    header("Location: news.php");
    exit();
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Вывод новостей</title>
</head>
<body>
<h1>
    <?=$new["name"]?>
</h1>
<p><?=$new["body"]?></p>
</body>
</html>

