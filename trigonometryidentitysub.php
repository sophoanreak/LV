<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Trigonometry Identities >> Cos/Sin/Tan/Cot :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Cos/Sin/Tan/Cot on PHP.
					
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
	
//draw a circle
	
	$x1=0;$y1=0;
	$x1=150+$x1;
	$y1=200-$y1;
	imagearc($image,$x1,$y1,200,200,0,360,$grey);
	imagefilledarc($image,$x1,$y1,5,5,0,360,$grey,IMG_ARC_PIE);
	
	//radius
	$r=100;
	imageline($image,$x1+100,$y1,($x1 + ($r*cos(-1))),($y1+($r * sin(-1))),$grey);
	for($i=0;$i>=-pi()/3;$i+=-1){
		imageline($image,$x1,$y1,($x1 + ($r*cos($i))),($y1+($r * sin($i))),$grey);
		imagefilledarc($image,($x1 + ($r*cos($i))),($y1+($r * sin($i))),5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imageline($image,$x1,$y1,$x1,$y1-100,$grey);
	
	//down triangle
	imageline($image,$x1,$y1,($x1 + ($r*cos(1))),($y1+($r * sin(1))),$grey);
	imagefilledarc($image,($x1 + ($r*cos(1))),($y1+($r * sin(1))),5,5,0,360,$blue,IMG_ARC_PIE);
	
	//line that perpendicular to the radius
	imageline($image,($x1 + ($r*cos(-1))),($y1+($r * sin(-1))),($x1 + ($r*cos(1))),($y1+($r * sin(1))),$grey);	
	
	//cot line
	imageline($image,($x1 + ($r*cos(-1))),($y1+($r * sin(-1))),($y1+($r * sin(-1)))+210,($x1+($r*cos(-1)))-5,$green);
	imageline($image,$x1+100,$y1,$x1+177,$y1,$grey);
	
	//string
	imagestring($image,5,($x1+($r * cos(-1))),($y1+($r * sin(-1)))-18,'A',$green);
	imagestring($image,5,($x1+($r * cos(1))),($y1+($r * sin(1))),'B',$green);
	imagestring($image,2,$x1+13,$y1,'Cos',$green);
	imagestring($image,5,$x1-13,$y1,'O',$green);
	imagestring($image,5,$x1+110,$y1+5,'D',$green);
	imagestring($image,5,$x1+57,$y1+5,'C',$green);
	imagefilledarc($image,$x1+54,$y1,5,5,0,360,$blue,IMG_ARC_PIE);
	imagestring($image,2,$x1+60,$y1-40,'Sin',$green);

//call image
	imagepng($image,"image/trigonometryidentitysub.png");
	imagedestroy($image);
	
	echo '<center><img src="image/trigonometryidentitysub.png"></center>';
	
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
<spamg>//draw a circle</spamg>
	
	$x1=0;$y1=0;
	$x1=150+$x1;
	$y1=200-$y1;
	imagearc($image,$x1,$y1,200,200,0,360,$grey);
	imagefilledarc($image,$x1,$y1,5,5,0,360,$grey,IMG_ARC_PIE);
	
	<spamg>//radius</spamg>
	$r=100;
	imageline($image,$x1+100,$y1,($x1 + ($r*cos(-1))),($y1+($r * sin(-1))),$grey);
	for($i=0;$i>=-pi()/3;$i+=-1){
		imageline($image,$x1,$y1,($x1 + ($r*cos($i))),($y1+($r * sin($i))),$grey);
		imagefilledarc($image,($x1 + ($r*cos($i))),($y1+($r * sin($i))),5,5,0,360,
		$blue,IMG_ARC_PIE);
	}
	imageline($image,$x1,$y1,$x1,$y1-100,$grey);
	
	<spamg>//down triangle</spamg>
	imageline($image,$x1,$y1,($x1 + ($r*cos(1))),($y1+($r * sin(1))),$grey);
	imagefilledarc($image,($x1 + ($r*cos(1))),($y1+($r * sin(1))),5,5,0,360,$blue,
	IMG_ARC_PIE);
	
	<spamg>//line that perpendicular to the radius</spamg>
	imageline($image,($x1 + ($r*cos(-1))),($y1+($r * sin(-1))),($x1 + ($r*cos(1))),
	($y1+($r * sin(1))),$grey);	
	
	<spamg>//cot line</spamg>
	imageline($image,($x1 + ($r*cos(-1))),($y1+($r * sin(-1))),($y1+($r * sin(-1)))+
	210,($x1+($r*cos(-1)))-5,$green);
	imageline($image,$x1+100,$y1,$x1+177,$y1,$grey);
	
	<spamg>//string</spamg>
	imagestring($image,5,($x1+($r * cos(-1))),($y1+($r * sin(-1)))-18,'A',$green);
	imagestring($image,5,($x1+($r * cos(1))),($y1+($r * sin(1))),'B',$green);
	imagestring($image,2,$x1+13,$y1,'Cos',$green);
	imagestring($image,5,$x1-13,$y1,'O',$green);
	imagestring($image,5,$x1+110,$y1+5,'D',$green);
	imagestring($image,5,$x1+57,$y1+5,'C',$green);
	imagefilledarc($image,$x1+54,$y1,5,5,0,360,$blue,IMG_ARC_PIE);
	imagestring($image,2,$x1+60,$y1-40,'Sin',$green);

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