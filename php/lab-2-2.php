<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
<p> Наибольшее число:
<p>
<?php
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("Наибольшее =" . $x);
elseif ($x<$y) echo ("Наибольшее =" . $y);
else print ("Наибольшего нет");
?>
