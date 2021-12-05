<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>

  <h1 align="center"> Лабораторная работа №1 </h1>
  <h2 align="center"> Задание 12 </h2>
<HTML>
  <head>
  <title>Ильясов М.Р. ПИ-321</title>
 <body bgcolor="#B0E0E6">
</head>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) { // запускаем первый цикл
 echo ("<tr>"); // начало строки таблицы
 for ($k=1; $k<=10; $k++) { // запускаем второй цикл
 echo ("<td align=center>"); // открываем ячейку таблицы
 $p=$i*$k; // находим произведение двух чисел и...
 echo ($p); // выводим его,
 echo ("</td>"); // а потом закрываем ячейку
 }
 echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>
<div id="bubble">
    <p><a href="http://f0597837.xsph.ru/lab-2-10.php"> 	&raquo; Задание 13 </a></p>
  </div>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab-2-8.php"> &laquo; Задание 11 </a></p>
    </div>
