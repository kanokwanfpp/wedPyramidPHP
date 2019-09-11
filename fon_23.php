<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++)
{
	echo ($fon);
	for($col=1;$col<=(7-$fon);$col++)
	{
	echo ("*");
	}
	for($col=2;$col<=($fon);$col++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($fon);
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>