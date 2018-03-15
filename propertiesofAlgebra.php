<html>

			<table width = 100% border = 0 cellpadding = 0 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 0px;
			padding-bot: 0px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Pre-Algebra >> Properties of Algebra :</font></b><br>
					<p>
					<b>Objective: </b> Combining like terms and substituting given values to simplify algebraic expressions.<br>
					</p>
					<p>
					Substitution is a first step than come the next step which is the order of operation.
					</p>
					</td>
				</tr>
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 0px;
			padding-bot: 0px;
			background-color: #EAF2D3;
			color: black; border: 0px ; 
			solid: #A7C942; tom: 4px;"
				>
					<td width = 50%>
					<b><font style="font-size:1em">Examples :</font></b><br>
					Example 1: y<sup>2</sup> + y - z; use y = 2, z = 3 (Substitute)<br>
					Example 2: 9(b+11) + 4b = 13b + 99 = 125 ; b = 2 (Simplify)<br>
					Example 3: (4x<sup>2</sup> - 3) - (4x<sup>2</sup> + 5x); x = 2;<br>
					</td>
					<td width = 50%>
					
					
					</td>
				</tr>
			</table>
			<table width = 100% border = 0 cellpadding = 0 cellspacing = 0>
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td> 
					<b><font style="font-size:1em">Code :</font></b><br>
<pre style = "font-family:'Time New Roman'">
<spamb>&lt;html> </spamb>						
<spamb>&lt;?php </spamb>
	echo "Example 1 : y<sup>2</sup> + y - z =";
	$y = 2;$z = 3;
	echo $value1 = pow($y,2) + $y - $z;
	echo "\n";
	echo "Example 2 : if b = 2; 9(b+11) + 4b = 13b + 99 = ";
	$b = 2;
	echo $value2 = 9 *($b + 11) + (4 * $b); 
	echo "\n";
	echo "Example 3 : (4x<sup>2</sup> - 3) - (4x<sup>2</sup> + 5x) = ";
	$x = 2;
	echo $value3 = ((4 * pow($x,3)) - 3) - ((4 * pow($x,2)) + (5 * $x));
<spamb>?></spamb>
<spamb>&lt;/html></spamb> 
</pre>	
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50%>
						<form action="" method = "post" name = "formOutput" id = "FormTryItId">
							<b><font style="font-size:1.2em">PHP Code :</font></b><br><br>
							<textarea form="tryitform" name="txtcode" form= "FormTryItId" style="width:320px; height:350px; font-size:1em;"></textarea> 
						
					</td>
					<td width = 50% valign = "top">
						
							<b><font style="font-size:1.2em">Result :</font></b><br><br>
						<textarea name="txtresult" form= "FormTryItId" style="width:320px; height:350px; font-size:1em;">
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
							<input type ="submit" name = "btnTryit" form="tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
						</form>
					</td>
				</tr>
			</table>
			
</html>





