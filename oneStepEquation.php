<html>	

			<table width = 659px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Solving Linear Equations >> Linear Equation :</font></b><br>
					<p>
					Objective: Able to sovle one-step linear equations<br>
					</p>
					<p>
					One-Step linear equations are to solve a value from a variable that is not presented in the equation. I will show you how to do it on PHP.
					</p>
					</td>
				</tr>
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; border: 0px ; 
			solid: #A7C942; tom: 4px;">
					<td width = 50%>
					<b><font style="font-size:1em">Examples :</font></b><br>
					Example 1: 5x + 25 = -5 <br>
					Example 2: x + 7 = 14 <br>
					Example 3: 4x = 32 <br>
					</td>
					<td width = 50%>
					
					</td>
				</tr>
			</table>
			<table width = 659px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid: #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; tom: 4px;">
					<td> 
					<b><font style="font-size:1em">Codes :</font></b><br>

<spamb>&lt;html></spamb><br>
<spamb>&lt;?php</spamb><br>
<pre style = "font-family:'Time New Roman'">
	<spamg>//always place a number infront of x, even 1. </spamg>
	<spamg>//The equation is ax + b = Y </spamg>
	<spamg>//there must be a single spacing between the equation</spamg>
	
	function axPluxbEquation($equation){
		$x;
		$equationArray = explode (" ", $equation);
		$equalSignKey =  array_search("=",$equationArray);
	
		<spamg>//Swap between = and +,- </spamg>
		list($equationArray[1],$equationArray[$equalSignKey]) = 
		array($equationArray[$equalSignKey],$equationArray[1]);
	
		<spamg>//change postive to negative if + sign and vis versa</spamg>
		if ($equationArray[$equalSignKey] == "+"){
		
			$equationArray[2] = str_replace($equationArray[2],
			$equationArray[2] * (-1),$equationArray[2]);
		
		}else{
			$equationArray[$equalSignKey] = "+";
		}
		
		<spamg>//temporary record $temp for replacement</spamg>
		$temp = $equationArray[0];
		$equationArray[0] = str_replace($equationArray[0],"\$x",$equationArray[0]);
	
		<spamg>//add semicolon</spamg>
		$equationArray[count($equationArray)] = ";";
		$properEquation = implode(" ",$equationArray);
		
		<spamg>//execute</spamg>
		eval($properEquation);
		if ($temp == "-x"){
			$temp = "-1x";
		}
		if (strlen($temp) == 1){
			$temp1 = 1;
			$x = $x/$temp1;
			echo $x;
		}elseif(strlen($temp)>1){
			for ($i=0;$i&lt;strlen($temp)-1;$i++){
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
	$equation2 = "x + 7 = 14";
	echo "Example 2 : x = ";
	axPluxbEquation($equation2);
	echo "&lt;br>";
	$equation3 = "4x + 0 = 32"; 
	echo "Example 3 : 4x = 32 or 4x + 0 = 32 | x = ";
	axPluxbEquation($equation3);
</pre>
<spamb>?></spamb><br>
<spamb>&lt;/html></spamb><br>
				
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50%>
						<form action="" method = "post" id="tryitform">
							<b><font style="font-size:1.2em">PHP Code :</font></b><br><br>
							<textarea form="tryitform" name="txtcode" style="width:320px; height:350px; font-size:1em;"></textarea> 
						
					</td>
					<td width = 50% valign="top">
						
							<b><font style="font-size:1.2em">Result :</font></b><br><br>
						<textarea form="tryitform" name="txtresult" style="width:320px; height:350px; font-size:1em;">
								<?php 
									if (isset($_POST['txtcode'])){
										$txtcode1 = $_POST['txtcode'];
										$txtcode1 = str_replace("<html>","",$txtcode1);
										$txtcode1 = str_replace("</html>","",$txtcode1);
										//echo strlen($txtcode1);
										ob_start();
										eval("?>".$txtcode1);
										$this_string = ob_get_contents();
										ob_end_flush();
										//echo strlen($this_string);
										
									} 
								?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td> 
							<input type ="submit" name="btnTryit" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>

			
</html>

