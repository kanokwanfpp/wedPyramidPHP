<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 11</h3>
<?php include("font_k.php");
			
				for($fon=1;$fon<=5;$fon++)
				{
					for($col=1;$col<=(5-$fon);$col++)
					{
					echo ("&nbsp;&nbsp;");
					}
					echo ($fon);
					for($col=2;$col<=$fon;$col++)
					{
					echo ("&nbsp;&nbsp;");
					}
					echo ($fon);
					echo "<br>";
				}
			?>
			<?php include ("yfooter.php"); ?>