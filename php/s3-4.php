<!DOCTYPE html>
<p><a href="http://f0597837.xsph.ru"> Домой </a></p>
</div>
<h1 align="center"> Лабораторная работа №3 </h1>
<h1 align="center"> Самотоятельная работа №4. </h1>
<html>
<head>
	<title>ИльясовМР_ИП_ЛР3</title>
 <body bgcolor="#F0FFFF">
</head>
<body>
 <h1>Задание №3.4</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин:  <INPUT type="text" name="login" size="3">
 <P> <INPUT type="submit" name="enter" value="Войти">
</FORM>

<?php
if (isset($_POST["enter"])) {
if($_POST["login"]=="Pipindr") {echo "Здравствуйте, Пипиндр Пипиндрович!";}
else if($_POST["login"]=="Popo") {echo "Здравствуйте, Попо Попович!";}
else if($_POST["login"]=="Putin") {echo "Здравствуйте, Владимир Путин!";}
else if($_POST["login"]=="Uzbek") {echo "Здравствуйте, Узбек Узбекович!";}
else {echo "Такой пользователь не зарегестрирован на сайте.";}
}
?>

</body>
</html>
<div id="bubble">
		<p><a href="http://f0597837.xsph.ru/s3-5.php"> 	&raquo; Самостоятельная работа №5 </a></p>
	</div>
	<div id="bubble">
			<p><a href="http://f0597837.xsph.ru/s3-3.php"> &laquo; Самостоятельная работа №3 </a></p>
		</div>
