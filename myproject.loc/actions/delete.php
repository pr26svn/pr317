<body>
    <?php
        require("../models/db.php");
	require("../controllers/news.php");
	news::delete($_GET['id']);
    ?>
    <a href="/index.php">назад</a>
</body>
