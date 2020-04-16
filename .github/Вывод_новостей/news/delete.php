<body>
    <?php
        require($_SERVER["DOCUMENT_ROOT"]."/db.php");
        echo(DB::deleteNews($_GET['id'])."<p style=\" position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%);\">О нет, вы удалили новость!</p>");
    ?>

    <a href="/index.php" style="text-decoration: none; color: black; font-size: 200%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">назад</a>
</body>
