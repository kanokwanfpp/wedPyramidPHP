<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=3;$fon++) {
	for($col=1;$col<=3-$fon;$col++) {
		
		echo ("&nbsp;&nbsp;");
	}
		echo ("*");
	for($col=2;$col<=$fon;$col++){
		echo ($col);
	}
	for($col=$fon;$col<=$fon;$col++) {
		
		echo ($col);
	}
	for($col=$fon;$col>=2;$col--){
		echo ($col);
	}
		echo ("*");
	for($col=1;$col<=3-$fon;$col++) {
		
		echo ("&nbsp;&nbsp;");
	}
		echo "<br>";
}
for($fon=2;$fon>=1;$fon--) {
	for($col=1;$col<=3-$fon;$col++) {
		echo ("&nbsp;&nbsp;");
	}
	
		echo ("*");
	for($col=1;$col<=$fon;$col++){
		echo ($fon);
	}
	
	for($col=2;$col<=$fon;$col++){
		echo ($col);
	}
		echo ("*");
	for($col=1;$col<=3-$fon;$col++) {
		echo ("&nbsp;&nbsp;");
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>