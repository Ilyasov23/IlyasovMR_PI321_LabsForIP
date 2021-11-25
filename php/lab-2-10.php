<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №1 </h1>
  <h2 align="center"> Задание 13 </h2>
<HTML>
  <TITLE> Таблица умножения </TITLE>
  <BODY>
    <TABLE border=1>
      <?php
//echo '<table border=1>';
       for ($i = 0; $i < 10; $i++)
       {
         echo '<tr>';
         for ($k = 1; $k < 11; $k++)
         {
           echo '<td style="color:'.($k%2?'black':'red').'">'.($i*10+$k).'</td>';
         }
         echo '</tr>';
       }
       echo '</table>';
       ?>
  </TABLE>
</BODY>
</HTML>
<div id="bubble">
    <p><a href="http://f0597837.xsph.ru/lab-2-11.php"> 	&raquo; Самостоятельная работа №2 </a></p>
  </div>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab-2-9.php"> &laquo; Задание 12 </a></p>
    </div>
