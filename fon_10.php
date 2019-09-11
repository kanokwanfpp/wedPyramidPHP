<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	for($col=1;$col<=5-$fon;$col++) {
	echo ("&nbsp;&nbsp;");
	}
	for($col=1;$col<=$fon;$col++){
		echo ($col);
	}
	for($col=$fon;$col<=$fon;$col++){
		echo (6-$fon);
	}
	for($col=$fon;$col>=1;$col--){
		echo ($col);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>