<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematics</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Algebra: Polynomails</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=polynomial&subhomepage=exponent" <?php echo $exponentV;?> >X<sup>3</sup></a> | 
					<a href="">Black</a> 
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "exponent":
							include "exponent.php";
							break;
							
						
						default:
							include "exponent.php";
					}
			}else {include "exponent.php";}
			
		?>

			
</html>
	
	


	
	