<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Special Math >> Fibonacci >> Drawing Fibonacci</font></b><br>
					<p>
					<b>Objective: </b>Drawing a Fibonacci Sequence.
					</p>
					<p>
					
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
					<td width = 90%>
					<b><font style="font-size:1em"></font></b>
<?php
//create background
	
	$width = 400;
	$height = 400;
	$image = imagecreate($width,$height);
//Colors
	$grey = imagecolorallocate($image,200,200,200);
	$black = imagecolorallocate($image,0,0,0);
	$blackAlpha = imagecolorallocatealpha($image,0,0,0,50);
	$blackAlpha1 = imagecolorallocatealpha($image,0,0,0,40);
	$white = imagecolorallocate($image,255,255,255);
	$blue = imagecolorallocate($image,0,0,255);
	$red = imagecolorallocate($image,255,0,0);
	$green = imagecolorallocate($image,0,255,0);
	$yellow = imagecolorallocate($image,240,240,19);
	
	//make the background black
	imagefill($image,0,0,$blackAlpha);
	//makes grid
	/*for ($i=5;$i<400;$i+=5){
		imageline($image,$i,0,$i,400,$blackAlpha1);
	}
	for ($i=0;$i<400;$i+=5){
		imageline($image,0,$i,400,$i,$blackAlpha1);
	}*/
	//list fibonacci number from 0 - 14
	$fib[0]= 0;$fib[1]= 1;
	for ($i=2;$i<=20;$i++){
		$fib[$i] = $fib[$i-1]+$fib[$i-2];
	}
	//draw fibonacci sequence
		imagearc($image, 200, 200, $fib[0], $fib[1],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[2], $fib[1],  90, 180, $grey);
		imagearc($image, 200, 200, $fib[2], $fib[3],  180, 270, $grey);
		imagearc($image, 200, 200, $fib[4], $fib[3],  270, 360, $grey);
		
		imagearc($image, 200, 200, $fib[4], $fib[5],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[6], $fib[5],  90, 180, $grey);
		imagearc($image, 200, 200, $fib[6], $fib[7],  180, 270, $grey);
		imagearc($image, 200, 200, $fib[8], $fib[7],  270, 360, $grey);
		
		imagearc($image, 200, 200, $fib[8], $fib[9],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[10], $fib[9],  90, 180, $grey);
		imagearc($image, 200, 200, $fib[10], $fib[11],  180, 270, $grey);
		imagearc($image, 200, 200, $fib[12], $fib[11],  270, 360, $grey);
		
		imagearc($image, 200, 200, $fib[12], $fib[13],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[14], $fib[13],  90, 180, $grey);
		imagearc($image, 200, 200, $fib[14], $fib[15],  180, 270, $grey);

	//set imagestring
	//imagestring($image,10,120,270,'90',$white);
	
//call image
	imagepng($image,"image/fibonacci2.png");
	imagedestroy($image);
	
	echo '<center><img src="image/fibonacci2.png"></center>';
?>
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
					<b><font style="font-size:1em">Codes :</font></b>
						<P>
<spamb>&lt;html></spamb>
							<br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
<spamg>//create background</spamg>
	$width = 400;
	$height = 400;
	$image = imagecreate($width,$height);
<spamg>//Colors</spamg>
	$grey = imagecolorallocate($image,200,200,200);
	$black = imagecolorallocate($image,0,0,0);
	$blackAlpha = imagecolorallocatealpha($image,0,0,0,50);
	$blackAlpha1 = imagecolorallocatealpha($image,0,0,0,40);
	$white = imagecolorallocate($image,255,255,255);
	$blue = imagecolorallocate($image,0,0,255);
	$red = imagecolorallocate($image,255,0,0);
	$green = imagecolorallocate($image,0,255,0);
	$yellow = imagecolorallocate($image,240,240,19);
	
<spamg>//make the background black</spamg>
	imagefill($image,0,0,$blackAlpha);
	
<spamg>//list fibonacci number from 0 - 14</spamg>
	$fib[0]= 0;$fib[1]= 1;
	for ($i=2;$i&lt;=20;$i++){
		$fib[$i] = $fib[$i-1]+$fib[$i-2];
	}
<spamg>//draw fibonacci sequence</spamg>
		imagearc($image, 200, 200, $fib[0], $fib[1],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[2], $fib[1],  90, 180, $green);
		imagearc($image, 200, 200, $fib[2], $fib[3],  180, 270, $blue);
		imagearc($image, 200, 200, $fib[4], $fib[3],  270, 360, $red);
		
		imagearc($image, 200, 200, $fib[4], $fib[5],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[6], $fib[5],  90, 180, $green);
		imagearc($image, 200, 200, $fib[6], $fib[7],  180, 270, $blue);
		imagearc($image, 200, 200, $fib[8], $fib[7],  270, 360, $red);
		
		imagearc($image, 200, 200, $fib[8], $fib[9],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[10], $fib[9],  90, 180, $green);
		imagearc($image, 200, 200, $fib[10], $fib[11],  180, 270, $blue);
		imagearc($image, 200, 200, $fib[12], $fib[11],  270, 360, $red);
		
		imagearc($image, 200, 200, $fib[12], $fib[13],  0, 90, $grey);
		imagearc($image, 200, 200, $fib[14], $fib[13],  90, 180, $green);
		imagearc($image, 200, 200, $fib[14], $fib[15],  180, 270, $blue);
	
<spamg>//call image</spamg>
	imagepng($image,"ninety.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="ninety.png">&lt;/center>';

</pre>
<spamb>?></spamb> <br>
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled>It is disabled, Sorry for the inconvience!
							</form>
					</td>
				</tr>
			</table>

			
</html>
