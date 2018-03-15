<html>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Special Math >> Prime Number >> Fermat's Little Theorem :</font></b><br>
					<p>
					<b>Objective:</b> How to find Prime Number using Fermat's little theorem with PHP.<br>
						A<sup>p</sup> - A is divisible by p. P is a prime number under condition of (1 &lt;= a &lt;= p).<br>
						Note : 2<sup>p</sup>-2. There are 2183 error for 25 billion numbers. It is not perfect for finding a prime number.
					</p>

<?php

echo "<h3>Prime Number- Fermat's little theorem</h3>";

//Check if it is a prime number 
	//echo PHP_INT_SIZE;
	//Fermat's little theorem
	//the highest for computer to compute is 54
	//echo PHP_INT_MAX;echo "<br>";
	echo $p = 54;
	echo " is ";
	for($x=1;$x<=$p;$x++){
		$prime = pow($x,$p)-$x;
		if ( $prime%$p == 0){
			$result = "Pass";
		}else{$result = "False";break;}
	}
	if ($result == "Pass"){
		echo "Prime";
	}else{echo "not a Prime";}
	echo "<br>";
	
	//Long version
	PrimeNumber1(54);
	$result;
	function PrimeNumber1($result){
		$pconstant = 1;
		$ptest = array();
		$pdivide = array();
		$prime = array();
		While ($pconstant <= $result){
			$ptest[$pconstant] = $pconstant;
			$pdivide[$pconstant] = $result / $ptest[$pconstant];
			if (is_int($pdivide[$pconstant])){
				$prime[$pconstant] = $pdivide[$pconstant];
				}
		$pconstant++;
		}
		if (count($prime) <= 2) {
			echo "$result is a prime";
			echo "\n";
		}else {echo $result ." is not a prime";}
	}

?>

					</td>
				</tr>
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; border: 0px ; 
			solid: #A7C942; tom: 4px;">
					<td width = 90%>
					<b><font style="font-size:1em"></font></b>
					
					</td>
					<td width = 10%>
					
					</td>
				</tr>
			</table>
			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid: #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; tom: 4px;">
					<td> 
					<font style="font-size:1em"><b>Codes :</b> The code is depending on server memory and processing performance.</font>
					
<P>
<spamb>&lt;html></spamb>
							<br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
echo "&lt;h3>Prime Number- Fermat's little theorem&lt;/h3>";

<spamg>//Check if it is a prime number </spamg>
	<spamg>//Fermat's little theorem</spamg>
	<spamg>//the highest for computer to compute is 54</spamg>
	echo $p = 54;
	echo " is ";
	for($x=1;$x&lt;=$p;$x++){
		$prime = pow($x,$p)-$x;
		if ( $prime%$p == 0){
			$result = "Pass";
		}else{$result = "False";break;}
	}
	if ($result == "Pass"){
		echo "Prime";
	}else{echo "not a Prime";}
	echo "\n";
	
	<spamg>//Long version</spamg>
	PrimeNumber1(54);
	$result;
	function PrimeNumber1($result){
		$pconstant = 1;
		$ptest = array();
		$pdivide = array();
		$prime = array();
		While ($pconstant &lt;= $result){
			$ptest[$pconstant] = $pconstant;
			$pdivide[$pconstant] = $result / $ptest[$pconstant];
			if (is_int($pdivide[$pconstant])){
				$prime[$pconstant] = $pdivide[$pconstant];
				}
		$pconstant++;
		}
		if (count($prime) &lt;= 2) {
			echo "$result is a prime";
			echo "\n";
		}else {echo $result ." is not a prime";}
	}
</pre>
<spamb>?></spamb> <br>
<spamb>&lt;/html></spamb>
						</P>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50% valign ="top">
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" >
							</form>
					</td>
				</tr>
			</table>

			
</html>

