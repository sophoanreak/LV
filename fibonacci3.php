<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Special Math >> Fibonacci >> Drawing Fibonacci with Rectangle </font></b><br>
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
	for ($i=5;$i<400;$i+=5){
		imageline($image,$i,0,$i,400,$blackAlpha1);
	}
	for ($i=0;$i<400;$i+=5){
		imageline($image,0,$i,400,$i,$blackAlpha1);
	}
//list fibonacci number from 0 - 14
	$fib[0]= 0;$fib[1]= 1;
	for ($i=2;$i<=20;$i++){
		$fib[$i] = $fib[$i-1]+$fib[$i-2];
	}
//draw fibonacci sequence

		$num1 = 270;
		$num2 = 150;
		$x1 = $num1-$fib[1]-2;
		$y1 = $num2-$fib[1]-2;		
		imagerectangle($image,$num1,$num2,$x1,$y1,$blue);
		//imagearc($image,200,200,$fib[1]*2,$fib[1]*2,0,90,$grey);
		
		$x2 = $num1-$fib[2]-$fib[1]-5;
		$y2 = $num2-$fib[2]-2;
		imagerectangle($image,$num1-$fib[1]-3,$num2,$x2,$y2,$green);
		imagearc($image,$num1-$fib[1]-3,$y2,($x2-$x1)*2,($y2-$y1)*2,180,270,$grey);
	
		$x3 = $x2+$fib[3]+5;
		$y3 = $y2-$fib[3]-5;
		imagerectangle($image,$x2,$y2-1,$x3,$y3,$red);
		imagearc($image,$x3,$y2,($x3-$x2)*2,($y3-$y2)*2,90,180,$grey);
		
		$x4 = $x3+$fib[4]+7;
		$y4 = $y3+$fib[4]+7;
		imagerectangle($image,$x3+1,$y3,$x4,$y4,$yellow);
		imagearc($image,$x3,$y4,($x4-$x3)*2,($y4-$y3)*2,270,360,$grey);
		
		$x5 = $x4-$fib[5]-12;
		$y5 = $y4+$fib[5]+12;
		imagerectangle($image,$x4,$y4+1,$x5,$y5,$blue);
		imagearc($image,$x5,$y4,($x5-$x4)*2,($y5-$y4)*2,90,180,$grey);
		
		$x6 = $x5-$fib[6]-19;
		$y6 = $y5-$fib[6]-19;
		imagerectangle($image,$x5-1,$y5,$x6,$y6,$green);
		imagearc($image,$x5,$y6,($x6-$x5)*2,($y6-$y5)*2,270,360,$grey);
		
		$x7 = $x6+$fib[7]+31;
		$y7 = $y6-$fib[7]-31;
		imagerectangle($image,$x6,$y6-1,$x7,$y7,$red);
		imagearc($image,$x7,$y6,($x7-$x6)*2,($y7-$y6)*2,90,180,$grey);
		
		$x8 = $x7+$fib[8]+50;
		$y8 = $y7+$fib[8]+50;
		imagerectangle($image,$x7+1,$y7,$x8,$y8,$yellow);
		imagearc($image,$x7+1,$y8,($x8-$x7)*2,($y8-$y7)*2,270,360,$grey);
		
		$x9 = $x8-$fib[9]-81;
		$y9 = $y8+$fib[9]+81;
		imagerectangle($image,$x8,$y8+1,$x9,$y9,$blue);
		imagearc($image,$x9,$y8+1,($x8+1-$x9)*2,($y8-$y9)*2,270,360,$grey);
		
		$x10 = $x9-$fib[10]-131;
		$y10 = $y9-$fib[10]-131;
		imagerectangle($image,$x9-1,$y9,$x10,$y10,$green);
		imagearc($image,$x9-1,$y10,($x9-$x10)*2,($y9-$y10)*2,90,180,$grey);
	
//call image
	imagepng($image,"image/fibonacci3.png");
	imagedestroy($image);
	echo '<center><img src="image/fibonacci3.png"></center>';
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
<spamg>//makes grid</spamg>
	for ($i=5;$i&lt;400;$i+=5){
		imageline($image,$i,0,$i,400,$blackAlpha1);
	}
	for ($i=0;$i&lt;400;$i+=5){
		imageline($image,0,$i,400,$i,$blackAlpha1);
	}
<spamg>//list fibonacci number from 0 - 14</spamg>
	$fib[0]= 0;$fib[1]= 1;
	for ($i=2;$i&lt;=20;$i++){
		$fib[$i] = $fib[$i-1]+$fib[$i-2];
	}
<spamg>//draw fibonacci sequence</spamg>

		$num1 = 270;
		$num2 = 150;
		$x1 = $num1-$fib[1]-2;
		$y1 = $num2-$fib[1]-2;		
		imagerectangle($image,$num1,$num2,$x1,$y1,$blue);
		<spamg>//imagearc($image,200,200,$fib[1]*2,$fib[1]*2,0,90,$grey);</spamg>
		
		$x2 = $num1-$fib[2]-$fib[1]-5;
		$y2 = $num2-$fib[2]-2;
		imagerectangle($image,$num1-$fib[1]-3,$num2,$x2,$y2,$green);
		imagearc($image,$num1-$fib[1]-3,$y2,($x2-$x1)*2,($y2-$y1)*2,180,270,$grey);
	
		$x3 = $x2+$fib[3]+5;
		$y3 = $y2-$fib[3]-5;
		imagerectangle($image,$x2,$y2-1,$x3,$y3,$red);
		imagearc($image,$x3,$y2,($x3-$x2)*2,($y3-$y2)*2,90,180,$grey);
		
		$x4 = $x3+$fib[4]+7;
		$y4 = $y3+$fib[4]+7;
		imagerectangle($image,$x3+1,$y3,$x4,$y4,$yellow);
		imagearc($image,$x3,$y4,($x4-$x3)*2,($y4-$y3)*2,270,360,$grey);
		
		$x5 = $x4-$fib[5]-12;
		$y5 = $y4+$fib[5]+12;
		imagerectangle($image,$x4,$y4+1,$x5,$y5,$blue);
		imagearc($image,$x5,$y4,($x5-$x4)*2,($y5-$y4)*2,90,180,$grey);
		
		$x6 = $x5-$fib[6]-19;
		$y6 = $y5-$fib[6]-19;
		imagerectangle($image,$x5-1,$y5,$x6,$y6,$green);
		imagearc($image,$x5,$y6,($x6-$x5)*2,($y6-$y5)*2,270,360,$grey);
		
		$x7 = $x6+$fib[7]+31;
		$y7 = $y6-$fib[7]-31;
		imagerectangle($image,$x6,$y6-1,$x7,$y7,$red);
		imagearc($image,$x7,$y6,($x7-$x6)*2,($y7-$y6)*2,90,180,$grey);
		
		$x8 = $x7+$fib[8]+50;
		$y8 = $y7+$fib[8]+50;
		imagerectangle($image,$x7+1,$y7,$x8,$y8,$yellow);
		imagearc($image,$x7+1,$y8,($x8-$x7)*2,($y8-$y7)*2,270,360,$grey);
		
		$x9 = $x8-$fib[9]-81;
		$y9 = $y8+$fib[9]+81;
		imagerectangle($image,$x8,$y8+1,$x9,$y9,$blue);
		imagearc($image,$x9,$y8+1,($x8+1-$x9)*2,($y8-$y9)*2,270,360,$grey);
		
		$x10 = $x9-$fib[10]-131;
		$y10 = $y9-$fib[10]-131;
		imagerectangle($image,$x9-1,$y9,$x10,$y10,$green);
		imagearc($image,$x9-1,$y10,($x9-$x10)*2,($y9-$y10)*2,90,180,$grey);
	
<spamg>//call image</spamg>
	imagepng($image,"fibonacci3.png");
	imagedestroy($image);
	echo '&lt;center>&lt;img src="fibonacci3.png">&lt;/center>';

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
