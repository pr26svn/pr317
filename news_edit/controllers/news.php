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

    Public static function update($id, $data=array()){
        //формируем строку для изменения данных
        $data["id"]=$id;
        $result = DB::run("Update news SET name = :name, description = :description WHERE id=:id", $data);
        return $result;
    }

    public static function delete($id) {
        $result = DB::run("DELETE FROM news WHERE  id = ?", array($id));
        return $result;
    }
}
