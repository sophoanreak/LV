<html>	
		<table width = 660px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Special Math</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Orbital Calender</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=orbitalcalender&subhomepage=earthandmoon" <?php echo $earthandmoonV;?>>Earth and Moon</a> | 
					
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						
						case "earthandmoon":
							include "earthandluna.php";
							break;

						default:
							include "earthandluna.php";
					}
			}else {include "earthandluna.php";}
			
		?>

			
</html>
	
	


	
	