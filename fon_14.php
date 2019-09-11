<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	for($col=2;$col<=0+$fon;$col++) {
		echo ("&nbsp;");
	}
	
	for($col=$fon;$col<=$fon;$col++) {
		echo($fon);
	}
	
	echo($fon+1);
	for($col=1;$col<=5-$fon;$col++){
		echo ("&nbsp;&nbsp;");
	}
	
	for($col=$fon;$col<=$fon;$col++) {
		echo($fon+1);
	}
	echo($fon);
	echo "<br/>";
}
?>
<?php include ("yfooter.php"); ?>