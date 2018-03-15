<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Math Puzzles</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Special Math : Hilbert's Problems</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=hilbertsproblem&subhomepage=hilbertsproblem7" <?php echo $hilbertsproblem7V;?>>Problem No.7</a> | 
				<a href="index.php?homepage=#&subhomepage=#">Blank</a> |
				
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "hilbertsproblem7":
							include "hilbertsproblem7.php";
							break;

						default:
							include "hilbertsproblem7.php";
					}
			}else {include "hilbertsproblem7.php";}
			
		?>

			
</html>
	
	


	
	