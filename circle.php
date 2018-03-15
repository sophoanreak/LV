<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Geometry: Circle</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=circle&subhomepage=circle1" <?php echo $circle1V;?> >Circle</a> | 
					<a href="index.php?homepage=circle&subhomepage=sphere" <?php echo $sphereV;?>>Sphere</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "circle1":
							include "circle1.php";
							break;
						
						case "sphere":
							include "sphere.php";
							break;
							
						
						default:
							include "circle1.php";
					}
			}else {include "circle1.php";}
			
		?>

			
</html>
	
	


	
	