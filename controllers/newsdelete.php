<?php 
$host = '127.0.0.1';
    $db   = 'my_database';
    $user = 'root';
    $pass = '';
    //$pass = 'Qwerty123';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $sql = 'select * from news where id = :id';
    $stn = $pdo->prepare($sql);
    $stn->execute(array($_POST['id']));
    $all = $stn->fetchAll();

 if($_POST['id']=='')
    echo "Введите id";

else {

if(count($all)>0) {
$sql2 = 'delete from news where id= :id';
 $stn = $pdo->prepare($sql2);
    $stn->execute(array($_POST['id']));
    echo "Удаление прошло успешно";
}
else echo "Такой новости не существует.";

} ?>
