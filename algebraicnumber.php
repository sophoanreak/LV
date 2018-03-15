<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Math Special</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Special Math : Algebraic Number</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=algebraicnumber&subhomepage=algebraicnumbersub" <?php echo $algebraicnumbersubV;?>>Algebraic Number</a> | 
				<a href="index.php?homepage=#&subhomepage=#">Blank</a> |
				
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "algebraicnumbersub":
							include "algebraicnumbersub.php";
							break;

						default:
							include "algebraicnumbersub.php";
					}
			}else {include "algebraicnumbersub.php";}
			
		?>

			
</html>
	
	


	
	