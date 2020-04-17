<?php
function genPassword($num)
  {
    $arr = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p',
    'r','s','t','u','v','x','y','z','A','B','C','D','E','F',  'G','H','I','J','K',
    'L','M','N','O','P','R','S','T','U','V','X','Y','Z','1','2','3','4','5','6','7',
    '8','9','0'/*,'.',',','(',')','[',']','!','?','&','^','%','@','*','$','<','>','/','|',
    '+','-','{','}','`','~'*/);

    $password = "";
    for($i = 0; $i < $num; $i++)
    {
      $index = rand(0, count($arr) - 1);
      $password  .= $arr[$index];
    }
    return $password ;
  }

$host="localhost";
$user="biletoms_root";
$pwd="Xv15dd3uHd885Jz";
$db=mysql_connect($host,$user,$pwd);
mysql_select_db("crm",$db);
    $url=$_POST['url'];
    if (strlen($url)==0)
    {
       echo json_encode(array('result'=>false,'error'=>'length must be greater than zero'));
       exit();
    }
    if (!preg_match("~^(?:(?:https?|ftp|telnet)://(?:[a-z0-9_-]{1,32}".
   "(?::[a-z0-9_-]{1,32})?@)?)?(?:(?:[a-z0-9-]{1,128}\.)+(?:com|net|".
   "org|mil|edu|arpa|gov|biz|info|aero|inc|name|[a-z]{2})|(?!0)(?:(?".
   "!0[^.]|255)[0-9]{1,3}\.){3}(?!0|255)[0-9]{1,3})(?:/[a-z0-9.,_@%&".
   "?+=\~/-]*)?(?:#[^ '\"&<>]*)?$~i",$url,$ok))   
   {
       echo json_encode(array('result'=>false,'error'=>'incorrect format url'));
       exit();
   }
     $random=genPassword(4);
     $query="INSERT INTO  test_url (id_url , url_long , url_short) VALUES ( NULL ,  '".$url."',  '".$random."')";
     $res=mysql_query($query);
     $id=mysql_insert_id();
     if($res)
     {
            $url=$_SERVER['HTTP_HOST'].'/'.$random.$id;
            echo json_encode(array('result'=>true,'url'=>$url));
            exit();
     }
     else
     {
        echo json_encode(array('result'=>fale,'error'=>$query));
        exit();     
     }
?>