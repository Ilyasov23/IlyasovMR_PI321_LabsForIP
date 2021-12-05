<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <head>
	<title>Ильясов М.Р. ПИ-321</title>
 <body bgcolor="#A9A9A9">
</head>
  <h1 align="center"> Лабораторная работа №2 </h1>
  <h1 align="center"> Самотоятельная работа №1. </h1>
  <h2>Вариант 11</h2>
  <h3> Для целочисленного массива A(N) вычислить сумму тех элементов, которые
удовлетворяют условию A[i] < i^2   </h3>
<?php
$array = array();
$sum=0;
echo "<br>","Иходный массив: ","<br>";

for ($i=0; $i<=9;$i++){

$array[$i]=rand(-10,10);

echo "<th>","$array[$i]","</th>","   ";
}

echo "</table>";

for ($i=9;$i>=1;$i--) {
if($array[$i]<pow($i,2))
  $sum+=$array[$i];
}
echo "<br>","<br>","Сумма удовлетворяющая условию :  ","$sum","<br>";

  ?>


  <h2>Вариант 14</h2>
  <h3> Дан массив действительных чисел A(N). Заменить все элементы массива находящиеся </h3>
   <h3> в интервале от с1 до с2 на минимальный. Исходный и скорректированный массивы вывести на экран.</h3>
  <?php




   $massive = array();
   $c1=rand(0,9);
   $c2=rand(0,9);

echo "<br>","Иходный массив: ","<br>";
echo "<table border>";
for ($i=0; $i<=9;$i++){

$massive[$i]=rand(-10,10);

echo "<th>","$massive[$i]","</th>","   ";
}
echo "</table>";
echo "C1 = ","$c1","</br>";
echo "C2 = ","$c2","</br>";

$min=$massive[0];

    for($i=0;$i<=9;$i++)
if($min>$massive[$i])
  $min=$massive[$i];

    if($c1<$c2)
    {
      for($i=$c1;$i<=$c2;$i++)
        $massive[$i]=$min;
    }
    elseif($c2<$c1){
       for($i=$c2;$i<=$c1;$i++)
        $massive[$i]=$min;
    }

echo "<br>","Обработанный массив: ","<br>";
echo "<table border>";
for ($i=0; $i<=9;$i++){
echo "<th>","$massive[$i]","</th>","   ";
}
echo "</table>";
?>
<div id="bubble">
    <p><a href="http://f0597837.xsph.ru/lab2-5.php"> 	&raquo; Самотоятельная работа №2 </a></p>
  </div>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab2-3.php"> &laquo; Задание 3 </a></p>
    </div>
