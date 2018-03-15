<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Math Puzzles</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Math Games : Verbal Arithmetic</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=verbalarithmetic&subhomepage=sendmoney">Send Money</a> | 
				<a href="index.php?homepage=#&subhomepage=#">Blank</a> |
				
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "sendmoney":
							include "sendmoney.php";
							break;

						default:
							include "sendmoney.php";
					}
			}else {include "sendmoney.php";}
			
		?>

			
</html>
	
	


	
	