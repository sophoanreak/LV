<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Polygon >> Polygons :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Polygons with PHP.
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
					<center>
<?php

//create background
	$width = 600;
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
	for ($i=5;$i<600;$i+=5){
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i<600;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
//makes Octagon
	$x=20;
	$y=20;
	$point = array(
		$x+50,$y,
		$x,$y+50,
		$x,$y+100,
		$x+50,$y+150,
		$x+100,$y+150,
		$x+150,$y+100,
		$x+150,$y+50,
		$x+100,$y
	);
	imagepolygon($image,$point,8,$green);
	//insert letter
	imagestring($image,10,$x+50,$y-15,'A',$white);
	imagestring($image,10,$x-10,$y+50,'B',$white);
	imagestring($image,10,$x-10,$y+100,'C',$white);
	imagestring($image,10,$x+50,$y+150,'D',$white);
	imagestring($image,10,$x+100,$y+150,'E',$white);
	imagestring($image,10,$x+150+5,$y+100,'F',$white);
	imagestring($image,10,$x+150+5,$y+50,'G',$white);
	imagestring($image,10,$x+100,$y-15,'H',$white);
	
//Pentagon
	$x=0;$y=0;
	$x=300+$x;$y=100-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$grey,IMG_ARC_PIE);
	imagearc($image,$x,$y,180,180,0,360,$grey);
	
	$r=90;
	$x=0;$y=0;
	$x=300+$x;$y=100-$y;
	$point = array(
		($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),
		($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),
		($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),
		($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),
		($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5)))
	);
	imagepolygon($image,$point,5,$green);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5))),5,5,0,360,$grey,IMG_ARC_PIE);

//Triangle
	$x=0;$y=0;
	$x=500+$x;$y=100-$y;
	$point = array(
		$x-50,$y-80,
		$x-50,$y+80,
		$x+60,$y+80
	);
	imagepolygon($image,$point,3,$green);
	imagefilledarc($image,$x-50,$y-80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+60,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);

//rectangle
	$x=0;$y=0;
	$x=100+$x;$y=300-$y;
	$point = array(
		$x-50,$y-80,
		$x-50,$y+80,
		$x+60,$y+80,
		$x+60,$y-80
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+60,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+60,$y-80,5,5,0,360,$grey,IMG_ARC_PIE);

//square
	$x=0;$y=0;
	$x=300+$x;$y=300-$y;
	$point = array(
		$x-50,$y-50,
		$x-50,$y+50,
		$x+50,$y+50,
		$x+50,$y-50
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-50,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+50,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y+50,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y-50,5,5,0,360,$grey,IMG_ARC_PIE);

//Complex Polygon
	$r=90;
	$x=0;$y=0;
	$x=500+$x;$y=300-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$grey,IMG_ARC_PIE);
	imagearc($image,$x,$y,180,180,0,360,$grey);

	imageline($image,($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5))),$green);
	
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5))),5,5,0,360,$grey,IMG_ARC_PIE);
	
//call image
	imagepng($image,"image/polygon1.png");
	imagedestroy($image);
	
	echo '<center><img src="image/polygon1.png"></center>';
?>					
					</center>
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
	for ($i=5;$i&lt;600;$i+=5){
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i&lt;600;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
<spamg>//makes Octagon</spamg>
	$x=20;
	$y=20;
	$point = array(
		$x+50,$y,
		$x,$y+50,
		$x,$y+100,
		$x+50,$y+150,
		$x+100,$y+150,
		$x+150,$y+100,
		$x+150,$y+50,
		$x+100,$y
	);
	imagepolygon($image,$point,8,$green);
	<spamg>//insert letter</spamg>
	imagestring($image,10,$x+50,$y-15,'A',$white);
	imagestring($image,10,$x-10,$y+50,'B',$white);
	imagestring($image,10,$x-10,$y+100,'C',$white);
	imagestring($image,10,$x+50,$y+150,'D',$white);
	imagestring($image,10,$x+100,$y+150,'E',$white);
	imagestring($image,10,$x+150+5,$y+100,'F',$white);
	imagestring($image,10,$x+150+5,$y+50,'G',$white);
	imagestring($image,10,$x+100,$y-15,'H',$white);
	
<spamg>//Pentagon</spamg>
	$x=0;$y=0;
	$x=300+$x;$y=100-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$grey,IMG_ARC_PIE);
	imagearc($image,$x,$y,180,180,0,360,$grey);
	
	$r=90;
	$x=0;$y=0;
	$x=300+$x;$y=100-$y;
	$point = array(
		($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),
		($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),
		($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),
		($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),
		($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5)))
	);
	imagepolygon($image,$point,5,$green);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*1))),
	($y+($r * sin((2*pi()/5)*1))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*2))),
	($y+($r * sin((2*pi()/5)*2))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*3))),
	($y+($r * sin((2*pi()/5)*3))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*4))),
	($y+($r * sin((2*pi()/5)*4))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*5))),
	($y+($r * sin((2*pi()/5)*5))),5,5,0,360,$grey,IMG_ARC_PIE);

<spamg>//Triangle</spamg>
	$x=0;$y=0;
	$x=500+$x;$y=100-$y;
	$point = array(
		$x-50,$y-80,
		$x-50,$y+80,
		$x+60,$y+80
	);
	imagepolygon($image,$point,3,$green);
	imagefilledarc($image,$x-50,$y-80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+60,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);

<spamg>//rectangle</spamg>
	$x=0;$y=0;
	$x=100+$x;$y=300-$y;
	$point = array(
		$x-50,$y-80,
		$x-50,$y+80,
		$x+60,$y+80,
		$x+60,$y-80
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+60,$y+80,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+60,$y-80,5,5,0,360,$grey,IMG_ARC_PIE);

<spamg>//square</spamg>
	$x=0;$y=0;
	$x=300+$x;$y=300-$y;
	$point = array(
		$x-50,$y-50,
		$x-50,$y+50,
		$x+50,$y+50,
		$x+50,$y-50
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-50,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+50,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y+50,5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y-50,5,5,0,360,$grey,IMG_ARC_PIE);

<spamg>//Complex Polygon</spamg>
	$r=90;
	$x=0;$y=0;
	$x=500+$x;$y=300-$y;
	imagefilledarc($image,$x,$y,5,5,0,360,$grey,IMG_ARC_PIE);
	imagearc($image,$x,$y,180,180,0,360,$grey);

	imageline($image,($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),
	($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*1))),($y+($r * sin((2*pi()/5)*1))),
	($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),
	($x + ($r*cos((2*pi()/5)*4))),($y+($r * sin((2*pi()/5)*4))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*2))),($y+($r * sin((2*pi()/5)*2))),
	($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5))),$green);
	imageline($image,($x + ($r*cos((2*pi()/5)*3))),($y+($r * sin((2*pi()/5)*3))),
	($x + ($r*cos((2*pi()/5)*5))),($y+($r * sin((2*pi()/5)*5))),$green);
	
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*1))),
	($y+($r * sin((2*pi()/5)*1))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*2))),
	($y+($r * sin((2*pi()/5)*2))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*3))),
	($y+($r * sin((2*pi()/5)*3))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*4))),
	($y+($r * sin((2*pi()/5)*4))),5,5,0,360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,($x + ($r*cos((2*pi()/5)*5))),
	($y+($r * sin((2*pi()/5)*5))),5,5,0,360,$grey,IMG_ARC_PIE);
	
<spamg>//call image</spamg>
	imagepng($image,"image/polygon1.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/polygon1.png">&lt;/center>';

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
