<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++)
{
	echo ($fon);
	for($col=1;$col<=$fon;$col++)
	{
	echo ("*");
	}
	echo ($fon);
	for($col=1;$col<=(6-$fon);$col++)
	{
	echo ("*");
	}
	echo (10-$fon);
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>