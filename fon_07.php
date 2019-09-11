<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 7</h3>
<?php include("font_k.php");
for($fon=1; $fon <= 7; $fon++) 
{
 for($col=1;$col<=7 - $fon + 1;$col++)
 { 
 	echo ("&nbsp;&nbsp;");
 }
 for($col=1; $col <=$fon ; $col++)
 { 
  	echo ($col); 
 }
 echo ($fon);
 for($col=$fon; $col >= 1 ; $col--) 
 { 
  	echo ( $col ); 
 }
 echo "<br>";
}
?>
<?php include ("yfooter.php"); ?>