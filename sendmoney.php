
<html>

		
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Games >> Verbal Arithmetic >> Send More Money :</font></b><br>
					<p>
					<b>Objective :</b> Verbal arithmetic of SEND MORE MONEY on PHP.
					</p>
					<p>
					<b>Send More Money : </b>
<pre>	    S E N D
	+   M O R E
	-----------
	  M O N E Y</pre>
					
					</p>
					</td>
				</tr>
				<tr>
					<td>
<?php
$e = 0;
$y = 0;
//m = 1 since it is the only possible answer
	$m = 1;
	$s = 9;// cos it carry on to column 5 so it must be 9
	$o = 0;
	$n = $e + 1;// carry on from column 2 and $0 = 0
	//there were no carry in column 2, then ( N + R ) mod 10 = E, and N = E + 1, so ( E + 1 + R ) mod 10 = E which means ( 1 + R ) mod 10 = 0, so R = 9. But S = 9, therefore must be a carry in column 2 so 
	$r = 8;
	//carry in column 2
	//$d + $e = 10 + $y;
	//y must be at lease 2, where 
	//$d+$e = 12;
	//available pair (5,6) and (6,7), which
	$e =7; $d =7;
	//from $n = $e +1;
	$n = 6;
	$e = 5;
	//$d+$e = 12
	$y = 2;
echo "<pre>
    9 5 6 7
+   1 0 8 5
-----------
  1 0 6 5 2
	</pre>";
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
<pre style = "font-family:'Time New Roman'; width:650px">
<spamb>&lt;html></spamb> 	
<spamb>&lt;?php</spamb>
$e = 0;
$y = 0;
<spamg>//m = 1 since it is the only possible answer</spamg>
	$m = 1;
	$s = 9;<spamg>// cos it carry on to column 5 so it must be 9</spamg>
	$o = 0;
	$n = $e + 1;<spamg>// carry on from column 2 and $0 = 0</spamg>
	//there were no carry in column 2, then ( N + R ) mod 10 = E, and N = E + 1, 
	so ( E + 1 + R ) mod 10 = E which means ( 1 + R ) mod 10 = 0, so R = 9. 
	But S = 9, therefore must be a carry in column 2 so 
	$r = 8;
	<spamg>//carry in column 2</spamg>
	<spamg>//$d + $e = 10 + $y;</spamg>
	<spamg>//y must be at lease 2, where </spamg>
	<spamg>//$d+$e = 12;</spamg>
	<spamg>//available pair (5,6) and (6,7), which</spamg>
	$e =7; $d =7;
	<spamg>//from $n = $e +1;</spamg>
	$n = 6;
	$e = 5;
	<spamg>//$d+$e = 12</spamg>
	$y = 2;
echo "&lt;pre>
    9 5 6 7
+   1 0 8 5
-----------
  1 0 6 5 2
	&lt;/pre>";
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










