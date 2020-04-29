<?php

class news
{
    Public static function getList(){
        $all = DB::run("SELECT * FROM news")->fetchall();
        return $all;
    }

    Public static function getByID($id){
        $row = DB::run("SELECT * FROM news WHERE id=?", array($id))->fetch();
        return $row ;
    }

    public static function deleteNews($id){
        $del = DB::run("DELETE FROM news WHERE id=?", array($id));
    }
}