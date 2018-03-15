
<html>
	
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Special >> Algebraic Number >> Algebraic Number :</font></b><br>
					<p>
					<b>Objective :</b> To do and understand Algebraic Number to work on Hilbert's Problem No.7. 
					</p>
					<p>
					<b>Algebraic Number :</b><br>- Is a number that is a root of a finite, non-zero polynomial in one variable with rational coefficients (Algebraic, 2015).<br>
					</p>
					</td>
				</tr>
				<tr>
					<td>
<?php
//Algebraic Number
echo "Example : 1, 0.1, 2/3, &radic;2,-1. All Integer and , Rational number, "."<br>"; 
echo "Only a few iirational number that are algebraic number which are &radic;2 and &radic;3 and so on.. Because they are used in solving polynomial equation.";

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

<spamg>//Algebraic Number</spamg>
echo "Example : 1, 0.1, 2/3, &radic;2,-1. All Integer and , Rational number, "."&lt;br>"; 
echo "Only a few iirational number that are algebraic number which are &radic;2 and &radic;3 
and so on.. Because they are used in solving polynomial equation.";

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
							<input type ="submit" name="btnTryit" form = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>
			
</html>










