<?php
	
    if(($id = $_GET["id"]) != 0)
        	news::deleteNews($id);
	
	class news
	{
		Public static function getList()
		{
			$all = DB::run("SELECT id, name, text FROM news")->fetchAll();
			return $all;
		}

		Public static function getByID($id)
		{
			$row = DB::run("SELECT * FROM news WHERE id=?", array($id))->fetch();
			return $row ;
		}
		public static function deleteNews($id)
		{
        	DB::run("DELETE FROM news WHERE id=?",array($id));
    	}
	}
?>