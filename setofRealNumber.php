<html>	

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="border-collapse:collapse;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1em;color:green;">Algebra >> Pre-Algebra >> Set of Real Numbers :</font></b><br>
					<p>
					Objective: Ability to call validate Natural Number, Whole Number, Rational Number and Integers.<br>
					</p>
					<p>
					For quick understanding we will look at <b>Natural Numbers: N = (1,2,3,...n,n+1,....)</b>, <b>Integers: Z = (....,-3,-2,-1,0,1,2,3,...)</b>, <b>Whole numbers: N<sub>0</sub> = (0,1,2,3,....)</b>, and <b>Rational numbers: Q = (a/b | a,b are integers, b is not 0)</b>. I will show you how to get all the set of real numbers in PHP.
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
					Example 1: Natural Numbers : N = (1,2,3,.....) <br>
					Example 2: Integers : Z = (....,-3,-2,-1,0,1,2,3,....) <br>
					Example 3: Whole Number : N<sub>0</sub> = (0,1,2,3,....)<br>
					Example 4: Rational Number : (a/b | a,b are integers, b is not 0)<br>
					</td>
					<td width = 50%>
					Example 5: Converting Rational Number into Fraction.
					</td>
				</tr>
			</table>
			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid: #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; tom: 4px;">
					<td> 
					<b><font style="font-size:1em">Codes :</font></b>
						<P>
<spamb>&lt;html></spamb>
							<br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
	<spamg>//validate integer</spamg>
	<spamr>echo</spamr> "Example1 : ";
	$int = 2;
		if (!filter_var($int, FILTER_VALIDATE_INT)===false){
			<spamr>echo</spamr> "Variable is an Integer";
		}else {
			<spamr>echo</spamr> "Variable is not an Integer";
		}
		
	<spamg>//validate Natural Number</spamg>
	<spamr>echo</spamr> "\n";
	<spamr>echo</spamr> "Example2 : ";
	$nNumber = 3;
		if (!filter_var($nNumber, FILTER_VALIDATE_INT)===false){
			if ($nNumber >= 1){
				echo "Variable is a Natural Number ";
			}
					
		}else {
			<spamr>echo</spamr> "Variable is not an Integer which it is not a Natural number as well";
		}
	<spamg>//validate Whole Number</spamg>
	<spamr>echo</spamr> "\n";
	<spamr>echo</spamr> "Example3 : ";
	$wNumber = 3;
		if (!filter_var($wNumber, FILTER_VALIDATE_INT)===false){
			if ($wNumber >= 0){
				<spamr>echo</spamr> "Variable is a Whole Number Number ";
			}
					
		}else {
			<spamr>echo</spamr> "Variable is not an Integer which it is not a whole number as well";
		}
	<spamg>//validate rational Number</spamg>
	<spamr>echo</spamr> "\n";
	<spamr>echo</spamr> "Example4 : ";
	$rNumber = 3.2;
		if (!filter_var($wNumber, FILTER_VALIDATE_FLOAT)===false){
		<spamr>echo</spamr> "Variable is a Rational Number";
					
		}else {
		<spamr>echo</spamr> "Variable is not a rational number";
		}
	<spamr>echo</spamr> "\n";
	<spamr>echo</spamr> "Example5 : ";
	$decimal = 66.66667;
	
	<spamg>//convert from decimal to fraction</spamg>
	$stringDecimal = (string)$decimal;
	for ($i=0; $i&lt;strlen($stringDecimal);$i++){
		$decimalArray[$i] = $stringDecimal[$i];
	}
	$fullstopSignKey =  array_search(".",$decimalArray);
	$fraction = (pow(10,strlen($stringDecimal)-$fullstopSignKey+1)) * $decimal;
	
	<spamg>//simplify fraction</spamg>
	$xandy1;											
	function simplifyFactor($a,$b){
		global $xandy1;
		$a = abs($a);
		$b = abs($b);
		$x = $a;
		$y = $b;
		//if $a&lt; $b
		if ($a &lt; $b){
			list($b,$a) = array($a,$b);
		}
		if ($b == 0){
			<spamr>echo</spamr> "Infinite Number";
			
		}else {
			$r = $a % $b;
			//Euclidean algorithm
			while ($r>0){
				$a = $b;
				$b = $r;
				$r = $a % $b;
			}
			$x = $x/$b;
			$y = $y/$b;
			<spamr>echo</spamr> "$x". "/" . "$y";
			
			$xandy1 = $x/$y;
			}
	
	}
	simplifyFactor($fraction,pow(10,strlen($stringDecimal)-$fullstopSignKey+1));
</pre>
<spamb>?></spamb> <br>
<spamb>&lt;/html></spamb>
						</P>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50%>
						<form action="" method = "post" id="tryitform">
							<b><font style="font-size:1.2em">PHP Code :</font></b><br><br>
							<textarea form="tryitform" name="txtcode" style="width:320px; height:340px; font-size:1em;"></textarea> 
						
					</td>
					<td width = 50% valign ="top">
							<b><font style="font-size:1.2em">Result :</font></b><br><br>
						<textarea form="tryitform" name="txtresult" style="width:320px; height:340px; font-size:1em;">
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>

			
</html>