<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
DB::deleteNews($_GET['id']);
?>
<br><a href="/news.php">Вернуться к таблице</a>

