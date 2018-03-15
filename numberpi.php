<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Specials >>Super-Star Numbers >> The Number PI :</font></b><br>
					<p>
					<b>Objective:</b> How to find PI on PHP.
					</p>

<?php

echo "<h3>PI</h3>";
//Pi for build in funtion in PHP
	echo "<b><u>Pi from build in function</u></b><br>";
	echo "Pi : ";
	echo M_PI;
	echo "<br><br>";
	
//Pi using infinite Series
	// (4/1)-(4/3)+(4/5)-(4/7)+(4/9)-(4/11)..... to infinity
	echo "<b><u>Pi from infinite series</u></b><br>";
	$amount = 1000000;
	$temp = 0;
	echo "Pi : ";
	for($i=1;$i<=$amount;$i+=4){
		$temp += (4/($i))-(4/($i+2));
	}
	echo floatval($temp)."<br><br>";
	
//Pi using asine function
	/*
	Arcsin refers to the inverse sine in radians
	Sqrt = square root
	Abs = absolute value
	*/
	echo "<b><u>Pi from Arcsine function</u></b>";
	$x = 1;
	$pi = 2 * (asin(sqrt(1-pow($x,2)))+abs(asin($x)));
	echo "<br> Pi : ";
	echo $pi;
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
			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid: #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; tom: 4px;">
					<td> 
					<font style="font-size:1em"><b>Codes :</b> </font>
					
<P>
<spamb>&lt;html></spamb>
							<br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
	echo "&lt;h3>PI&lt;/h3>";
<spamg>//Pi for build in funtion in PHP</spamg>
	echo "&lt;b>&lt;u>Pi from build in function&lt;/u>&lt;/b>&lt;br>";
	echo "Pi : ";
	echo pi();
	echo "&lt;br>&lt;br>";
	
<spamg>//Pi using infinite Series
	// (4/1)-(4/3)+(4/5)-(4/7)+(4/9)-(4/11)..... to infinity</spamg>
	echo "&lt;b>&lt;u>Pi from infinite series&lt;/u>&lt;/b>&lt;br>";
	$amount = 1000000;
	$temp = 0;
	echo "Pi : ";
	for($i=1;$i&lt;=$amount;$i+=4){
		$temp += (4/($i))-(4/($i+2));
	}
	echo floatval($temp)."&lt;br>&lt;br>";
	
<spamg/>//Pi using asine function
	/*
	Arcsin refers to the inverse sine in radians
	Sqrt = square root
	Abs = absolute value
	*/</spamg>
	echo "&lt;b>&lt;u>Pi from Arcsine function&lt;/u>&lt;/b>";
	$x = 1;
	$pi = 2 * (asin(sqrt(1-pow($x,2)))+abs(asin($x)));
	echo "&lt;br> Pi : ";
	echo $pi;
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

