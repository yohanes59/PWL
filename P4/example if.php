<!-- contoh IF -->
<?php  
$nilai = 50;

if ($nilai >= 65) {
	echo "Anda LULUS";
}
?>
<!-- contoh IF... ELSE-->
<?php  
if ($nilai >= 65) {
	echo "Anda LULUS";
} else {
	echo "Anda GAGAL";
}
?>

<!-- BENTUK KHUSUS -->
<?php 
$warna = ($nilai >= 65)? "blue" : "red";
?>

<!-- contoh IF...ENDIF -->
<?php 
if ($nilai >= 65) :
	echo "Anda LULUS";
endif;
?>

<!-- contoh SWITCH...CASE -->
<?php 
switch ($nilai) {
	case 100 : echo "Great!!"; break;
	case 50 : echo "Oh, No!!"; break;
}
?>