<?php
class news
{

   Public static function getList(){
        $all = DB::run("SELECT * FROM news")->fetchAll();
        return $all;
	}

   Public static function getByID($id){
        $row = DB::run("SELECT * FROM news WHERE id=?", array($id))->fetch();
        return $row ;
	}

}
