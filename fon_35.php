<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 35</h3>
<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++)
{
	echo($fon);
	echo("*");
	echo(($fon*2)-1);
	echo("*");
	echo($fon*2);
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>