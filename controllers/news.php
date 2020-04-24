<?php
if(isset($_GET['func'])=='delete' )
{
    if(($id = $_GET['id']) != 0)
        news::delete($id);
}
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

    public static function update($id, $data=array()){
        $str="";
        foreach($data as $key=>$val){
            $str.= $key."='".$val."', ";
        }
        $str = substr($str,0,-2);
        $data["id"]=$id;
        $result = DB::run("UPDATE news SET ".$str." WHERE id=?", array($id));
        return $result;
    }

}