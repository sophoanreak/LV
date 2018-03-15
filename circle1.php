<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Circle >> Circle :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Circle with PHP.
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
					<td>
					<b><font style="font-size:1em"></font></b>
<?php

//create background
	$width = 300;
	$height = 300;
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
	
//makes circle
	imagefilledarc($image, 150, 150, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	imagearc($image, 150, 150, 150, 150,  0, 360, $grey);
	imageline($image,150,150,225,150,$grey);
	imagestring($image,2,170,150,'r = 75',$green);
	imagestring($image,2,100,20,'Circle with Imagearc',$green);
	
//call image
	imagepng($image,"image/circle1.png");
	imagedestroy($image);
	
	echo '<center><img src="image/circle1.png"></center>';
?>
					</td>
					<td>
<?php

//create background
	$width = 300;
	$height = 300;
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
	
//makes circle
	
	//equation for point on circle(x-h)(x-h)+(y-k)(y-k) = r*r
	//r = 75;h = 0;k=0 => y*y = 75*75 - x*x
	//quadrant 4  
	for ($i=1;$i<=75;$i++){
		${'x'.$i}= $i;
		${'y'.$i}= sqrt((75*75) - ($i*$i));
	}	
	for ($i=1;$i<75;$i++){
		imageline($image,${'x'.$i}+150,150-${'y'.$i},${'x'.($i+1)}+150,150-${'y'.($i+1)},$grey);
	}
	
	//quadrant 3
	for ($i=-1;$i>=-75;$i-=1){
		${'x'.($i*-1)}= $i;
		${'y'.($i*-1)}= sqrt((75*75) - ($i*$i));
	}	
	for ($i=-1;$i>-75;$i-=1){
		imageline($image,${'x'.($i*-1)}+150,150-${'y'.($i*-1)},${'x'.(($i*-1)+1)}+150,150-${'y'.(($i*-1)+1)},$grey);
	}
	
	//quadrant 2
	for ($i=-1;$i>=-75;$i-=1){
		${'x'.($i*-1)}= $i;
		${'y'.($i*-1)}= -sqrt((75*75) - ($i*$i));
	}	
	for ($i=-1;$i>-75;$i-=1){
		imageline($image,${'x'.($i*-1)}+150,150-${'y'.($i*-1)},${'x'.(($i*-1)+1)}+150,150-${'y'.(($i*-1)+1)},$grey);
	}
	
	//quadrant 1  
	for ($i=0;$i<=75;$i++){
		${'x'.$i}= $i;
		${'y'.$i}= -sqrt((75*75) - ($i*$i));
	}	
	for ($i=0;$i<75;$i++){
		imageline($image,${'x'.$i}+150,150-${'y'.$i},${'x'.($i+1)}+150,150-${'y'.($i+1)},$grey);
	}
	imagefilledarc($image, 150, 150, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	
	//imagestring
	imagefilledarc($image, 150, 150, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	imageline($image,150,150,225,150,$grey);
	imagestring($image,2,170,150,'r = 75',$green);
	imagestring($image,2,50,20,'Circle with Pythagorean Formula',$green);
	
	//triangle
	imageline($image,150+50,150,150+50,150-55.901,$grey);
	imageline($image,150,150,150+50,150-55.901,$grey);
	imagefilledarc($image,150+50,150-55.901,5,5,0,360,$blue,IMG_ARC_PIE);
	imagestring($image,2,150+55,150-55.901,'(50,55.9)',$green);
	imagestring($image,2,130,250,'sqrt(x) +sqrt(y) = sqrt(r)',$yellow);
	
//call image
	imagepng($image,"image/circle2.png");
	imagedestroy($image);
	
	echo '<center><img src="image/circle2.png"></center>';
?>
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
<spamr>//imagearc</spamr>
<spamg>//create background</spamg>
	$width = 300;
	$height = 300;
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
	
<spamg>//makes circle</spamg>
	imagefilledarc($image, 150, 150, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	imagearc($image, 150, 150, 150, 150,  0, 360, $grey);
	imageline($image,150,150,225,150,$grey);
	imagestring($image,2,170,150,'r = 75',$green);
	imagestring($image,2,100,20,'Circle with Imagearc',$green);
	
<spamg>//call image</spamg>
	imagepng($image,"image/circle1.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/circle1.png">&lt;/center>';

<spamr>//pythagoream</spamr>
<spamg>//create background</spamg>
	$width = 300;
	$height = 300;
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
	
<spamg>//makes circle</spamg>
	
	<spamg>//equation for point on circle(x-h)(x-h)+(y-k)(y-k) = r*r</spamg>
	<spamg>//r = 75;h = 0;k=0 => y*y = 75*75 - x*x</spamg>
	<spamg>//quadrant 4  </spamg>
	for ($i=1;$i&lt;=75;$i++){
		${'x'.$i}= $i;
		${'y'.$i}= sqrt((75*75) - ($i*$i));
	}	
	for ($i=1;$i&lt;75;$i++){
		imageline($image,${'x'.$i}+150,150-${'y'.$i},${'x'.($i+1)}+150,150-${'y'.($i+1)},$grey);
	}
	
	<spamg>//quadrant 3</spamg>
	for ($i=-1;$i>=-75;$i-=1){
		${'x'.($i*-1)}= $i;
		${'y'.($i*-1)}= sqrt((75*75) - ($i*$i));
	}	
	for ($i=-1;$i>-75;$i-=1){
		imageline($image,${'x'.($i*-1)}+150,150-${'y'.($i*-1)},${'x'.
		(($i*-1)+1)}+150,150-${'y'.(($i*-1)+1)},$grey);
	}
	
	<spamg>//quadrant 2</spamg>
	for ($i=-1;$i>=-75;$i-=1){
		${'x'.($i*-1)}= $i;
		${'y'.($i*-1)}= -sqrt((75*75) - ($i*$i));
	}	
	for ($i=-1;$i>-75;$i-=1){
		imageline($image,${'x'.($i*-1)}+150,150-${'y'.($i*-1)},${'x'.
		(($i*-1)+1)}+150,150-${'y'.(($i*-1)+1)},$grey);
	}
	
	<spamg>//quadrant 1  </spamg>
	for ($i=0;$i&lt;=75;$i++){
		${'x'.$i}= $i;
		${'y'.$i}= -sqrt((75*75) - ($i*$i));
	}	
	for ($i=0;$i&lt;75;$i++){
		imageline($image,${'x'.$i}+150,150-${'y'.$i},${'x'.($i+1)}+150,150-${'y'.($i+1)},$grey);
	}
	imagefilledarc($image, 150, 150, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	
	<spamg>//imagestring</spamg>
	imagefilledarc($image, 150, 150, 5, 5,  0, 360, $white,IMG_ARC_PIE);
	imageline($image,150,150,225,150,$grey);
	imagestring($image,2,170,150,'r = 75',$green);
	imagestring($image,2,50,20,'Circle with Pythagorean Formula',$green);
	
	<spamg>//triangle</spamg>
	imageline($image,150+50,150,150+50,150-55.901,$grey);
	imageline($image,150,150,150+50,150-55.901,$grey);
	imagefilledarc($image,150+50,150-55.901,5,5,0,360,$blue,IMG_ARC_PIE);
	imagestring($image,2,150+55,150-55.901,'(50,55.9)',$green);
	imagestring($image,2,130,250,'sqrt(x) +sqrt(y) = sqrt(r)',$yellow);
	
<spamg>//call image</spamg>
	imagepng($image,"image/circle2.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/circle2.png">&lt;/center>';
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
