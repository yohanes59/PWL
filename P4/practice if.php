<!-- Buatlah program untuk memeriksa suatu nilai (0-100) dan menampilkan grade dari nilai tersebut!
0 – 45 = E
46 – 59 = D
60 – 74 = C
75 – 84 = B
85 – 100 = A
 -->

<?php 
$nilai = 85;
switch (true) {
	case ($nilai<=45) : echo "E"; break;
	case ($nilai>=46 && $nilai<=59) : echo "D"; break;
	case ($nilai>=60 && $nilai<=74) : echo "C"; break;
	case ($nilai>=75 && $nilai<=84) : echo "B"; break;
	case ($nilai>=85 && $nilai<=100) : echo "A"; break;
}
?>