
<html>


			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Pre-Algebra >> Order of Operations :</font></b><br>
					<p>
					<b>Objective:</b> Able to separate order of operation by using parenthesis<br>
					</p>
					<p>
					We will look at the order of how PHP execute each operation. If there is no parenthesis, Multiplication and division are done first before addition and subtraction.
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
					Example 1: 15 - 3 + 4 * 2 + 2 / 2 = 21<br>
					Example 2: 2 + 3(2) <sup>2</sup> = 14 <br>
					Example 3: 2{3<sup>3</sup> - 5[22-5(4<sup>4</sup> + 1)] (-2)} = 2774<br>
					</td>
					<td width = 50%>
					
					
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
<spamb>&lt;html> </spamb>					
<spamb>&lt;?php </spamb>
	echo "Example 1 : ";
	echo $value1 = 15 - 3 + 4 * 2 + 2 / 2;
	echo "\n";
	echo "Example 2 : ";
	echo $value2 = 2 + 3 * pow(2,2); 
	echo "\n";
	echo "Example 3 : ";
	echo $value3 = 2 * (pow(3,3) - 5 * (pow(4,4) - 5 * (23 + 1))*(-2));
<spamb>?></spamb>
<spamb>&lt;/html> </spamb>
</pre>	
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50%>
						<form action="" method = "post" name = "formOutput" id="tryitform">
							<b><font style="font-size:1.2em">PHP Code :</font></b><br><br>
							<textarea form="tryitform" name="txtcode" style="width:320px; height:350px; font-size:1em;"></textarea> 
						
					</td>
					<td width = 50% valign = "top">
						
							<b><font style="font-size:1.2em">Result :</font></b><br><br>
						<textarea name="txtresult" id ="tryitform" style="width:320px; height:350px; font-size:1em;">
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
							<input type ="submit" name = "btnTryit"form="tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>
			
</html>
