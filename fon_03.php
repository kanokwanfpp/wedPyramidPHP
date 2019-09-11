<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 3</h3>
<?php include("font_k.php");
for($fon=1;$fon<=4;$fon++) {
	for($col=$fon;$col<=$fon;$col++) {
		echo($col);
	}
	for($col=$fon;$col<=$fon;$col++) {
		echo($col+4);
	}
	for($col=0;$col<=3+$fon;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
<?php include ("yfooter.php"); ?>