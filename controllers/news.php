<?php

class news
{
    public static function delete($id){
        DB::run("DELETE FROM news WHERE id=?",array($id));
    }
    public static function getList(){
        $all = DB::run("SELECT id, name FROM news")->fetchAll();
        return $all;
    }

    public static function getByID($id){
        $row = DB::run("SELECT * FROM news WHERE id=?", array($id))->fetch();
        return $row ;
    }

    public static function updatenews($id, $data=array()){
        $result = DB::run("UPDATE news SET name=?,content=? WHERE id=?", array($data['name'],$data['content'],$id));
        return $result;
    }

}