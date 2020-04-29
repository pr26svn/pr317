﻿<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', 'Qwerty123');
define('DB_CHAR', 'utf8');

class DB
{
    /*
    Указатель на объект
    */
    protected static $instance = null;

    public function __construct() {}
    public function __clone() {}
    /*
    Объект создается через этот метод если он еще ни создан, если создан, то объект просто переприсваивается, тем самым мы создаем только один объект подключения
    */
    public static function instance()
    {
        if (self::$instance === null)
        {

            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS);
        }
        return self::$instance;
    }
    /*
запускается при вызове недоступных методов в статическом контексте.
*/
    public static function __callStatic($method, $args)
    {
        return call_user_func_array(array(self::instance(), $method), $args);
    }
    /*
    Выполняем запрос sql -сам запрос
    Args- массив параметров
    */
    public static function run($sql, $args = array())
    {
        if (!$args)
        {
            return self::instance()->query($sql);
        }
        $stmt = self::instance()->prepare($sql);
        $stmt->execute($args);
        //aetoudalitebalbesi();
        return $stmt;
    }
 public static function deleteNews($newsId) {
        $sql = 'DELETE FROM news WHERE id = :news_id';

        $stmt = self::instance()->prepare($sql);
        $stmt->bindValue(':news_id', $newsId);

        $stmt->execute();

        return $stmt->rowCount();
    }
}
?>

