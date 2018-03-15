<html>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Special Math >> Prime Number >> Prime Number 1 :</font></b><br>
					<p>
					<b>Objective: </b>How to find Prime Number with PHP and how to check if it is prime number.
					</p>
<?php

echo "<h2>Prime Number </h2>";

//list all prime number till memory is full
	$input = 100;
	$testnumber = 0;

while ($testnumber <= $input){
	PrimeNumber ($testnumber);
	$testnumber++;
}
$result;
function PrimeNumber($result){
$pconstant = 1;
$ptest = array();
$pdivide = array();
$prime = array();
While ($pconstant <= $result){
	$ptest[$pconstant] = $pconstant;
	
		$pdivide[$pconstant] = $result / $ptest[$pconstant];
			//echo "$pdivide[$pconstant] = $result / $ptest[$pconstant]" . "<br>";
			if (is_int($pdivide[$pconstant])){
				$prime[$pconstant] = $pdivide[$pconstant];
				//Echo "$pdivide[$pconstant] is a prime number" . "<br>";
				}else {}
	
	//echo "pconstant[$pconstant] :" . $pconstant;
	//echo "<br>";
	//echo "<br>";
	$pconstant++;
}
	if (count($prime) <= 2) {
		echo "$result is a prime number";
		echo "<br>";
	}
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
					<font style="font-size:1em"><b>Codes :</b> The code is depending on server memory.</font>
						<P>
<spamb>&lt;html></spamb>
							<br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
echo "&lt;h2>Prime Number &lt;/h2>";
<spamg>//list all prime number till memory is full</spamg>
$input = 1000000;
$testnumber = 0;

while ($testnumber &lt;= $input){
	PrimeNumber ($testnumber);
	$testnumber++;
}
$result;
function PrimeNumber($result){
$pconstant = 1;
$ptest = array();
$pdivide = array();
$prime = array();
While ($pconstant &lt;= $result){
	$ptest[$pconstant] = $pconstant;
	
		$pdivide[$pconstant] = $result / $ptest[$pconstant];
			//echo "$pdivide[$pconstant] = $result / $ptest[$pconstant]" . "&lt;br>";
			if (is_int($pdivide[$pconstant])){
				$prime[$pconstant] = $pdivide[$pconstant];
				//Echo "$pdivide[$pconstant] is a prime number" . "&lt;br>";
				}else {}
	
	//echo "pconstant[$pconstant] :" . $pconstant;
	//echo "&lt;br>";
	//echo "&lt;br>";
	$pconstant++;
}
if (count($prime) &lt;= 2) {
	echo "$result is a prime number";
	echo "\n";
}
}

<spamg>//check if it is a prime number</spamg>
PrimeNumber1(4);

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
	echo "$result is a prime number";
	echo "\n";
}else {echo $result ." is not a prime number";}
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

