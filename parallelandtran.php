<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Geometry: Parrallel Lines and Transversal</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=parallelandtran&subhomepage=parallelandtran1" <?php echo $parallelandtran1V;?> >Parrallel Lines and Transversal</a> | 
					<a href="#">Blank</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "parallelandtran1":
							include "parallelandtran1.php";
							break;
							
						
						default:
							include "parallelandtran1.php";
					}
			}else {include "parallelandtran1.php";}
			
		?>

			
</html>
	
	