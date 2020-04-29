<?php
require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
DB::deleteNews($_GET['id']);
?>
<b>Запись удалена!</b>
<br><a href="/news.php">Назад</a>