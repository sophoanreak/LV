<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Statistics >> Uncertainty and Population >> Shape of Dataset :</font></b><br>
					<p>
					<b>Objective: </b>Bell Curves (Symmetry) on PHP. <br>
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
	$height = 250;
	$image = imagecreate($width,$height);
	
//Colors
	$gray = imagecolorallocate($image,200,200,200);
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

//Bell Curve
	//vertical and horizontal line
	imageline($image,40,210,460,210,$gray);
	
	//loop for white grids
		//horizontal
	for($i=0;$i<=425;$i+=10){
		imageline($image,40+$i,208,40+$i,212,$gray);
	}

	//string
	imagefilledarc($image,250,210,5,5,0,360,$blue,IMG_ARC_PIE);
	imagestring($image,3,225,5,"Bell Curve",$yellow);	
	imagestring($image,2,215,227,'Data',$yellow);
	imagestring($image,2,248,213,'0',$green);
	
	//Bell Curve
		//left curve
	for($temp=-0.01;$temp>=-1.91;$temp-=0.01){
		${'x'.$temp*-100} = $temp*120;
		${'y'.$temp*-100} = (1/(pow(M_E,$temp*$temp)))*120;
	}
	for($temp=-0.01;$temp>=-1.9;$temp-=0.01){
		imageline($image,${'x'.$temp*-100}+250,210-${'y'.$temp*-100},${'x'.(($temp*-100)+1)}+250,210-${'y'.(($temp*-100)+1)},$gray);
	}

		//right curve
	for($temp=0.01;$temp<=1.91;$temp+=0.01){
		${'x'.$temp*100} = $temp*120;
		${'y'.$temp*100} = (1/(pow(M_E,$temp*$temp)))*120;
	}
	for($temp=0.01;$temp<=1.9;$temp+=0.01){
		imageline($image,${'x'.$temp*100}+250,210-${'y'.$temp*100},${'x'.($temp*100+1)}+250,210-${'y'.($temp*100+1)},$gray);
	}

//call image
	imagepng($image,"image/shapedata1.png");
	imagedestroy($image);
	
	echo '<center><img src="image/shapedata1.png"></center>';
	
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
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
<spamg>//create background</spamg>
	$width = 500;
	$height = 250;
	$image = imagecreate($width,$height);
	
<spamg>//Colors</spamg>
	$gray = imagecolorallocate($image,200,200,200);
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

<spamg>//Bell Curve</spamg>
	<spamg>//vertical and horizontal line</spamg>
	imageline($image,40,210,460,210,$gray);
	
	<spamg>//loop for white grids</spamg>
		//horizontal
	for($i=0;$i&lt;=425;$i+=10){
		imageline($image,40+$i,208,40+$i,212,$gray);
	}

	<spamg>//string</spamg>
	imagefilledarc($image,250,210,5,5,0,360,$blue,IMG_ARC_PIE);
	imagestring($image,3,225,5,"Bell Curve",$yellow);	
	imagestring($image,2,215,227,'Data',$yellow);
	imagestring($image,2,248,213,'0',$green);
	
	<spamg>//Bell Curve</spamg>
		<spamg>//left curve</spamg>
	for($temp=-0.01;$temp>=-1.91;$temp-=0.01){
		${'x'.$temp*-100} = $temp*120;
		${'y'.$temp*-100} = (1/(pow(M_E,$temp*$temp)))*120;
	}
	for($temp=-0.01;$temp>=-1.9;$temp-=0.01){
		imageline($image,${'x'.$temp*-100}+250,210-${'y'.$temp*-100},${'x'.
		(($temp*-100)+1)}+250,210-${'y'.(($temp*-100)+1)},$gray);
	}

		<spamg>//right curve</spamg>
	for($temp=0.01;$temp&lt;=1.91;$temp+=0.01){
		${'x'.$temp*100} = $temp*120;
		${'y'.$temp*100} = (1/(pow(M_E,$temp*$temp)))*120;
	}
	for($temp=0.01;$temp&lt;=1.9;$temp+=0.01){
		imageline($image,${'x'.$temp*100}+250,210-${'y'.$temp*100},${'x'.
		($temp*100+1)}+250,210-${'y'.($temp*100+1)},$gray);
	}

<spamg>//call image</spamg>
	imagepng($image,"image/shapedata1.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/shapedata1.png">&lt;/center>';
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled> Sorry! for the inconvenience.
							</form>
					</td>
				</tr>
			</table>

			
</html>