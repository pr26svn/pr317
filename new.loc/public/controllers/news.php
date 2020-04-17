<?php
class news
{

   Public static function getList(){
$all = DB::run("SELECT id, Name, second FROM newstr")->fetchAll();
return $all;
	}

   Public static function getByID($id){
$row = DB::run("SELECT * FROM newstr WHERE id=?", array($id))->fetch();
return $row ;
	}

Public static function delete($id){
$row = DB::run("DELETE FROM newstr WHERE id=?", array($id))->fetch();
	}
}
