<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematics</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Algebra: Graphing</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=graphing&subhomepage=slopsandlines" <?php echo $slopsandlinesV; ?>>Points and Lines</a> | 
					<a href="index.php?homepage=graphing&subhomepage=slop" <?php echo $slopV; ?>>Slope</a> |
				<a href="index.php?homepage=graphing&subhomepage=parrallel" <?php echo $parrallelV; ?>>Parrallel and Perpendicular Lines</a>
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "slopesandlines":
							include "slopsandlines.php";
							break;
							
						case "slop":
							include "slop.php";
							break;
							
						case "parrallel":
							include "parrallel.php";
							break;
						
						default:
							include "slopsandlines.php";
					}
			}else {include "slopesandlines.php";}
			
		?>

			
</html>
	
	


	
	