<html>	
		<table width = 650px border = 0 cellpadding = 2 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h2>Mathematics</h2></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = " font-size:1.2em; font-weight:bold;">Algebra: Pre-Algebra</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style="font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=math&subhomepage=realNumber" <?php echo $setofrealnumberV;?>>Set of Real Numbers</a> | 
					<a href="index.php?homepage=math&subhomepage=fraction" <?php echo $fractionV;?>>Fractions</a> | 
					<a href="index.php?homepage=math&subhomepage=orderofOperation" <?php echo $orderofoperationV;?>>Order of Operations</a> | 
					<a href="index.php?homepage=math&subhomepage=propertiesofAlgebra" <?php echo $propertyofalgebraV;?>>Properties of Algebra</a>
				</font>
				</td>
			</tr>
			<tr><td>
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "realNumber":
							include "setofRealNumber.php";
							break;
						case "fraction":
							include "fraction.php";
							break;
						case "orderofOperation":
							include "orderofOperation.php";
							break;
						case "propertiesofAlgebra":
							include "propertiesofAlgebra.php";
							break;
						default:
							include "setofRealNumber.php";
					}
			}else {include "setofRealNumber.php";}
			
		?>
		
		</td><tr>
		</table>
			
</html>
	
	


	
	