<?php
class news
{
/* 
получаем полного списка новостей, лучше сделать ограничение и использовать в запросе LIMIT и выводить ни весь список, а  постранично
*/
   Public static function getList(){
        $all = DB::run("SELECT * FROM news")->fetchAll();
        return $all;
	}
/*
 Получаем конкретную новость по ее id
*/
   Public static function getByID($id){
        $row = DB::run("SELECT * FROM news WHERE id_news=?", array($id))->fetch();
        return $row ;
	}
    Public static function update($id, $data=array()){
        //формируем строку для изменения данных
        $data["id_news"]=$id;
        $result = DB::run("Update news SET name = :name, description = :description WHERE id_news=:id_news", $data);
        return $result;
    }
    public static function delete($id) {
        $sql = DB::run("DELETE FROM news WHERE id_news = ?", array($id));
        return $sql ;
    }
}
