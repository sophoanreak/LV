<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Statistics</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Uncertainty and Population</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=uncertaintyandpopulation&subhomepage=center" <?php echo $centerV;?> >Center</a> | 
					<a href="index.php?homepage=uncertaintyandpopulation&subhomepage=histogramandbar" <?php echo $histogramandbarV;?> >Histogram and Bar Chart</a> |
					<a href="index.php?homepage=uncertaintyandpopulation&subhomepage=shapedata" <?php echo $shapedataV;?> >Shape of a Dataset</a> |
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "center":
							include "center.php";
							break;
						
						case "histogramandbar":
							include "histogramandbar.php";
							break;
							
						case "shapedata":
							include "shapedata.php";
							break;
					}
			}else {include "center.php";}
			
		?>

			
</html>
	
	


	
	