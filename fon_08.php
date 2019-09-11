<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 8</h3>
<?php include("font_k.php");
for($fon=1;$fon<=7;$fon++)
{
	for($col=2;$col<=$fon;$col++)
	{
	echo ("&nbsp;&nbsp;");
	}
	for($col=$fon;$col<=($fon);$col++)
	{
	echo ($fon);
	echo ($fon+1);
	echo ($fon+2);
	}
	for($col=1;$col<=($fon+1);$col++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>