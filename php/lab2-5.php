<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №2 </h1>
  <h1 align="center"> Самотоятельная работа №2. </h1>

  <head>
  <title>Ильясов М.Р. ПИ-321</title>
 <body bgcolor="#A9A9A9">
</head>

<h2>Вариант 11</h2>
<h3> Найти значение переменной z, заданной суммой функций. Для нахождения значения </h3>
<h3>функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.</h3>
  <?php

  function f($u, $t) {
    if ( $u>2)
        return pow($u^2+$t,1/3)*pow(sin($t),2);
    elseif ( $u <= 2)
        return log(abs($u^2/($u+$t)));

}


  echo "<img src='forlab2.png'>";
$A=rand(-10,10);
$B=rand(-10,10);

echo "<br>","A = $A;","<br>","B = $B","<br>";

$result=sin(f($B,$A))+sqrt(abs(f($A,$B)));
echo "Результат = ","$result";

  ?>


  <h2>Вариант 14</h2>
  <h3> Найти значение переменной z, заданной суммой функций. Для нахождения значения </h3>
  <h3>функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.</h3>
  <?php

  function f2($u, $t) {
    if ( $u < -2 )
        return 2*$u;
    elseif ( $u >= -2 && $u <= 2 )
        return $t;
    elseif ( $u >= 0 && $t < 0 )
        return sin(pow($u,3))+log(abs($t));
      elseif ( $u >2)
        return pow(pow(cos($u),2)+pow(sin(pow($t,3)),4),1/4);}



echo "<img src='forlab2.1.png'>";
$A=rand(-10,10);
$B=rand(-10,10);

echo "<br>","A = $A;","<br>","B = $B","<br>";

$result=log(abs(f2($A,$B)))+f(pow($A,2),$A+$B);
echo "Результат = ","$result";
  ?>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab2-6.php"> 	&raquo; Самостоятельная работа №3 </a></p>
    </div>
    <div id="bubble">
        <p><a href="http://f0597837.xsph.ru/lab2-4.php"> &laquo; Самостоятельная работа №1 </a></p>
      </div>
