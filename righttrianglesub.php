<html>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Radian Measure of an Angle >> Radian Measurement :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Radian Measurement on PHP.
					
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
	
	$width = 500;
	$height = 500;
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
	for ($i=5;$i<500;$i+=5){
		imageline($image,$i,0,$i,500,$blackAlpha1);
	}
	for ($i=0;$i<500;$i+=5){
		imageline($image,0,$i,500,$i,$blackAlpha1);
	}
	
//makes Right Triangle
	//makes right triangle
	
	$x1=200;$y1=100;
	$point = array(
		$x1,$y1+29,
		$x1,$y1+200,
		$x1+100,$y1+200,
	);
	imagepolygon($image,$point,3,$green);
	
	//makes an angle
	imagestring($image,10,$x1,$y1+14,'A',$white);
		imagestring($image,10,$x1,$y1+55,'30',$white);
		imagearc($image, $x1, $y1+29, 40, 40,  60, 90, $white);
		
	imagestring($image,10,$x1,$y1+200,'B',$white);
		imagearc($image, $x1, $y1+200, 40, 40,  270, 360, $white);
		imagestring($image,10,$x1+20,$y1+170,'90',$white);
		
	imagestring($image,10,$x1+100,$y1+200,'C',$white);
		imagestring($image,10,$x1+60,$y1+170,'60',$white);
		imagearc($image, $x1+100, $y1+200, 40, 40,  180, 240, $white);
		
	//making squares
	$point2 = array(
		$x1,$y1+29,
		$x1,$y1+200,
		$x1-171,$y1+200,
		$x1-171,$y1+29
	);
	imagepolygon($image,$point2,4,$green);
	$point3 = array(
		$x1,$y1+200,
		$x1+100,$y1+200,
		$x1+100,$y1+300,
		$x1,$y1+300
	);
	imagepolygon($image,$point3,4,$green);
	$point4 = array(
		$x1,$y1+29,
		$x1+100,$y1+200,
		$x1+100+171,$y1+200-100,
		$x1+171,$y1+29-100
	);
	imagepolygon($image,$point4,4,$green);
	
	//circle
		//100 pixels for the midpoint
	imagefilledarc($image,$x1+50,$y1+114.5,5,5,0,360,$grey,IMG_ARC_PIE);
	imagearc($image,$x1+50,$y1+114.5,200,200,0,360,$grey);
	imageline($image,$x1+50,$y1+114.5,$x1,$y1+200,$grey);

//call image
	imagepng($image,"image/righttriangle.png");
	imagedestroy($image);
	
	echo '<center><img src="image/righttriangle.png"></center>';
	
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
<spamg>//makes Right Triangle</spamg>
	<spamg>//makes right triangle</spamg>
	
	$x1=200;$y1=100;
	$point = array(
		$x1,$y1+29,
		$x1,$y1+200,
		$x1+100,$y1+200,
	);
	imagepolygon($image,$point,3,$green);
	
	<spamg>//makes an angle</spamg>
	imagestring($image,10,$x1,$y1+14,'A',$white);
		imagestring($image,10,$x1,$y1+55,'30',$white);
		imagearc($image, $x1, $y1+29, 40, 40,  60, 90, $white);
		
	imagestring($image,10,$x1,$y1+200,'B',$white);
		imagearc($image, $x1, $y1+200, 40, 40,  270, 360, $white);
		imagestring($image,10,$x1+20,$y1+170,'90',$white);
		
	imagestring($image,10,$x1+100,$y1+200,'C',$white);
		imagestring($image,10,$x1+60,$y1+170,'60',$white);
		imagearc($image, $x1+100, $y1+200, 40, 40,  180, 240, $white);
		
	<spamg>//making squares</spamg>
	$point2 = array(
		$x1,$y1+29,
		$x1,$y1+200,
		$x1-171,$y1+200,
		$x1-171,$y1+29
	);
	imagepolygon($image,$point2,4,$green);
	$point3 = array(
		$x1,$y1+200,
		$x1+100,$y1+200,
		$x1+100,$y1+300,
		$x1,$y1+300
	);
	imagepolygon($image,$point3,4,$green);
	$point4 = array(
		$x1,$y1+29,
		$x1+100,$y1+200,
		$x1+100+171,$y1+200-100,
		$x1+171,$y1+29-100
	);
	imagepolygon($image,$point4,4,$green);
	
	<spamg>//circle</spamg>
		//100 pixels for the midpoint
	imagefilledarc($image,$x1+50,$y1+114.5,5,5,0,360,$grey,IMG_ARC_PIE);
	imagearc($image,$x1+50,$y1+114.5,200,200,0,360,$grey);
	imageline($image,$x1+50,$y1+114.5,$x1,$y1+200,$grey);

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