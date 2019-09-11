<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 32</h3>
<?php include("font_k.php");
for($fon=5;$fon>=1;$fon--)
{
	for($col=7;$col>=(6-$fon);$col--)
	{
	echo (8-$col);
	}
	for($col=7;$col>=($fon);$col--)
	{
	echo("*");
	}
	echo(8-$fon);
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>