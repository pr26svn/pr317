

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Добавление новостей</title>
	 <link rel="stylesheet" href="style2.css">
     <script type="text/javascript">
     </script>
</head>
<body>
<header class="header">
<div class="heading">
<p> На Крючк </p>
<img src="images/hook.png" id="fon">
<img src="images/logo.png" id="logo">
</div>
<nav class="headMenu">
 

 <div class="mainmenu"><a href="index.php">ГЛАВНАЯ</a></div>
 <div class="mainmenu"><a href="#">О КОМПАНИИ</a></div>
 <div class="mainmenu"><a  class="activ"  href="#">НОВОСТИ</a></div>
 <div class="mainmenu"><a href="contactsaut.php">ВХОД</a></div>

 
</nav>

</header> 
<section id="wrapper">
	<div class="middle">
		
<div class="registration">
    <div class="form">
<p> <?php 
require('controllers/newsupdate.php');


?></p>
<form method="post" action="">
	<input type="text" class="pol" id="id" name="id" placeholder="Введите id новости"><br>
<input type="text" class="pol" id="img" name="img" placeholder="Введите путь до img"><br>
<input type="text" class="pol" id="h" name="h" placeholder="Введите заголовок"><br>
<textarea class="pol" id="p" name="p"> </textarea><br>

<br>

<br>
<br>
<input type="submit" value="Обновить" class="buttons" name="submit">
<input type="button" value="Вернуться к новостям" class="buttons" name="ret" onclick='location.href="news.php"'>
</form>

</div>
</div>
		</div>


</section>
<footer class="footer">
	<div class="footerInner">
		<div class="social">
	<a title="Группа ВКонтакте" href="#" class="vk"></a>
		<a title="Наш Твиттер" class="twitter" ></a>
		<a title="Наш Инстаграм"  class="instagram"></a>
		</div>
	
		<p> 8(950)-217-97-35</p>
		<p>© www.on_hook.ru - ароматизированные крючки </p>
	</div>

</footer>
</body>
</html>