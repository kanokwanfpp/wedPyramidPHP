<?php include("yheader.php"); ?>
<br></br>

<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++)
{
	echo ($fon);
	for($col=1;$col<=($fon);$col++)
	{
	echo ("&nbsp;");
	}
	for($col=1;$col<=($fon);$col++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>