<!DOCTYPE html>
<p><a href="http://f0597837.xsph.ru"> Домой </a></p>
</div>
<h1 align="center"> Лабораторная работа №3 </h1>
<h1 align="center"> Самотоятельная работа №2. </h1>
<html>
<head>
	<title>ИльясовМР_ИП_ЛР3</title>
 <body bgcolor="#F0FFFF">
</head>
<body>
 <h1>Задание №3.2</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
а: <INPUT type="text" name="a" size="5">
b: <INPUT type="text" name="b" size="5">
<P> Операция:
 <SELECT NAME="whattodo" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложение "+" </OPTION>
 <OPTION VALUE="2"> вычитание "-" </OPTION>
 <OPTION VALUE="3"> умножение "*" </OPTION>
 <OPTION VALUE="4"> деление "/" </OPTION>
 </SELECT>


 <P> <INPUT type="submit" name="result" value="Вычислить">
</FORM>
<?php
if (isset($_POST["result"])) {

switch ($_POST["whattodo"]) {

 case 1:
 $res = $_POST["a"]+$_POST["b"];
 break;
 case 2:
$res = $_POST["a"]-$_POST["b"];
 break;
 case 3:
$res = $_POST["a"]*$_POST["b"];
 break;
 case 4:
$res = $_POST["a"]/$_POST["b"];
 break;
}
echo "Результат: ".$res;
}
?>

</body>
</html>
<div id="bubble">
		<p><a href="http://f0597837.xsph.ru/s3-3.php"> 	&raquo; Самостоятельная работа №3 </a></p>
	</div>
	<div id="bubble">
			<p><a href="http://f0597837.xsph.ru/s3-1.php"> &laquo; Самостоятельная работа №1 </a></p>
		</div>
