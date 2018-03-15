<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Calculus >> Limit Laws >> Limit Laws :</font></b><br>
					<p>
					<b>Objective: </b>Laws of Limit on PHP.
					
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
					<td width = 100%>
					<b><font style="font-size:1em"></font></b>
<?php

//function
	function below($a){
		return "<div class='belowcharacter'>x&#8594;$a</div>";
	}
	function below1($a){
		return "<div class='belowcharacter1'>x&#8594;$a</div>";
	}
	function radicalfun($a){
		return "<div class='radical'>$a</div>";
	}

//Basic Limit
	echo "<b><u>Basic Limit</u></b><br><br>";
	echo "<div class='belowcharacter'>x&#8594;a</div>lim C = ";
	echo "C , if C is constant.<br>";
	echo "<div class='belowcharacter'>x&#8594;a</div>lim X = ";
	echo "a <br><br>";

//Addition
	echo "<b><u>Addition</u></b><br><br>";
	echo below('a')."lim f(x) + ".below('a')."lim g(x) = ".below('a')." lim [f(x) + g(x)]";
	echo "<br><br>";

//subtraction
	echo "<b><u>subtraction</u></b><br><br>";
	echo below('a')."lim f(x) - ".below('a')."lim g(x) = ".below('a')." lim [f(x) - g(x)]";
	echo "<br><br>";

//Multiply
	echo "<b><u>Multiply</u></b><br><br>";
	echo below('a')."lim f(x) . ".below('a')."lim g(x) = ".below('a')." lim [f(x) . g(x)]";
	echo "<br><br>";

//divide
	echo "<b><u>Division</u></b><br><br>";
	echo below('a')."lim f(x) / ".below('a')."lim g(x) = ".below('a')." lim [f(x) / g(x)] , if ".below('a')."lim g(x) &ne; 0" ;
	echo "<br><br>";

//Exponents
	echo "<b><u>Exponents</u></b><br><br>";
	echo below1('a')."lim x <sup>n</sup> = a <sup>n</sup>";
	echo "<br><br>";

	echo "[".below1('a')."lim f(x) ]<sup>n</sup> = ".below1('a')."lim (f(x)) <sup>n</sup>" ;
	echo "<br><br>";

//Root
	echo "<b><u>Root</u></b><br><br>";
	echo below('a')."lim ".radicalfun('n')."&radic;x = ".below('a')."lim ".radicalfun('n')."&radic;a , provided a > 0";
	echo "<br><br>";

	echo radicalfun('n')."&radic;[".below('a')."lim f(x)] = ".below('a')."lim ".radicalfun('n')."&radic;f(x)";
	echo "<br><br>";

//Right and left limit
	echo "<b><u>Right and left limit</u></b><br><br>";
	echo below('a')."lim f(x) = M <br><br>";
	echo below('+a')."lim f(x) = ".below('-a')."lim f(x) = M";
	echo "<br><br>";
	
//Squeeze Theorem f(x)<=g(x)<=h(x)
	echo "<b><u>Squeeze Theorem f(x)<=g(x)<=h(x)</u></b><br><br>";
	echo below('a')."lim f(x) = ".below('a')."lim h(x) = M <br>";
	echo "Then ".below('a')."lim g(x) = M <br><br>";
	
//Limit Doesn't Exist
	echo "<b><u>Limit Doesn't Exist</u></b><br><br>";
	echo below('a')."lim f(x) / ".below('a')."lim h(x) = ? , given " .below('a')."lim h(x) = 0 <br>";
	echo "Then Limit doesn't exist";
?> 

					</td>
					<td valign="top">
	
					
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
<spamb>&lt;html></spamb><br>
<pre style= "font-family: 'Time New Roman';">
<spamb>&lt;style></spamb>
.belowcharacter{
		font-size:0.6em;
		position:absolute;
		display:inline-block;
		margin-top:11px;
		
	}
	.belowcharacter1{
		font-size:0.6em;
		position:absolute;
		display:inline-block;
		margin-top:16px;
		
	}
	.radical{
		font-size:0.6em;
		position:absolute;
		display:inline-block;
		margin-top:-5px;
	}
<spamb>&lt;/style></spamb>

<spamb>&lt;?php</spamb>

<spamg>//function</spamg>
	function below($a){
		return "&lt;div class='belowcharacter'>x&#8594;$a&lt;/div>";
	}
	function below1($a){
		return "&lt;div class='belowcharacter1'>x&#8594;$a&lt;/div>";
	}
	function radicalfun($a){
		return "&lt;div class='radical'>$a&lt;/div>";
	}

<spamg>//Basic Limit</spamg>
	echo "&lt;b>&lt;u>Basic Limit&lt;/u>&lt;/b>\n\n";
	echo "&lt;div class='belowcharacter'>x&#8594;a&lt;/div>lim C = ";
	echo "C , if C is constant.\n";
	echo "&lt;div class='belowcharacter'>x&#8594;a&lt;/div>lim X = ";
	echo "a \n\n";

<spamg>//Addition</spamg>
	echo "&lt;b>&lt;u>Addition&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim f(x) + ".below('a')."lim g(x) = ".below('a')." lim [f(x) + g(x)]";
	echo "\n\n";

<spamg>//subtraction</spamg>
	echo "&lt;b>&lt;u>subtraction&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim f(x) - ".below('a')."lim g(x) = ".below('a')." lim [f(x) - g(x)]";
	echo "\n\n";

<spamg>//Multiply</spamg>
	echo "&lt;b>&lt;u>Multiply&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim f(x) . ".below('a')."lim g(x) = ".below('a')." lim [f(x) . g(x)]";
	echo "\n\n";

<spamg>//divide</spamg>
	echo "&lt;b>&lt;u>Division&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim f(x) / ".below('a')."lim g(x) = ".below('a')." lim [f(x) / g(x)] , if ".
	below('a')."lim g(x) &ne; 0" ;
	echo "\n\n";

<spamg>//Exponents</spamg>
	echo "&lt;b>&lt;u>Exponents&lt;/u>&lt;/b>\n\n";
	echo below1('a')."lim x &lt;sup>n&lt;/sup> = a &lt;sup>n&lt;/sup>";
	echo "\n\n";

	echo "[".below1('a')."lim f(x) ]&lt;sup>n&lt;/sup> = ".below1('a')."lim (f(x)) &lt;sup>n&lt;/sup>" ;
	echo "\n\n";

<spamg>//Root</spamg>
	echo "&lt;b>&lt;u>Root&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim ".radicalfun('n')."&radic;x = ".below('a')."lim ".radicalfun('n')."&radic;a , 
	provided a > 0";
	echo "\n\n";

	echo radicalfun('n')."&radic;[".below('a')."lim f(x)] = ".below('a')."lim ".radicalfun('n')."&radic;f(x)";
	echo "\n\n";

<spamg>//Right and left limit</spamg>
	echo "&lt;b>&lt;u>Right and left limit&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim f(x) = M \n\n";
	echo below('+a')."lim f(x) = ".below('-a')."lim f(x) = M";
	echo "\n\n";
	
<spamg>//Squeeze Theorem f(x)&lt;=g(x)&lt;=h(x)</spamg>
	echo "&lt;b>&lt;u>Squeeze Theorem f(x)&lt;=g(x)&lt;=h(x)&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim f(x) = ".below('a')."lim h(x) = M \n";
	echo "Then ".below('a')."lim g(x) = M \n\n";
	
<spamg>//Limit Doesn't Exist</spamg>
	echo "&lt;b>&lt;u>Limit Doesn't Exist&lt;/u>&lt;/b>\n\n";
	echo below('a')."lim f(x) / ".below('a')."lim h(x) = ? , given " .below('a')."lim h(x) = 0 \n";
	echo "Then Limit doesn't exist";
</pre>
<spamb>?></spamb><br>
<spamb>&lt;/html></spamb>
						</P>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50% valign = "top">
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled>Sorry, for the inconvenience!
							</form>
					</td>
				</tr>
			</table>

			
</html>