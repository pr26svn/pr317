<?php 
$host = '127.0.0.1';
    $db   = 'my_database';
    $user = 'root';
    $pass = '';
    //$pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);





if(isset($_POST['submit'])) {
$img = $_POST['img'];
$h = $_POST['h'];
$p = $_POST['p'];


    $sql = "insert into news (img, h, p) values(:img, :h, :p)";
        $stn = $pdo->prepare($sql);
        $stn->bindParam(':img', $img, PDO::PARAM_STR);
        $stn->bindParam(':h', $h, PDO::PARAM_STR);
        $stn->bindParam(':p', $p, PDO::PARAM_STR);
    $stn->execute();
}


?>