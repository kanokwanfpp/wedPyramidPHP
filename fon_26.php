<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++)
{
	for($col=5;$col>=(($fon*2)-$fon);$col--)
	{
	echo ($fon);
	}
	for($col=5;$col>=(6-$fon);$col--)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>