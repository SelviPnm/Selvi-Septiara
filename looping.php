<?php
	$baris=5;
	for($x=1; $x<=$baris; $x++){
	for($y=1; $y<=$x; $y++){
		echo " &nbsp";
	}
	for($z=$baris; $z>=$x; $z-=1){
		echo "*";
	}
	echo "<br>";
	}
?>

<br>
<br>

<?php
	$baris=6;
	for($x=1; $x<$baris; $x++){
	for($y=1; $y<=$x; $y++){
		echo "&nbsp";
	}
	for($z=$baris; $z>=$x; $z-=1){
		echo "*";
	}
	echo "<br>";
	}
?>

<br>
<br>

<?php
	$baris=1;
	for($x=5; $x>=$baris; $x--){
	for($y=5; $y>=$x; $y--){
		echo "&nbsp";
	}
	for($z=$baris; $z<=$x; $z++){
		echo $z;
	}
	echo "<br>";
	}
?>