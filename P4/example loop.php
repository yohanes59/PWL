
<!-- FOR -->
<?php  
for ($i=1; $i <=10 ; $i++) { 
	echo $i;
}
?>
<br>
<!-- WHILE -->
<?php  
$i = 2;
while ($i<20) {
	echo $i;
	$i = $i + 2;
}
?>
<br>
<!-- FOREACH -->
<?php  
foreach ($_POST as $input) {
	echo $input;
}
?>
<br>
<!-- BREAK dan CONTINUE -->
<?php  
for ($i=1; $i<10; $i++) { 
	if ($i == 5) continue;
	if ($i == 8) break;
	echo "$i";
}
?>