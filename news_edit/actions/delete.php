<head>
    <title>Удаление новости</title>
    <link rel="stylesheet" href="../css/delete.css">
</head>
<body>
    <?php
        require("../models/db.php");
        require("../controllers/news.php");
        news::delete($_GET['id']);
    ?>
    <p class="text" style="">новость успешно удалена</p>
    <a class="text link" href="/index.php" style="">назад</a>
</body>
