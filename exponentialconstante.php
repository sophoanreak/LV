<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Specials >>Super-Star Numbers >> The Number e :</font></b><br>
					<p>
					<b>Objective:</b> How to find e on PHP. It is often called Euler's number after Leonhard Euler.
					</p>

<?php

echo "<h3>Exponential Constant e</h3>";
//e for build in function in PHP
	echo "<b><u>e from build in function</u></b><br>";
	echo "e : ";
	echo M_E;
	echo "<br><br>";
	
//e from euler's equation
	echo "<b><u>e from euler's equation</u></b><br><br>";
	
	//factorial
	function factorial($n){
		if ($n == 0){
			return $n = 1;
		}else{
			for($i=$n;$i>1;$i-=1){
				$n = $n*($i-1);
			}
			return $n;
		}
	}
	echo "&sum; <div style ='position:absolute;margin-top:-33px;'>&infin;</div>
	<div style ='position:absolute;margin:-5px;'> n = 0</div> (1/n!) = e = ";
	$amount =20;
	$exp = 0;
	for($i=0;$i<=$amount;$i++){
		$exp += 1 / factorial($i);
	}
	echo $exp."<br><br>";

//e from euler's equation
	echo "<b><u>e from euler's equation</u></b><br><br>";
	echo "<div style='position:absolute;margin-top:15px;'>n &rarr; &infin;</div>
	lim (1 + 1/n)<sup>n</sup> = ";
	$amount = 2000000000;
	$exp = 0;
	$exp = pow((1 +(1 / $amount)),$amount);
	echo $exp;
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
echo "&lt;h3>e&lt;/h3>";
<spamg>//e for build in function in PHP</spamg>
	echo "&lt;b>&lt;u>e from build in function&lt;/u>&lt;/b>&lt;br>";
	echo "e : ";
	echo M_E;
	echo "&lt;br>&lt;br>";
	
<spamg>//e from euler's equation</spamg>
	echo "&lt;b>&lt;u>e from euler's equation&lt;/u>&lt;/b>&lt;br>&lt;br>";
	
	<spamg>//factorial</spamg>
	function factorial($n){
		if ($n == 0){
			return $n = 1;
		}else{
			for($i=$n;$i>1;$i-=1){
				$n = $n*($i-1);
			}
			return $n;
		}
	}
	echo "&sum; &lt;div style ='position:absolute;margin-top:-33px;'>&infin;&lt;/div>
	&lt;div style ='position:absolute;margin:-5px;'> n = 0&lt;/div> (1/n!) = e = ";
	$amount =20;
	$exp = 0;
	for($i=0;$i&lt;=$amount;$i++){
		$exp += 1 / factorial($i);
	}
	echo $exp."&lt;br>&lt;br>";

<spamg>//e from euler's equation</spamg>
	echo "&lt;b>&lt;u>e from euler's equation&lt;/u>&lt;/b>&lt;br>&lt;br>";
	echo "&lt;div style='position:absolute;margin-top:15px;'>n &rarr; &infin;&lt;/div>
	lim (1 + 1/n)&lt;sup>n&lt;/sup> = ";
	$amount = 2000000000;
	$exp = 0;
	$exp = pow((1 +(1 / $amount)),$amount);
	echo $exp;
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

