<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 16</h3>
<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++)
{
	for($col=1;$col<=$fon;$col++)
	{
	echo (($fon+1)-$col);
	}
	for($col=1;$col<=(5-$fon);$col++)
	{
	echo ("&nbsp;&nbsp;&nbsp;&nbsp;");
	}
	for($col=1;$col<=$fon;$col++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>