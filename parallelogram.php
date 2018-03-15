<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Geometry: Parallelograms</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=parallelogram&subhomepage=square" <?php echo $squareV;?> >Square and Cube</a> | 
					<a href="index.php?homepage=parallelogram&subhomepage=rectangle" <?php echo $rectangleV;?>>Rectangle and Right Rectangle Prism</a> | 
					<a href="index.php?homepage=parallelogram&subhomepage=rhomboid" <?php echo $rhomboidV;?>>Rhomboid</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "square":
							include "square.php";
							break;
						
						case "rectangle":
							include "rectangle.php";
							break;
							
						case "rhomboid":
							include "rhomboid.php";
							break;
						
						default:
							include "square.php";
					}
			}else {include "square.php";}
			
		?>

			
</html>
	
	