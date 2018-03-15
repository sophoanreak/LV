<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Special Math</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Fibonacci</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=fibonacci&subhomepage=fibonacci1" <?php echo $fibonacci1V;?> >Fibonacci</a> | 
					<a href="index.php?homepage=fibonacci&subhomepage=fibonacci2" <?php echo $fibonacci2V;?> >Drawing Fibonacci</a> |
					<a href="index.php?homepage=fibonacci&subhomepage=fibonacci3" <?php echo $fibonacci3V;?> >Drawing Fibonacci with Rectangle</a>					
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "fibonacci1":
							include "fibonacci1.php";
							break;
						
						case "fibonacci2":
							include "fibonacci2.php";
							break;
						
						case "fibonacci3":
							include "fibonacci3.php";
							break;
						
						default:
							include "fibonacci1.php";
					}
			}else {include "fibonacci1.php";}
			
		?>

			
</html>
	
	


	
	