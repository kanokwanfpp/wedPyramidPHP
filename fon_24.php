<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 24</h3>
<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	echo($fon);
	for($col=1;$col<=$fon;$col++) {
		echo("*");	
	}
	
	for($col=2;$col<=$fon;$col++) {
		echo("*");	
	}
	for($col=5;$col>=$fon;$col--) {
		echo($fon);
	}
	for($col=5;$col>=$fon;$col--) {
		echo($fon);
	}
	echo "<br/>";
}
?>
<?php include ("yfooter.php"); ?>