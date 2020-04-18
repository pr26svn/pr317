<?php 
    require('controllers/news.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Новости</title>
	 <link rel="stylesheet" href="style4.css">
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
		
<?php foreach($newsList as $arNews): ?>
<div class="new">
<img class="newsimg" src="<?= $arNews['img']; ?>">
<div class="newsdiv">
<h1> <?= $arNews['h']; ?></h1>
<p> <?= $arNews['p']; ?>
</p>
</div>

    </div>
    <?php echo '<div class="spacebar"></div>';?>
<?php endforeach; ?>
		</div>
<input type="button" name="addnews" class="buttons2" value="Удалить новость" onclick='location.href="newsdelete.php"'>
        <input type="button" name="addnews" class="buttons2" value="Добавить новость" onclick='location.href="newsadd.php"'>


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