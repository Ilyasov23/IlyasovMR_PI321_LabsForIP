<!DOCTYPE html>
<p><a href="http://f0597837.xsph.ru"> Домой </a></p>
</div>
<h1 align="center"> Лабораторная работа №3 </h1>
<h1 align="center"> Самотоятельная работа №3. </h1>
<html>
<head>
	<title>ИльясовМР_ИП_ЛР3</title>
 <body bgcolor="#F0FFFF">
</head>
<body>
 <h1>Задание №3.3</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
N: <INPUT type="text" name="N" size="3">
<P> Найти:
 <SELECT NAME="whattodo" SIZE="1">
 <OPTION VALUE="1" SELECTED> четные </OPTION>
 <OPTION VALUE="2"> нечетные </OPTION>
 <OPTION VALUE="3"> простые </OPTION>
 <OPTION VALUE="4"> составные </OPTION>
 </SELECT>


 <P> <INPUT type="submit" name="result" value="Найти">
</FORM>

<?php
if (isset($_POST["result"])) {

switch ($_POST["whattodo"]) {

 case 1:
 for($i=1;$i<=$_POST["N"];$i++)
 	if($i%2==0)
    echo $i." | ";
 break;
 case 2:
for($i=1;$i<=$_POST["N"];$i++)
 	if($i%2!=0)
    echo $i." | ";
 break;

 case 3:


for($i=1;$i<=$_POST["N"];$i++){
	$flag = true;

 	for($j=2;$j<$i;$j++)
 		if($i%$j==0 || $_POST["N"]<2)
 		$flag = false;

 	if($flag==true)
 	echo $i." | ";
 }


 break;
 case 4:

for($i=1;$i<=$_POST["N"];$i++){
	$flag = false;

 	for($j=2;$j<$i;$j++)
 		if($i%$j==0 || $_POST["N"]<2)
 		$flag = true;

 	if($flag==true)
 	echo $i." | ";
}
 break;
}
}
?>

</body>
</html>
<div id="bubble">
		<p><a href="http://f0597837.xsph.ru/s3-4.php"> 	&raquo; Самостоятельная работа №4 </a></p>
	</div>
	<div id="bubble">
			<p><a href="http://f0597837.xsph.ru/s3-2.php"> &laquo; Самостоятельная работа №2 </a></p>
		</div>
