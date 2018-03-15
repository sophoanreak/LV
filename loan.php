<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Math Special</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Math Special : Loans</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=loan&subhomepage=amortization" <?php echo $amortizationV;?>>Amortization</a> | 
					<a href="index.php?homepage=loan&subhomepage=compoundinterest"<?php echo $compoundinterestV;?>>Compound Interest
					</a> |
				
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "amortization":
							include "amortization.php";
							break;
						
						case "compoundinterest":
							include "compoundinterest.php";
							break;

						default:
							include "amortization.php";
					}
			}else {include "amortization.php";}
			
		?>

			
</html>
	
	


	
	