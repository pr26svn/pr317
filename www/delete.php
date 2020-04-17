<body>
    <?php
        require($_SERVER["DOCUMENT_ROOT"]."/db.php");
        DB::deleteNews($_GET['id']);
        echo ("<p>новость успешно удалена</p>");
    ?>
    <a href="/index.php">назад</a>
</body>
