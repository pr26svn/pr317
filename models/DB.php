<?php

define("DB_HOST",'localhost');
define("DB_NAME",'test');
define("DB_LOGIN",'root');
define("DB_PASS",'');
define("DB_CHARSET",'utf8');

class DB{
    protected static $instance = null;
    public function __construct()
    {
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function instance(){
        if(self::$instance === null){
            self::$instance = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,DB_LOGIN,DB_PASS);
        }
        return self::$instance;
    }
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array(array(self::$instance,name),$arguments);
    }
    public static function run($sql, $args = array()){
        if(!args){
            return self::instance()->query($sql);
        }
        $stmt = self::instance()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}