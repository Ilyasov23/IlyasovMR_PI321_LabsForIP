<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №2 </h1>
  <h1 align="center"> Самотоятельная работа №2. </h1>
  <h2 align="center"> Задание 4 </h2>
  <?php

  function f($u, $t) {
      if ( $u>2)
          return pow($u^2+$t,1/3)*pow(sin($t),2);
      elseif ( $u <= 2)
          return log(abs($u^2/($u+$t)));

  }

  function f2($u, $t) {
     if ( $u < -2 )
         return 2*$u;
     elseif ( $u >= -2 && $u <= 2 )
         return $t;
     elseif ( $u >= 0 && $t < 0 )
         return sin(pow($u,3))+log(abs($t));
       elseif ( $u >2)
         return pow(pow(cos($u),2)+pow(sin(pow($t,3)),4),1/4);}


   echo "<img src='forlab2.png'>";
 $A=rand(-10,10);
 $B=rand(-10,10);

 echo "<br>","a = $A;","<br>","b = $B","<br>";

 $result=log(abs(f2($A,$B)))+f(pow($A,2),$A+$B);
 echo "Результат = ","$result";
  ?>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab2-4.php"> 	&raquo; Задание 3 </a></p>
    </div>
    <div id="bubble">
        <p><a href="http://f0597837.xsph.ru/lab2-2.php"> &laquo; Самостоятельная работа №2 </a></p>
      </div>
