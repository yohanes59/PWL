<!-- define() untuk konstanta -->
<!-- Konstanta merupakan variabel konstan yang nilainya tidak berubah-ubah. -->
<?php  
$panjang = 10;
$lebar = 10;
define("luas_persegi", $panjang*$lebar);
echo "Luas persegi adalah = ".luas_persegi;
?>

<?php  
define("panjang", 10);
define("lebar", 10);
$luas = panjang * lebar;
echo "<br>Luas persegi adalah = $luas";
?>