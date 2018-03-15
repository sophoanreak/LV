<html>
 <?php

	//always place a number infront of x, even 1.
	//The equation is ax + b = Y 
	//there must be a single spacing between the equation

	function axPluxbEquation($equation){
		$x;
		$equationArray = explode (" ", $equation);
		$equalSignKey = array_search("=",$equationArray);

		//Swap between = and +,- 
		list($equationArray[1],$equationArray[$equalSignKey]) = array($equationArray[$equalSignKey],$equationArray[1]);

		//change postive to negative if + sign and vis versa
		if ($equationArray[$equalSignKey] == "+"){

		$equationArray[2] = str_replace($equationArray[2],$equationArray[2] * (-1),$equationArray[2]);

		}else{
		$equationArray[$equalSignKey] = "+";
		}
		//temporary record $temp for replacement
		$temp = $equationArray[0];
		$equationArray[0] = str_replace($equationArray[0],"\$x",$equationArray[0]);

		//add semicolon
		$equationArray[count($equationArray)] = ";";
		$properEquation = implode(" ",$equationArray);
		//execute
		eval($properEquation);
		if ($temp == "-x"){
		$temp = "-1x";
		}
		if (strlen($temp) == 1){
			$temp1 = 1;
			$x = $x/$temp1;
			echo $x;
		}elseif(strlen($temp)>1){
			for ($i=0;$i<strlen($temp)-1;$i++){
			$tempswap[$i] = $temp[$i];
			}
		$implodeTempSwap = implode($tempswap);
		echo $x = $x/$implodeTempSwap;
		}
	}

 $equation1 = "5x + 25 = -5";
 echo "Example 1 : x = ";
 axPluxbEquation($equation1);
 
 echo "\n";
 $equation2 = "x + 7 = 14"; echo "Example 2 : x = "; axPluxbEquation($equation2); echo "
"; $equation3 = "4x + 0 = 32"; 
 echo "Example 3 : 4x = 32 or 4x + 0 = 32 | x = ";
 axPluxbEquation($equation3);

 ?>
 </html>