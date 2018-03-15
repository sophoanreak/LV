<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Parabola >> Y = &radic;X :</font></b><br>
					<p>
					<b>Objective: Drawing Y = &radic;X on PHP. X is positive.</b>
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
//x is between (-200,+200)
//y is between (-200,+200)
//scale up 30 times for each pixel

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
//making an arrow head for X and Y cordinate
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
	
//makes parabola from imageline y = x * x
//below 200s is to coordinate (x,y) at the center
	//Scaling
	$scale = 30;

	//Positive-side parabola
	for($temp=0;$temp<=10;$temp+=0.1){
		${'x'.($temp*10)} = $temp*$scale;
		${'y'.($temp*10)} = (sqrt($temp))*$scale;
		}

	for($temp=0;$temp<=7;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},${'x'.(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
		if ($temp >= 7){
			break;
		}
	}

	imagestring($image,10,50,50,'Y = 1/X',$white);
	imagestring($image,3,370,210,'+7',$white);
	imagestring($image,3,5,210,'-7',$white);
	imagestring($image,3,210,0,'7',$white);
	imagestring($image,3,210,380,'-7',$white);
	
//call image
	imagepng($image,"image/ysqaurerootx.png");
	imagedestroy($image);
	
	echo '<center><img src="image/ysqaurerootx.png"></center>';

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
<spamb>&lt;html></spamb><br>
<spamb>&lt;?php	</spamb>				<br>
<pre style= "font-family: 'Time New Roman';">

<spamg>//x is between (-200,+200)</spamg>
<spamg>//y is between (-200,+200)</spamg>
<spamg>//scale up 30 times for each pixel</spamg>

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
	
<spamg>//add middle lines vertically and horizontally</spamg>
	<spamg>//imagearc($image, 100, 100, 200, 200,  45, 360, $white);</spamg>
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);
	
<spamg>//loop for the white grid</spamg>
	for($i=10;$i&lt;400;$i+=5){ 
		imageline($image,198,$i,202,$i,$grey);
	}
	for($i=5;$i&lt;395;$i+=5){ 
		imageline($image,$i,198,$i,202,$grey);
	}
<spamg>//making an arrow head for X and Y cordinate</spamg>
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
	
<spamg>//makes parabola from imageline y = x * x</spamg>
<spamg>//below 200s is to coordinate (x,y) at the center</spamg>
	<spamg>//Scaling</spamg>
	$scale = 30;

	<spamg>//Positive-side parabola</spamg>
	for($temp=0;$temp&lt;=10;$temp+=0.1){
		${'x'.($temp*10)} = $temp*$scale;
		${'y'.($temp*10)} = (sqrt($temp))*$scale;
		}

	for($temp=0;$temp&lt;=7;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},${'x'.
		(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
		if ($temp >= 7){
			break;
		}
	}

	imagestring($image,10,50,50,'Y = 1/X',$white);
	imagestring($image,3,370,210,'+7',$white);
	imagestring($image,3,5,210,'-7',$white);
	imagestring($image,3,210,0,'7',$white);
	imagestring($image,3,210,380,'-7',$white);
	
<spamg>//call image</spamg>
	imagepng($image,"image/ysqaurerootx.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/ysqaurerootx.png">&lt;/center>';
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