<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Math Special</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Math Special : Transcendental Number</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=transcendentalnumber&subhomepage=transcendentalnumbersub" <?php echo $transcendentalnumbersubV;?>>Transcendental Number</a> | 
				<a href="index.php?homepage=#&subhomepage=#">Blank</a> |
				
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "transcendentalnumbersub":
							include "transcendentalnumbersub.php";
							break;

						default:
							include "transcendentalnumbersub.php";
					}
			}else {include "transcendentalnumbersub.php";}
			
		?>

			
</html>
	
	


	
	