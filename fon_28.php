<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	for($col=5;$col>=$fon;$col--) {
		echo ($col);
	}
	
	for($col=1;$col<=$fon;$col++) {
		echo ("*");
	}
	
	for($col=2;$col<=$fon;$col++) {
		echo ("*");
	}
	for($col=$fon;$col<=5;$col++) {
		echo ($col);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>