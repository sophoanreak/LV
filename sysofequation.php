<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematics</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Algebra: System of Equation</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=sysofequation&subhomepage=graphingequation" <?php echo $sysofequation;?> >System of Equation</a> | 
					<a href="">Black</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "graphingequation":
							include "graphinge.php";
							break;
							
						
						default:
							include "graphinge.php";
					}
			}else {include "graphinge.php";}
			
		?>

			
</html>
	
	


	
	