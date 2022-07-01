<?php  
$a = 20; //sesuai 2 digit npm terakhir
$b = 4;

echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
?>