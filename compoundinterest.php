
<html>
	
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Special >> Loan >> Compound Interest :</font></b><br>
					<p>
					<b>Objective :</b> To be able to do Compound Interest. S = P(1+i/n)<sup>nt</sup>
					</p>
					
					</td>
				</tr>
				<tr style="background-color:#EAF2D3;">
					<td>
<?php

	//Compound Interest
	echo "\$n : ";
	echo $n = 6;//number of payments per year
	echo "<br>";
	echo "\$i : ";
	echo $i = 0.08;//interest rate
	echo "<br>";
	echo "\$t : ";
	echo $t = 3;//number of year
	echo "<br>";
	echo "\$p : ";
	echo $p = 33000;//initial investment
	echo "<br>";
	echo "\$s = \$p * pow((1+ (\$i/\$n)),(\$n*\$t)) = ";
	$s = $p * pow((1+ ($i/$n)),($n*$t));
	echo number_format($s,2,".",",");
?>
					</td>
				</tr>

			</table>

			<table width = 100%
			style="padding-bot: 5px;
			background-color: #f1f1f1;
			color: black;
			border: 0px solid #98bf21;
			tom: 4px;">
				<tr>
					<td style="font-size:1em"> 
					<b><font style="font-size:1em">Code :</font></b> 
<pre style = "font-family:'Time New Roman';">
<spamb>&lt;html></spamb> 
<spamb>&lt;?php</spamb> 
	
<spamg>//Compound Interest</spamg>
	echo "\$n : ";
	echo $n = 6;//number of payments per year
	echo "\n";
	echo "\$i : ";
	echo $i = 0.08;//interest rate
	echo "\n";
	echo "\$t : ";
	echo $t = 3;//number of year
	echo "\n";
	echo "\$p : ";
	echo $p = 33000;//initial investment
	echo "\n";
	echo "\$s = \$p * pow((1+ (\$i/\$n)),(\$n*\$t)) = ";
	$s = $p * pow((1+ ($i/$n)),($n*$t));
	echo number_format($s,2,".",",");

<spamb>?></spamb> 
<spamb>&lt;/html></spamb> 
</pre>	
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50% valign="top">
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
							<input type ="submit" name="btnTryit" form = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" >
							</form>
					</td>
				</tr>
			</table>
			
</html>










