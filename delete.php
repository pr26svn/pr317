<?php
if(!isset($_GET["id"])){
    header("Location: news.php");
    exit();
}
$id = $_GET['id'];
require ($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require ($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

news::deleteById($id);
header("Location: news.php");
?>