<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

if(isset($_GET['id']) && $_GET['id'] != 0)
{
    news::delete($_GET['id'] );
}

header("Location: news.php");