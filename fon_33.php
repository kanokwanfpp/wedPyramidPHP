<?php include("yheader.php"); ?>
<br></br>

<h3>&nbsp;&nbsp;&nbsp;Pyramid 33</h3>
<?php include("font_k.php");
for($fon=1;$fon<=4;$fon++){
      for($col=$fon;$col<=4+1;$col++){
         echo ("&nbsp;&nbsp;");
      }
      for($col=1;$col<=$fon*2-1;$col++){
         echo ("*");
      }
         echo "<br>";
      }
      for($fon=1;$fon<4;$fon++){
         for($col=1;$col<=$fon+2;$col++){
            echo ("&nbsp;&nbsp;");
         }
         for($col=$fon;$col<=(4-1)*2-$fon;$col++){
            echo ("*");
         }
            echo "<br>";
       }
?>
<?php include ("yfooter.php"); ?>