<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Polynomials >> X<sup>3</sup> :</font></b><br>
					<p>
					Objective: Graph X<sup>3</sup> with PHP <br>
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
					<b><font style="font-size:1em">Examples :</font></b><br>
					
<?php
//create background
	$width = 400;
	$height = 400;
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
	for ($i=5;$i<400;$i+=5){
		imageline($image,$i,0,$i,400,$blackAlpha1);
	}
	for ($i=0;$i<400;$i+=5){
		imageline($image,0,$i,400,$i,$blackAlpha1);
	}

//add middle lines vertically and horizontally
	imageline($image,0,$height/2,$width,$height/2,$gray);
	imageline($image,$width/2,0,$width/2,$height,$gray);
	
//loop for the grid
	for($i=10;$i<400;$i+=5){ 
		imageline($image,198,$i,202,$i,$gray);
	}
	for($i=5;$i<395;$i+=5){ 
		imageline($image,$i,198,$i,202,$gray);
	}
	
//making an arrow head for X and Y cordinate
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
	
//x3
	//Negative
	for($temp=-0.01;$temp>=-1.91;$temp-=0.01){
		${'x'.$temp*-100} = $temp*30;
		${'y'.$temp*-100} = $temp*$temp*$temp*30;
	}
	for($temp=-0.01;$temp>=-1.9;$temp-=0.01){
		imageline($image,${'x'.$temp*-100}+250,210-${'y'.$temp*-100},${'x'.
		(($temp*-100)+1)}+250,210-${'y'.(($temp*-100)+1)},$green);
	}

	//Positive
	for($temp=0.01;$temp<=1.91;$temp+=0.01){
		${'x'.$temp*100} = $temp*30;
		${'y'.$temp*100} = $temp*$temp*$temp*30;
	}
	for($temp=0.01;$temp<=1.9;$temp+=0.01){
		imageline($image,${'x'.$temp*100}+250,210-${'y'.$temp*100},${'x'.
		($temp*100+1)}+250,210-${'y'.($temp*100+1)},$green);
	}
	
	//string
	imagestring($image,2,300,150,'y = x*x*x',$green);
	imagestring($image,2,205,5,'7',$green);
	imagestring($image,2,385,205,'2',$green);
	
//call image
	imagepng($image,"image/exponent.png");
	imagedestroy($image);
	
	echo '<center><img src="image/exponent.png"></center>';
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
	for ($i=5;$i&lt;400;$i+=5){
		imageline($image,$i,0,$i,400,$blackAlpha1);
	}
	for ($i=0;$i&lt;400;$i+=5){
		imageline($image,0,$i,400,$i,$blackAlpha1);
	}

<spamg>//add middle lines vertically and horizontally</spamg>
	imageline($image,0,$height/2,$width,$height/2,$gray);
	imageline($image,$width/2,0,$width/2,$height,$gray);
	
<spamg>//loop for the grid</spamg>
	for($i=10;$i&lt;400;$i+=5){ 
		imageline($image,198,$i,202,$i,$gray);
	}
	for($i=5;$i&lt;395;$i+=5){ 
		imageline($image,$i,198,$i,202,$gray);
	}
	
<spamg>//making an arrow head for X and Y coordinates</spamg>
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
	
<spamg>//x3</spamg>
	<spamg>//Negative </spamg>
	for($temp=-0.01;$temp>=-1.91;$temp-=0.01){
		${'x'.$temp*-100} = $temp*30;
		${'y'.$temp*-100} = $temp*$temp*$temp*30;
	}
	for($temp=-0.01;$temp>=-1.9;$temp-=0.01){
		imageline($image,${'x'.$temp*-100}+250,210-${'y'.$temp*-100},${'x'.
		(($temp*-100)+1)}+250,210-${'y'.(($temp*-100)+1)},$green);
	}

	<spamg>//positive </spamg>
	for($temp=0.01;$temp&lt;=1.91;$temp+=0.01){
		${'x'.$temp*100} = $temp*30;
		${'y'.$temp*100} = $temp*$temp*$temp*30;
	}
	for($temp=0.01;$temp&lt;=1.9;$temp+=0.01){
		imageline($image,${'x'.$temp*100}+250,210-${'y'.$temp*100},${'x'.
		($temp*100+1)}+250,210-${'y'.($temp*100+1)},$green);
	}
	
	<spamg>//string</spamg>
	imagestring($image,2,300,150,'y = x*x*x',$green);
	imagestring($image,2,205,5,'7',$green);
	imagestring($image,2,385,205,'2',$green);
	
<spamg>//call image</spamg>
	imagepng($image,"image/exponent.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/exponent.png">&lt;/center>';
	
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
					<td width = 50% valign = "top">
						
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled>
							</form>It is disabled. Sorry for the inconvience!
					</td>
				</tr>
			</table>

			
</html>

