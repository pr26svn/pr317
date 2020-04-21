<?php
class news{
    public static function getList(){
        $all = DB::run("SELECT `id`, `name` FROM news")->fetchAll();
        return $all;
    }
    public static function getByID($id){
        $row = DB::run("SELECT * FROM news WHERE id = ?", array($id))->fetch();
        return $row;
    }
    public static function deleteById($id){
        DB::run("DELETE FROM news WHERE id = ?",array($id));
    }
}