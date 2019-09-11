<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 6</h3>
<?php include("font_k.php");
for($fon=7;$fon>=1;$fon--)
{
	for($col=1;$col<=(7-$fon);$col++)
	{
		echo ("&nbsp;&nbsp;");
	}
	for($col=1;$col<=$fon;$col++)
	{
	echo ($col % 2);
	}
	for($col=2;$col<=$fon;$col++)
	{
	echo ($col % 2);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>