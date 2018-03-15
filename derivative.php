<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Calculus: Derivative</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=derivative&subhomepage=limitsub" <?php echo $derivativeslopeV;?> >Derivative (Slope of Tan line)</a> | 
					<a href="#" <?php //echo $limitareaV;?> >Blank</a> |
					
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "derivativeslope":
							include "derivativeslope.php";
							break;
						
						default:
							include "derivativeslope.php";
					}
			}else {include "derivativeslope.php";}
			
		?>

			
</html>
	
	


	
	