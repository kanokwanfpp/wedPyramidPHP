<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 4</h3>
<?php include("font_k.php");
for($fon=1;$fon<=4;$fon++)
{
	for($col=1;$col<=$fon;$col++)
	{
		echo ("*");
	}
	for($col=$fon;$col>=2;$col--)
	{
		echo ($col);
	}
	for($col=1;$col<=$fon;$col++)
	{
		echo ($col);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>