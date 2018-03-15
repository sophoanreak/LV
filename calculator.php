<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Math Special</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Math Special : Calculator</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=calculator&subhomepage=basiccalculator" <?php echo $basiccalculatorV;?>>Basic Calculator</a> | 
					<a href="index.php?homepage=calculator&subhomepage=scientificcalculator" <?php echo $scientificcalculatorV;?>>Scientific Calculator</a> |
					<a href="index.php?homepage=calculator&subhomepage=graphingcalculator" <?php echo $graphingcalculatorV;?>>Graphing Calculator</a> |
				
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "basiccalculator":
							include "basiccalculator.php";
							break;
							
						case "scientificcalculator":
							include "scientificcalculator.php";
							break;
							
						case "graphingcalculator":
							include "graphingcalculator.php";
							break;

						default:
							include "basiccalculator.php";
					}
			}else {include "basiccalculator.php";}
			
		?>

			
</html>
	
	


	
	