<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid  1</h3>
<?php include("font_k.php");
for($fon=1;$fon<=4;$fon++) {
	for($col=2;$col<=0+$fon;$col++) {
		echo ("&nbsp;&nbsp;");
	}
	
	for($col=$fon;$col<=$fon+1;$col++) {
		echo ($fon);
	}
	
	for($col=1;$col<=4-$fon;$col++){
		echo ("**");
	}
	
	for($col=$fon;$col<=$fon+1;$col++) {
		echo ($fon);
	}
	
echo "<br>";


 } 
 ?>
<?php include ("yfooter.php"); ?>