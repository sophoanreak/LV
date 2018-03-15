<html>	
		<table width = 660px border = 0 cellpadding = 3 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematics</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Algebra: Inequality</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=inequality&subhomepage=solveIn" <?php echo $solveInV; ?>>Solve and Graph Inequality</a> | 
					<a href="">Black</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "solveIn":
							include "solveIn.php";
							break;
							
						
						default:
							include "solveIn.php";
					}
			}else {include "solveIn.php";}
			
		?>

			
</html>
	
	


	
	