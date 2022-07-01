<!-- 
1. Buatlah sebuah program konversi nilai angka ke nilai huruf dengan range berikut : 
Nilai >=85  and nilai <=100 = A
Nilai >=70  and nilai <=84 = B
Nilai >=60 and nilai <70 = C
Nilai >=50 and nilai<60 = D
Nilai<50 = E
2. Buatlah sebuah program untuk mengecek apakah bilangan yang diinput adalah bilagan positif, negatif atau nol
3. Buatlah sebuah program untuk mengecek apakah bilangan yang dimasukkan adalah bilangan genap atau ganjil
4. Buatlah sebuah program untuk konversi angka dengan menggunakan konsep struktur kontrol switch - case
 -->

<!-- nomor 1 dan 4 -->
<?php 
$nilai = 85;
switch (true) {
	case ($nilai>=85 && $nilai<=100) : echo "A"; break;
	case ($nilai>=70 && $nilai<=84) : echo "B"; break;
	case ($nilai>=60 && $nilai<=70) : echo "C"; break;
	case ($nilai>=50 && $nilai<=60) : echo "D"; break;
	case ($nilai<50) : echo "E"; break;
}
?>
<br><br>
<!-- nomor 2 -->
<?php  
$bilangan = -4;
switch (true) {
	case ($bilangan > 0): echo "POSITIF"; break;
	case ($bilangan < 0): echo "NEGATIF"; break;
	case ($bilangan == 0): echo "NOL"; break;
}
?>
<br><br>
<!-- nomor 3 -->
<?php  
$bilangan = 4;
switch (true) {
	case ($bilangan % 2 == 0): echo "GENAP"; break;
	case ($bilangan % 2 == 1): echo "GANJIL"; break;
}
?>