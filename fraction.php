<html>	

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Pre-Algebra >> Fractions :</font></b><br>
					<p>
					<b>Objective: </b> Able to Reduce, Substraction, Addition, Multiply, and Division with fractions<br>
					</p>
					<p>
					We would like to have our fractions to be reduced to <b>Smaller Fractions</b>. Fraction is seperated by numerator and denominator. Numerator is the top part of the fraction while Denominator is the buttom part of the fraction.
					</p>
					</td>
				</tr>
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; border: 0px ; 
			solid: #A7C942; tom: 4px;"
				>
					<td width = 50%>
					<b><font style="font-size:1em">Examples :</font></b><br>
					Example 1: 36 / 6 = 6 <br>
					Example 2: 44 / 8 = 11/2 <br>
					Example 3: (10 / 2) / (27 / 3) = 5/9<br>
					</td>
					<td width = 50%>
					Example 4: (6 / 7) x (5 / 2) = 15/7<br>
					Example 5: (5 / 7) - (5 / 2) = - (25/14)<br>
					Example 6: (10 / 3) + (3 / 2) =  29/6<br>
					</td>
				</tr>
			</table>
			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0>
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td> 
					<b><font style="font-size:1em">Code :</font></b><br>
<pre style = "font-family:'Time New Roman'">
<spamb>&lt;html></spamb> 							
<spamb>&lt;?php </spamb>
$value1 = 36 / 6;
echo "Example 1: " . $value1;
echo "\n";
	$xandy1;						
	echo "Example 2: 44 / 8 = " ;					
	function simplifyFactor($a,$b){
		global $xandy1;
		$a = abs($a);
		$b = abs($b);
		$x = $a;
		$y = $b;
		
		<spamg>//if $a&lt; $b</spamg>
		if ($a &lt; $b){
			list($b,$a) = array($a,$b);
		}
		if ($b == 0){
			echo "Infinite Number";
			
		}else {
			$r = $a % $b;
			<spamg>//Euclidean algorithm</spamg>
			while ($r>0){
				$a = $b;
				$b = $r;
				$r = $a % $b;
			}
			$x = $x/$b;
			$y = $y/$b;
			echo "$x". "/" . "$y";
			
			$xandy1 = $x/$y;
			}
	
	}
	
	simplifyFactor(44,8);
	<spamg>//result will always be positive put the negative sign by yourself</spamg>
	
	echo "\n";
	echo "Example 3 : (10 / 2) / (27 / 3) = ";
	echo "( ";
	simplifyFactor(10,2);
	$num1 = $xandy1;
	echo " ) ";
	echo " / ";
	echo " ( ";
	simplifyFactor(27,3);
	$num2 = $xandy1;
	echo " ) ";
	echo "\n";
	echo "Example 3 : ";
	echo $num1 ."/".$num2;
	
<spamb>?></spamb>
<spamb>&lt;/html> </spamb>
</pre>	
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
							<input type ="submit" name="btnTryit" form = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.4em; font-family: Georgia, Serif; width:100px; height:33px">
							</form>
					</td>
				</tr>
			</table>
			
</html>











