<?php
class news
{

   Public static function getList(){
$all = DB::run("SELECT id, Zagolovok, Opisanie FROM novosti")->fetchAll();
return $all;
	}

   Public static function getByID($id){
$row = DB::run("SELECT * FROM novosti WHERE id=?", array($id))->fetch();
return $row ;
	}

Public static function delete($id){
$row = DB::run("DELETE FROM novosti WHERE id=?", array($id))->fetch();
	}
}
