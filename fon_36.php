<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=3;$fon++) {
	for($col=1;$col<=4-$fon;$col++){
		echo ($fon+$col-1);
	}
	for($col=1;$col<=$fon;$col++){
		echo ("*");
	}
	for($col=2;$col<=$fon;$col++){
		echo ("*");
	}
	for($col=3;$col>=$fon;$col--){
		echo ($col);
	}
	echo "<br>";
}
for($fon=2;$fon>=1;$fon--) {
	for($col=1;$col<=4-$fon;$col++){
		echo ($fon+$col-1);
	}
	for($col=1;$col<=$fon;$col++){
		echo ("*");
	}
	for($col=3;$col<=1+$fon;$col++){
		echo ("*");
	}
	
	for($col=3;$col>=$fon;$col--) {
		echo ($col);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>