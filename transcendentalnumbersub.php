
<html>
	
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Special >> Transcendental Number >> Transcendental Number :</font></b><br>
					<p>
					<b>Objective :</b> To do and understand Transcendental Number to work on Hilbert's Problem No.7. 
					</p>
					<p>
					<b>Transcendental Number :</b><br>-  is a real or complex number that is not algebraic or not a root of a non-zero polynomial equation with rational coefficients (Transcendental, 2015).<br>
					<br><b>Properties :</b><br> 
					- it is irrational number.<br>
					- it is a solution of the polynomial.
					</p>
					<p>
					<b>Irrational Number :</b><br>-  any real number that cannot be expressed as a ratio of integers.<br>
					</p>
					</td>
				</tr>
				<tr>
					<td>
<?php
//Transcendental Number
	echo "<b>Transcendental Number</b>"."<br>";
	echo "Example : &#928; = ".M_PI."<br>";
	echo "Example : e = ".M_E."<br>";

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

<spamg>//Transcendental Number</spamg>
	echo "&lt;b>Transcendental Number&lt;/b>"."&lt;br>";
	echo "Example : &#928; = ".M_PI."&lt;br>";
	echo "Example : e = ".M_E."&lt;br>";

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










