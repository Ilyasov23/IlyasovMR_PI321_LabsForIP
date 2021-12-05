<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №1 </h1>
  <h2 align="center"> Самостоятельная работа №2 </h2>
  <head>
  <title>Ильясов М.Р. ПИ-321</title>
 <body bgcolor="#B0E0E6">
</head>
<?php
const TRIPLEX = 1/3;

function getPair(int $num) { // checks pair existing
    $max = floor(pow($num, TRIPLEX)); # корень кубический
    while ($max) {
        for ($i=1; $i<=$max; ++$i) {
            if (pow($i, 3) + pow($max, 3) == $num)
                return [$max, $i];
        }
        --$max;
    }
    return NULL;
}

function getIts(int $start, int $end) { // generator
    if ($start < 1 || $end < 1) {
        trigger_error('Warn: Arguments for getIts() must be >= 1 both', E_USER_WARNING);
        return NULL;
    }
    if ($end < $start) [$start, $end] = [$end, $start];

    for ($i = $start; $i <= $end; ++$i) {
        if(!$tmp = getPair($i))
            continue;
        echo "$i = $tmp[0]^3 + $tmp[1]^3\n";
        yield $i; // типа return в каждой итерацмм
    }
}

$found = 0;
echo "<pre>\n",
    '$N=',  $N=rand (2,30), "\n",
    '$M=',  $M=rand (110,220), "\n\n";

foreach (getIts($N, $M) as $num) {
//    echo " $num\n";
    ++$found;
}

if (!$found) echo "Не найдено.\n";
else echo "Найдено $found чисел.\n";
echo "\n</pre>\n";
?>
<div id="bubble">
    <p><a href="http://f0597837.xsph.ru/lab2-1.php"> 	&raquo; Лабораторная работа №2 </a></p>
  </div>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab-2-10.php"> &laquo; Задание 13 </a></p>
    </div>
