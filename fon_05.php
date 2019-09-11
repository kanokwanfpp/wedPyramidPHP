<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=4;$fon++)
{
	for($col=1;$col<=(4-$fon);$col++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($fon);
	for($col=2;$col<=$fon;$col++)
	{
	echo ("**");
	}
	echo ($fon);
	echo "<br>";
}
for($fon=3;$fon>=1;$fon--)
{
	for($col=1;$col<=(4-$fon);$col++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo($fon);
	for($col=2;$col<=$fon;$col++)
	{
	echo ("**");
	}
	echo ($fon);
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>