<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematics</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Trigonometry: Radian Measure of an Angle</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=radian&subhomepage=radianm" <?php echo $radianmV;?> >Radian Measurement</a> | 
					<a href="index.php?homepage=radian&subhomepage=radianfun" <?php echo $radianfunV;?>>Fun With Radian</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "radianm":
							include "radianm.php";
							break;
							
						case "radianfun":
							include "radianfun.php";
							break;
				
						default:
							include "radianm.php";
					}
			}else {include "radianm.php";}
			
		?>

			
</html>
	
	