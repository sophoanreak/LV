<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Geometry: Angle</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=angle&subhomepage=ninety" <?php echo $ninetyV;?> >A Right Angle</a> | 
					<a href="index.php?homepage=angle&subhomepage=sixtydegree" <?php echo $sixtydegreeV;?>>30<sup>0</sup> and 60<sup>0</sup> Degree Angles</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "ninety":
							include "ninety.php";
							break;
							
						case "sixtydegree":
							include "sixtydegree.php";
							break;
						
						default:
							include "ninety.php";
					}
			}else {include "ninety.php";}
			
		?>

			
</html>
	
	


	
	