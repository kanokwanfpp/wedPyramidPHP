<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++)
{
	echo ($fon);
	echo ("*");
	echo ($fon+2);
	for($col=7;$col>=(6-$fon);$col--)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>