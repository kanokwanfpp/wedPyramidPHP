<?php include("yheader.php"); ?>
<br></br>


<h3>&nbsp;&nbsp;&nbsp;Pyramid 15</h3>
<?php include("font_k.php");
for($fon=5;$fon>=1;$fon--)
{
	for($col=1;$col<=$fon;$col++)
	{
	echo (6-$fon);
	}
	for($col=1;$col<=(6-$fon);$col++)
	{
	echo ("&nbsp;&nbsp;&nbsp;");
	}
	for($col=1;$col<=$fon;$col++)
	{
	echo (6-$fon);
	}
	echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>