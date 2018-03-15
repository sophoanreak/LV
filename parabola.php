<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Geometry: Parabolas</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=parabola&subhomepage=yxsquare" <?php echo $yxsquareV;?> >YX Square</a> | 
					<a href="index.php?homepage=parabola&subhomepage=yonex" <?php echo $yonexV;?> >Y = 1/X</a> | 
					<a href="index.php?homepage=parabola&subhomepage=ysquarerootx" <?php echo $ysquarerootxV;?> >Y = &radic;X</a> | 
					<a href="index.php?homepage=parabola&subhomepage=conicsec" <?php echo $conicsecV;?> >Conic section and quadratic form</a>
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "yxsquare":
							include "yxsquare.php";
							break;
						
						case "yonex":
							include "yonex.php";
							break;
						
						case "ysquarerootx":
							include "ysquarerootx.php";
							break;
							
						case "conicsec":
							include "conicsec.php";
							break;
						
						default:
							include "yxsquare.php";
					}
			}else {include "yxsquare.php";}
			
		?>

			
</html>
	
	