<html>	
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
					<center><h1>Math Special</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Super-star Number</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=superstarnumber&subhomepage=numberpi" <?php echo $numberpiV;?>>The Number PI</a> | 
					<a href="index.php?homepage=superstarnumber&subhomepage=numbere" <?php echo $numbereV;?>>Exponential Constant e</a> | 
					
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "numberpi":
							include "numberpi.php";
							break;
						
						case "numbere":
							include "exponentialconstante.php";
							break;
					
					}
			}else {include "numberpi.php";}
			
		?>

			
</html>
	
	


	
	