<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Geometry: Polyhedron</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=polyhedron&subhomepage=tetrahedron" <?php echo $tetrahedronV;?> >Tetrahedron</a> | 
					<a href="index.php?homepage=polyhedron&subhomepage=dodecahedron" <?php echo $dodecahedronV;?>>Dodecahedron</a> | 
					<a href="index.php?homepage=polyhedron&subhomepage=icosahedron" <?php echo $icosahedronV;?>>Icosahedron</a> | 
					<a href="index.php?homepage=polyhedron&subhomepage=octahedron" <?php echo $octahedronV;?>>Octahedron</a> | 
					<a href="index.php?homepage=polyhedron&subhomepage=polyhedronfun" <?php echo $polyhedronfunV;?>>Fun</a>
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "tetrahedron":
							include "tetrahedron.php";
							break;
						
						case "dodecahedron":
							include "dodecahedron.php";
							break;
						
						case "icosahedron":
							include "icosahedron.php";
							break;
						
						case "octahedron":
							include "octahedron.php";
							break;
						
						case "polyhedronfun":
							include "polyhedronfun.php";
							break;
				
						default:
							include "tetrahedron.php";
					}
			}else {include "tetrahedron.php";}
			
		?>

			
</html>
	
	