<?php

	class news
	{
		Public static function getList()
		{
			$all = DB::run("SELECT id, name FROM news")->fetchAll();
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
    	public static function updateNews($id, $data=array())
    	{
    		$res=DB::run("UPDATE news SET name=? WHERE id=?", array($data["name"],$data["id"]));
    		return $res;
    	}
	}
?>