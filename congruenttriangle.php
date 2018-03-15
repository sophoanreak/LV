<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Geometry: Proving Congruent Triangles</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=congruenttriangle&subhomepage=sss" <?php echo $sssV;?> >Congruent Triangles - SSS</a> | 
					<a href="#">Blank</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "sss":
							include "sss.php";
							break;
							
						
						default:
							include "sss.php";
					}
			}else {include "sss.php";}
			
		?>

			
</html>
	
	