<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 30</h3>
<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	for($col=2;$col<=$fon;$col++) {
		echo ("&nbsp;");
	}
	
	for($col=0;$col<=5-$fon;$col++){
		echo ("*");
	}
	for($col=0;$col<=4-$fon;$col++){
		echo ("*");
	}
	for($col=$fon;$col>=1;$col--) {
		echo ($col);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>