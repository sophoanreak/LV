<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Special Math</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Prime Number</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=primenumber&subhomepage=subprime" <?php echo $subprimeV;?> >Prime Number</a> | 
					<a href="index.php?homepage=primenumber&subhomepage=fermatlittle" <?php echo $fermatlittleV;?>>Fermat's Little Theorem</a> | 
					<a href="index.php?homepage=primenumber&subhomepage=akstest" <?php echo $akstestV;?>>AKS Test</a>
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "primenumber":
							include "subprimenumber.php";
							break;
						
						case "fermatlittle":
							include "fermatlittle.php";
							break;

						case "akstest":
							include "akstest.php";
							break;
						
						default:
							include "subprimenumber.php";
					}
			}else {include "subprimenumber.php";}
			
		?>

			
</html>
	
	


	
	