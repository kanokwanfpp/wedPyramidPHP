<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	for($col=2;$col<=$fon;$col++) {
	echo ("&nbsp;&nbsp;");
	}
	for($col=$fon;$col<=10-$fon;$col++){
	echo ($col);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>