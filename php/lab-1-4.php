<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №1 </h1>
  <h2 align="center"> Самостоятельная работа №1 </h2>
<p> Мат. операция;
<p>
  <?php
$a=rand(-20,20);
$c=rand(-20,20);
$d=rand(-20,20);
if ($d==0 or ($c-$a+1)==0){
  $result = 'На ноль делить нельзя!';
}
else {
  $result = ((($c/$d)+3*($a/2))/($c-$a+1));
}
print (((($c . '/' . $d) . '3' . '*' . ($a . "/2")) . '/' . ($c . '-' . '(' . ($a) . ')' . '+1')) . '=' . $result);
   ?>
   <div id="bubble">
   <p><a href="http://f0597837.xsph.ru/lab-2-1.php"> 	&raquo; Задание 3 </a></p>
   </div>
   <div id="bubble">
     <p><a href="http://f0597837.xsph.ru/lab-1-3.php"> &laquo; Задание 2 </a></p>
   </div>
