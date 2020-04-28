<?php
	require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
	require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

	if(isset($_GET["id"]) && $_GET["id"] != 0)
	{
    	news::deleteNews($_GET["id"]);
	}