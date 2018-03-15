<html>	
		<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 bgcolor = "#f1f1f1" style = "border-collapse: collapse;">
			<tr>
				<td>	
				<center><h1>Math Games</h1></center>
				</td>
			</tr>
			<tr>
				<td>
				<font style = "font-size:1.2em; font-weight:bold;">Math Games : Sudoku</font>
				</td>
			</tr>
			<tr style="background-color:#A7C942">
				<td>
				<font style = "font-size:1.2em;" color = "white" >
					<a href="index.php?homepage=mathgames&subhomepage=sudoku">Sudoku</a> | 
				<a href="index.php?homepage=mathgames&subhomepage=sudoku1">Sudoku 2</a> |
				<a href="index.php?homepage=mathgames&subhomepage=sudoku2">Sudoku 3</a> |
				<a href="index.php?homepage=mathgames&subhomepage=sudoku3">Sudoku 4</a> |
				<a href="index.php?homepage=mathgames&subhomepage=sudoku4">Sudoku 5</a> |
				<a href="index.php?homepage=mathgames&subhomepage=sudoku5">Sudoku 6</a> |
				<a href="index.php?homepage=mathgames&subhomepage=sudoku3d">Sudoku 3D</a>
				
				</font>
				</td>
			</tr>
		</table>
			
		<?php	
			if (isset($_REQUEST['subhomepage'])){
					$subhomepage= $_REQUEST['subhomepage'];
					switch ($subhomepage){
						case "sudoku":
							include "sudoku.php";
							break;
						
						case "sudoku1":
							include "sudoku1.php";
							break;
						case "sudoku2":
							include "sudoku2.php";
							break;
						case "sudoku3":
							include "sudoku3.php";
							break;
						case "sudoku4":
							include "sudoku4.php";
							break;
						case "sudoku5":
							include "sudoku5.php";
							break;
						
						case "sudoku3d":
							include "sudoku3d1.php";
							break;
						
						default:
							include "sudoku.php";
					}
			}else {include "sudoku.php";}
			
		?>

			
</html>
	
	


	
	