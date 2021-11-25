<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №2 </h1>
  <h1 align="center"> Самотоятельная работа №3. </h1>
  <h2 align="center"> Вариант 14 </h2>


<?php

$x=10;
$y=1;
$v=1;
$k='levo';
do {
    $mass[$x][$y]=$v;
    $fin=0;
    if (!$fin AND $k=='levo') {
    $x--;
    if ($x<1 OR isset($mass[$x][$y])) { $x++; $k='niz'; }
    else $fin=1;
    }
    if (!$fin AND $k=='niz') {
    $y++;
    if ($y>10 OR isset($mass[$x][$y])) { $y--; $k='pravo'; }
    else $fin=1;
    }
    if (!$fin AND $k=='pravo') {
    $x++;
    if ($x>10 OR isset($mass[$x][$y])) { $x--; $k='verh'; }
    else $fin=1;
    }
    if (!$fin AND $k=='verh') {
    $y--;
    if ($y<1 OR isset($mass[$x][$y])) { $y++; $k='levo'; }
    else $fin=1;
    }
    if (!$fin AND $k=='levo') {
    $x--;
    if ($x<1 OR isset($mass[$x][$y])) { $x++; $k='niz'; }
    else $fin=1;
    }
    $v++;
} while ($v<=100);

$tbl = '';
for ($y=1;$y<=10;$y++) {
    $tr = '';
    for ($x=1;$x<=10;$x++) {
        $tr .= '<td>'.$mass[$x][$y].'</td>';
    }
    $tbl .= '<tr>'.$tr.'</tr>';
}
echo '<table>'.$tbl.'</table>';

?>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab2-5.php"> &laquo; Самостоятельная работа №2 </a></p>
    </div>
