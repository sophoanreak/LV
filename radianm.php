<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Radian Measure of an Angle >> Radian Measurement :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Radian Measurement on PHP.Given a radius length r and an angle t in radians and a circle's center (h,k).<br>
					x = r*cos(t) + h;<br>
					y = r*sin(t) + k;<br>
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

//200s are to set it in the center
//it is a clockwise 
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
	
//makes circle
	
	imagefilledarc($image, 200, 200, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	imagearc($image, 200, 200, 200, 200,  0, 360, $grey);
	imageline($image,200,200,300,200,$grey);
	imagearc($image, 200, 200, 30, 30, 0, 57.296, $white);
	imagestring($image,10,220,180,'r = 100',$green);
	
	//0 is at the center
	$x1=0;$y1=0;
	$x2=0;$y2=0;
	
	$x1=$x1+200;
	$y1=200-$y1;
	$x2=$x2+200;
	$y2=200-$y2;
	
	//radius
	$r = 100;
	
	//1 radian 0-35 degree angle
	$i=1;
	imageline($image,$x1,$y1,($x2 + ($r*cos($i))),($y2+($r * sin($i))),$grey);
	
	//blue points on circumference 
	for($i=0;$i<=2*pi();$i+=1){
		//2*pi as radian
		imagefilledarc($image,($x1 + ($r*cos($i))),($y1+($r * sin($i))),5,5,0,360,$blue,IMG_ARC_PIE);
	}
	//set string
	imagestring($image,5,($x1 + ($r*cos(0)))+3,($y1+($r * sin(0))),'0 rad',$green);
	imagestring($image,5,($x1 + ($r*cos(1))),($y1+($r * sin(1))),'1 rad',$green);
	imagefilledarc($image,($x1 + ($r*cos(pi()))),($y1+($r * sin(pi()))),5,5,0,360,$green,IMG_ARC_PIE);
	imagestring($image,5,($x1 + ($r*cos(pi())))+2,($y1+($r * sin(pi()))),'Pi rad',$green);
	imagestring($image,2,220,205,'57.296 Deg',$green);
	imagestring($image,5,60,30,'Circumference is 2 Pi Radian',$green);
	
//call image
	imagepng($image,"image/radianm.png");
	imagedestroy($image);
	
	echo '<center><img src="image/radianm.png"></center>';

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
<spamb>&lt;html></spamb>
<spamb>&lt;?php</spamb>
							<br>
<pre style= "font-family: 'Time New Roman';">
	
<spamg>//200s are to set it in the center</spamg>
<spamg>//it is a clockwise </spamg>
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
	
<spamg>//makes circle</spamg>
	imagefilledarc($image, 200, 200, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	imagearc($image, 200, 200, 200, 200,  0, 360, $grey);
	imageline($image,200,200,300,200,$grey);
	imagearc($image, 200, 200, 30, 30, 0, 57.296, $white);
	imagestring($image,10,220,180,'r = 100',$green);
	
	<spamg>//0 is at the center</spamg>
	$x1=0;$y1=0;
	$x2=0;$y2=0;
	
	$x1=$x1+200;
	$y1=200-$y1;
	$x2=$x2+200;
	$y2=200-$y2;
	
	<spamg>//radius</spamg>
	$r = 100;
	
	<spamg>//1 radian 0-35 degree angle</spamg>
	$i=1;
	imageline($image,$x1,$y1,($x2 + ($r*cos($i))),($y2+($r * sin($i))),$grey);
	
	<spamg>//blue points on circumference </spamg>
	for($i=0;$i&lt;=2*pi();$i+=1){
		<spamg>//2*pi as radian</spamg>
		imagefilledarc($image,($x1 + ($r*cos($i))),($y1+($r * sin($i))),5,5,0,360,
		$blue,IMG_ARC_PIE);
	}
	<spamg>//set string</spamg>
	imagestring($image,5,($x1 + ($r*cos(0)))+3,($y1+($r * sin(0))),'0 radian',$green);
	imagestring($image,5,($x1 + ($r*cos(1))),($y1+($r * sin(1))),'1 radian',$green);
	imagefilledarc($image,($x1 + ($r*cos(pi()))),($y1+($r * sin(pi()))),5,5,0,360,
	$green,IMG_ARC_PIE);
	imagestring($image,5,($x1 + ($r*cos(pi())))+2,($y1+($r * sin(pi()))),'II radian',$green);
	imagestring($image,2,220,205,'57.296 Degree',$green);
	
<spamg>//call image</spamg>
	imagepng($image,"image/radianm.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/radianm.png">&lt;/center>';

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