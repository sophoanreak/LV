<html>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Calculus >> Limits >> Limit of Tan-Line :</font></b><br>
					<p>
					<b>Objective: </b>The uses of  Derivative on PHP. <br>It is very similar to Limit but we will add a Derivative to find the tangent line at any points on the equation of Y = X * X. <br> Lim (x=>2) of (F(a+x)-F(x))/x.<br> Equation of a Tangent line = Y2-Y1 = M(X2-X1).
					
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
					<td width = 100%>
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
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i<400;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
//add middle lines vertically and horizontally
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);

//loop for the white grid
	for($i=10;$i<400;$i+=5){ 
		imageline($image,198,$i,202,$i,$grey);
	}
	for($i=5;$i<395;$i+=5){ 
		imageline($image,$i,198,$i,202,$grey);
	}
	
//making an arrow head for X and Y coordinate
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
	
//draw y=x*x
//makes parabola from imageline y = x * x
//below 200s is to coordinate (x,y) at the center
//scale up 30 times
	
	//left-side parabola
	for($tempminus=-0.1;$tempminus>=-2.7;$tempminus-=0.1){
		${'n'.($tempminus*-10)} = $tempminus*$tempminus*30;
		${'m'.($tempminus*-10)} = $tempminus*30;	
		}
		
	for($tempminus=-0.1;$tempminus>=-2.5;$tempminus-=0.1){
		imageline($image,${'m'.($tempminus*-10)}+200,200-${'n'.($tempminus*-10)},
		${'m'.(($tempminus*-10)+1)}+200,200-${'n'.(($tempminus*-10)+1)},$green);
	}
	
	//right-side parabola
	for($temp=0.1;$temp<=2.6;$temp+=0.1){
		${'y'.$temp*10} = $temp*$temp*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp<=2.5;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},${'x'.(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
	}
	
	//draw tangent line of point 1,1 from Y = 2x-1
	$x1 = -2; $y1 = (2 * $x1) -1;
	$x2 = 2.5; $y2 = (2 * $x2) - 1;
	
	//scale up 30 times
	$x1 = $x1*30;$y1 = $y1*30;
	$x2 = $x2*30;$y2 = $y2*30;
	
	//coordinate to the center
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	
	//draw tangent line
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	
	//draw coordination lines
	$x1 = 1*30; $y1 = 1*30;
	$x2 = 1*30; $y2 = 0;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	$x1 = 1*30; $y1 = 1*30;
	$x2 = 0; $y2 = 1*30;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	imagestring($image,2,$x1,$y1,'(1,1)',$green);
	imagefilledarc($image,$x1,$y1,5,5,0,360,$grey,IMG_ARC_PIE);
	
	//draw tangent line of point 2,4 from Y = 4x-4
	$x1 = 0.1; $y1 = (4 * $x1) -4;
	$x2 = 2.5; $y2 = (4 * $x2) - 4;
	
	//scale up 30 times
	$x1 = $x1*30;$y1 = $y1*30;
	$x2 = $x2*30;$y2 = $y2*30;
	
	//coordinate to the center
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	
	//draw tangent line
	imageline($image,$x1,$y1,$x2,$y2,$grey);

	//draw coordination lines
	$x1 = 2*30; $y1 = 2*2*30;
	$x2 = 2*30; $y2 = 0;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	$x1 = 2*30; $y1 = 2*2*30;
	$x2 = 0; $y2 = 2*2*30;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	imagestring($image,2,$x1,$y1,'(2,4)',$green);
	imagefilledarc($image,$x1,$y1,5,5,0,360,$grey,IMG_ARC_PIE);	

	//string
	imagestring($image,10,50,50,'Y = X*X',$white);
	imagestring($image,10,210,5,'5.5',$white);
	imagestring($image,10,370,205,'5.5',$white);
	imagestring($image,10,207,205,'0',$white);
	imagestring($image,2,5,5,'Scale up 30 times',$black);

//call image
	imagepng($image,"image/derivativeslope.png");
	imagedestroy($image);
	
	echo '<center><img src="image/derivativeslope.png"></center>';
	
?> 

					</td>
					<td valign="top">
	
					
					</td>
				</tr>
			</table>
			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid: #98bf21;">
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
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
	
<spamg>//create background</spamg>
	
	$width = 500;
	$height = 500;
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
	for ($i=5;$i&lt;500;$i+=5){
		imageline($image,$i,0,$i,500,$blackAlpha1);
	}
	for ($i=0;$i&lt;500;$i+=5){
		imageline($image,0,$i,500,$i,$blackAlpha1);
	}
	
<spamg>//draw y=x*x</spamg>
<spamg>//makes parabola from imageline y = x * x</spamg>
<spamg>//below 200s is to coordinate (x,y) at the center</spamg>
<spamg>//scale up 30 times</spamg>
	
	<spamg>//left-side parabola</spamg>
	for($tempminus=-0.1;$tempminus>=-2.7;$tempminus-=0.1){
		${'n'.($tempminus*-10)} = $tempminus*$tempminus*30;
		${'m'.($tempminus*-10)} = $tempminus*30;	
		}
		
	for($tempminus=-0.1;$tempminus>=-2.5;$tempminus-=0.1){
		imageline($image,${'m'.($tempminus*-10)}+200,200-${'n'.($tempminus*-10)},
		${'m'.(($tempminus*-10)+1)}+200,200-${'n'.(($tempminus*-10)+1)},$green);
	}
	
	<spamg>//right-side parabola</spamg>
	for($temp=0.1;$temp&lt;=2.6;$temp+=0.1){
		${'y'.$temp*10} = $temp*$temp*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp&lt;=2.5;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},${'x'.
		(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
	}
	
	<spamg>//draw tangent line of point 1,1 from Y = 2x-1</spamg>
	$x1 = -2; $y1 = (2 * $x1) -1;
	$x2 = 2.5; $y2 = (2 * $x2) - 1;
	
	<spamg>//scale up 30 times</spamg>
	$x1 = $x1*30;$y1 = $y1*30;
	$x2 = $x2*30;$y2 = $y2*30;
	
	<spamg>//coordinate to the center</spamg>
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	
	<spamg>//draw tangent line</spamg>
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	
	<spamg>//draw coordination lines</spamg>
	$x1 = 1*30; $y1 = 1*30;
	$x2 = 1*30; $y2 = 0;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	$x1 = 1*30; $y1 = 1*30;
	$x2 = 0; $y2 = 1*30;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	imagestring($image,2,$x1,$y1,'(1,1)',$green);
	imagefilledarc($image,$x1,$y1,5,5,0,360,$grey,IMG_ARC_PIE);
	
	<spamg>//draw tangent line of point 2,4 from Y = 4x-4</spamg>
	$x1 = 0.1; $y1 = (4 * $x1) -4;
	$x2 = 2.5; $y2 = (4 * $x2) - 4;
	
	<spamg>//scale up 30 times</spamg>
	$x1 = $x1*30;$y1 = $y1*30;
	$x2 = $x2*30;$y2 = $y2*30;
	
	<spamg>//coordinate to the center</spamg>
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	
	<spamg>//draw tangent line</spamg>
	imageline($image,$x1,$y1,$x2,$y2,$grey);

	<spamg>//draw coordination lines</spamg>
	$x1 = 2*30; $y1 = 2*2*30;
	$x2 = 2*30; $y2 = 0;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	$x1 = 2*30; $y1 = 2*2*30;
	$x2 = 0; $y2 = 2*2*30;
	$x1 = $x1+200;$y1 = 200-$y1;
	$x2 = $x2+200;$y2 = 200-$y2;
	imageline($image,$x1,$y1,$x2,$y2,$grey);
	imagestring($image,2,$x1,$y1,'(2,4)',$green);
	imagefilledarc($image,$x1,$y1,5,5,0,360,$grey,IMG_ARC_PIE);	
	
	<spamg>//string</spamg>
	imagestring($image,10,50,50,'Y = X*X',$white);
	imagestring($image,10,210,5,'3',$white);
	imagestring($image,10,390,205,'3',$white);
	imagestring($image,10,207,205,'0',$white);
	imagestring($image,2,5,5,'Scale up 30 times',$black);

<spamg>//call image</spamg>
	imagepng($image,"image/righttriangle.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/righttriangle.png">&lt;/center>';
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled>It is disabled, Sorry for the inconvience!
							</form>
					</td>
				</tr>
			</table>

			
</html>