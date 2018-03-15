<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Mathematic</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Calculus: Limit</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=limit&subhomepage=limitsub" <?php echo $limitsubV;?> >Tan-Line with Limit</a> | 
					<a href="index.php?homepage=limit&subhomepage=limitarea" <?php echo $limitareaV;?> >Area-Limits</a> |
					
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "limitsub":
							include "limitsub.php";
							break;
						
						case "limitarea":
							include "limitarea.php";
							break;
						
						default:
							include "limitsub.php";
					}
			}else {include "limitsub.php";}
			
		?>

			
</html>
	
	


	
	