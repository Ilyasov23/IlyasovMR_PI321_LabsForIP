<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
<?php
echo "САМОСТОЯТЕЛЬНАЯ РАБОТА Вариант 14 <br><br>";
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
