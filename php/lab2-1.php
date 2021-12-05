<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №2 </h1>
  <h2 align="center"> Задание 1 </h2>
  <head>
	<title>Ильясов М.Р. ПИ-321</title>
 <body bgcolor="#A9A9A9">
</head>
    <?php
    $treug=array(1,2,3,4,5,6,7,8,9,10);
    $kvd=array(1,2,3,4,5,6,7,8,9,10);
    $rez=array();
    $rez1=array();
     echo '<br><br><br><br>Задание 1<br>';
   echo'massiv treugolnuh chisel: ';
   foreach($treug as $k=>$n) {
       $treug[$k]=$n*($n+1)/2;
       echo $treug[$k] .'&nbsp;&nbsp;';
      }
       echo '<br><br><br><br>Задание 2<br>';
    echo'Massiv kvadratov naturalnuh chisel: ';
    foreach($kvd as $a=>$b) {
       $kvd[$a]=$b*$b;
       echo $kvd[$a].'&nbsp;';
       }
    echo '<br><br><br><br>Задание 3<br>';
    echo'Massiv rezultat: ';
    $rez=array_merge($treug,$kvd);
    print_r($rez);
    echo '<br><br><br><br>Задание 4<br>';
    echo'Otsortirovannui massiv: ';
    sort($rez);
    reset($rez);
    while (list($key, $val) = each($rez)) {
    echo "rez  [" . $key . "] = " . $val . "\n";
   }
    echo '<br><br><br><br>Задание 5<br>';
    echo'Massiv s udalennum pervum elementom: ';
   array_shift($rez);
   print_r($rez);
    echo '<br><br><br><br>Задание 6<br>';
    echo'Massiv s udalennumi povtoryauwimi elementami : ';
    $rez1 = array_unique($rez);
print_r($rez1);
   ?>
   <div id="bubble">
       <p><a href="http://f0597837.xsph.ru/lab2-3.php"> 	&raquo; Задание 2 </a></p>
     </div>
     <div id="bubble">
         <p><a href="http://f0597837.xsph.ru/lab-2-11.php"> &laquo; Лабораторная работа №1 </a></p>
       </div>
