<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 9</h3>
<?php include("font_k.php");
for($fon=5;$fon>=1;$fon--)
{
	for($col=1;$col<=(5-$fon);$col++)
	{
	echo ("&nbsp;&nbsp;");
	}
	for($col=1;$col<=$fon;$col++)
	{
	echo (6-$fon);
	}
	for($col=2;$col<=$fon;$col++)
	{
	echo (6-$fon);
	}
	echo  "<br>";
}
?>
<?php include ("yfooter.php"); ?>