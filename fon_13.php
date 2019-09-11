<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	for($col=2;$col<=$fon;$col++) {
	echo (" ");
	}
	for($col=11;$col>=11;$col--){
		echo ($col-$fon-$fon);
	}
	for($col=10;$col>=6+$fon;$col--){
		echo ($col-$fon-$fon);
	}
	for($col=5;$col>=1+$fon;$col--){
		echo ($col-$fon);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>