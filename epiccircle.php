<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Special Math >> Circles >> Epic Circles</font></b><br>
					<p>
					<b>Objective: </b>Drawing Epic Circles on PHP.
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
	
	$width = 650;
	$height = 650;
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
	for ($i=5;$i<=650;$i+=5){
		imageline($image,$i,0,$i,650,$blackAlpha1);
	}
	for ($i=0;$i<=650;$i+=5){
		imageline($image,0,$i,650,$i,$blackAlpha1);
	}
	
	//Epic Circles
	
	imagefilledarc($image,325,325,10,10,0,360,$black,IMG_ARC_PIE);
	$r=640;
	imagearc($image,325,325,$r,$r,0,360,$gray);
	
	//r/2
	$x=0;$y=160;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,10,10,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/2,$r/2,0,360,$gray);
	
	//r/2
	$x=0;$y=-160;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,10,10,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/2,$r/2,0,360,$gray);

	//r-left
	$x=-213;$y=0;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/3.01,$r/3.01,0,360,$gray);
	
	//r/15
	$x=-84.2;$y=0;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/15,$r/15.99,0,360,$white,IMG_ARC_PIE);
	
	//r-left for r/23
	$x=-213;$y=-160;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/6,$r/6,0,360,$gray);
	
	//r/23
	$x=-167.6;$y=-111.2;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/23,$r/23,0,360,$white,IMG_ARC_PIE);
	
	//r-left for r/39
	$x=-175;$y=-232;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/11,$r/11,0,360,$gray);
	
	//r/39
	$x=-164;$y=-196;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/39,$r/39,0,360,$white,IMG_ARC_PIE);
	
	//r-left for r/95
	$x=-143;$y=-266;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/17,$r/17,0,360,$gray);
	
	//r/95
	$x=-142.3;$y=-242.8;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,3,3,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/63,$r/63,0,360,$white,IMG_ARC_PIE);
	
//call image
	imagepng($image,"image/epiccircle.png");
	imagedestroy($image);
	
	echo '<center><img src="image/epiccircle.png"></center>';
?>
					</td>
					<!--td>
					
					</td-->
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
	for ($i=5;$i&lt;=650;$i+=5){
		imageline($image,$i,0,$i,650,$blackAlpha1);
	}
	for ($i=0;$i&lt;=650;$i+=5){
		imageline($image,0,$i,650,$i,$blackAlpha1);
	}
	
	<spamg>//Epic Circles</spamg>
	
	imagefilledarc($image,325,325,10,10,0,360,$black,IMG_ARC_PIE);
	$r=640;
	imagearc($image,325,325,$r,$r,0,360,$gray);
	
	<spamg>//r/2</spamg>
	$x=0;$y=160;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,10,10,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/2,$r/2,0,360,$gray);
	
	<spamg>//r/2</spamg>
	$x=0;$y=-160;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,10,10,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/2,$r/2,0,360,$gray);

	<spamg>//r-left</spamg>
	$x=-213;$y=0;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/3.01,$r/3.01,0,360,$gray);
	
	<spamg>//r/15</spamg>
	$x=-84.2;$y=0;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/15,$r/15.99,0,360,$white,IMG_ARC_PIE);
	
	<spamg>//r-left for r/23</spamg>
	$x=-213;$y=-160;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/6,$r/6,0,360,$gray);
	
	<spamg>//r/23</spamg>
	$x=-167.6;$y=-111.2;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/23,$r/23,0,360,$white,IMG_ARC_PIE);
	
	<spamg>//r-left for r/39</spamg>
	$x=-175;$y=-232;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/11,$r/11,0,360,$gray);
	
	<spamg>//r/39</spamg>
	$x=-164;$y=-196;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/39,$r/39,0,360,$white,IMG_ARC_PIE);
	
	<spamg>//r-left for r/95</spamg>
	$x=-143;$y=-266;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$black,IMG_ARC_PIE);
	imagearc($image,$x,$y,$r/17,$r/17,0,360,$gray);
	
	<spamg>//r/95</spamg>
	$x=-142.3;$y=-242.8;
	$x=$x+325;$y=325-$y;
	imagefilledarc($image,$x,$y,3,3,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x,$y,$r/63,$r/63,0,360,$white,IMG_ARC_PIE);
	
<spamg>//call image</spamg>
	imagepng($image,"image/epiccircle1.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/epiccircle1.png">&lt;/center>';

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
