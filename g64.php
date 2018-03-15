<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Special Math >> Graham's Number >> G64</font></b><br>
					<p>
					<b>Objective: </b>Graham's Number on PHP. Graham's number is G64 is the biggest number known to men. It is used in studying higher dimensional world. We will go through basic understand of Graham's number since my laptop is very limited in processing power. To be exact with latest supper computer, the first digit of Graham's number is not yet to be found.
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

//Graham's number (|) as an arrow
	echo "<h4>Graham's number basic understanding</h4>";
	echo "<spamg>'"."&uarr;"."'"." As an arrow or power of </spamg>". "<br>";
	echo "<b>3&uarr;&uarr;3 :</b>";//3&uarr;(3&uarr;3)
	$graham = pow(3,pow(3,3));
	echo number_format($graham,0,'.',',');
	echo "<br>";
	echo "<b>3&uarr;&uarr;&uarr;3 :</b>";//3|(3|3)|(3|3)
	$graham = pow(3,pow(3,pow(3,3)));
	echo number_format($graham,0,'.',',');
	
//create background
	$width = 350;
	$height = 350;
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
	
	//Cube
		//square no.1
	$x=0;$y=0;
	$x=155+$x;$y=155-$y;
	$point = array(
		$x-50,$y-50,
		$x-50,$y+50,
		$x+50,$y+50,
		$x+50,$y-50
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
		
		//blue lines
		imageline($image,$x-50,$y-50,$x+50,$y+50,$red);
		imageline($image,$x-50,$y+50,$x+50,$y-50,$blue);
	
		//square no.2
	$x=0;$y=0;
	$x=185+$x;$y=135-$y;
	$point = array(
		$x-50,$y-50,
		$x-50,$y+50,
		$x+50,$y+50,
		$x+50,$y-50
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
	
	//blue lines
		imageline($image,$x-50,$y-50,$x+50,$y+50,$red);
		imageline($image,$x-50,$y+50,$x+50,$y-50,$blue);
	
		//lines
	$x1=0;$y1=0;
	$x1=155+$x1;$y1=155-$y1;
	$x2=0;$y2=0;
	$x2=185+$x2;$y2=135-$y2;
	imageline($image,$x1-50,$y1-50,$x2-50,$y2-50,$green);
	imageline($image,$x1-50,$y1+50,$x2-50,$y2+50,$green);
	imageline($image,$x1+50,$y1+50,$x2+50,$y2+50,$green);
	imageline($image,$x1+50,$y1-50,$x2+50,$y2-50,$green);
	
	//blue and red line
	$x1=0;$y1=0;
	$x1=155+$x1;$y1=155-$y1;
	$x2=0;$y2=0;
	$x2=185+$x2;$y2=135-$y2;
		
		//blue
	imageline($image,$x1-50,$y1-50,$x2+50,$y2-50,$blue);
	imageline($image,$x1+50,$y1-50,$x2-50,$y2-50,$blue);
	imageline($image,$x1-50,$y1+50,$x2+50,$y2+50,$blue);
	imageline($image,$x1+50,$y1+50,$x2-50,$y2+50,$blue);
		//red
	imageline($image,$x1-50,$y1+50,$x2+50,$y2-50,$red);
	imageline($image,$x1-50,$y1+50,$x2-50,$y2-50,$red);
	imageline($image,$x1+50,$y1+50,$x1-50,$y1-50,$red);
	imageline($image,$x1+50,$y1+50,$x2-50,$y2-50,$red);
	imageline($image,$x1+50,$y1+50,$x2+50,$y2-50,$red);
	imageline($image,$x2+50,$y2+50,$x1-50,$y1-50,$red);
	imageline($image,$x2+50,$y2+50,$x1+50,$y1-50,$red);
	imageline($image,$x2+50,$y2+50,$x2-50,$y2-50,$red);
	imageline($image,$x2-50,$y2+50,$x1-50,$y1-50,$red);
	imageline($image,$x2-50,$y2+50,$x1+50,$y1+50,$red);

//image string	
	imagestring($image,2,130,20,"Cube",$green);

//call image
	imagepng($image,"image/g64.png");
	imagedestroy($image);
	
	echo '<center><img src="image/g64.png"></center>';
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
<spamg>//Graham's number (&uarr;) as an arrow</spamg>
	echo "&lt;h4>Graham's number basic understanding&lt;/h4>";
	echo "<spamg>'"."&uarr;"."'"." As an arrow or power of </spamg>". "&lt;br>";
	echo "&lt;b>3&uarr;&uarr;3 :&lt;/b>";//3&uarr;(3&uarr;3)
	$graham = pow(3,pow(3,3));
	echo number_format($graham,0,'.',',');
	echo "&lt;br>";
	echo "&lt;b>3&uarr;&uarr;&uarr;3 :&lt;/b>";//3&uarr;(3&uarr;3)|(3&uarr;3)
	$graham = pow(3,pow(3,pow(3,3)));
	echo number_format($graham,0,'.',',');
	
<spamg>//create background</spamg>
	$width = 350;
	$height = 350;
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
	for ($i=5;$i&lt;=650;$i+=5){
		imageline($image,$i,0,$i,650,$blackAlpha1);
	}
	for ($i=0;$i&lt;=650;$i+=5){
		imageline($image,0,$i,650,$i,$blackAlpha1);
	}
	
	<spamg>//Cube</spamg>
		<spamg>//square no.1</spamg>
	$x=0;$y=0;
	$x=155+$x;$y=155-$y;
	$point = array(
		$x-50,$y-50,
		$x-50,$y+50,
		$x+50,$y+50,
		$x+50,$y-50
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
		
		<spamg>//blue lines</spamg>
		imageline($image,$x-50,$y-50,$x+50,$y+50,$red);
		imageline($image,$x-50,$y+50,$x+50,$y-50,$blue);
	
		<spamg>//square no.2</spamg>
	$x=0;$y=0;
	$x=185+$x;$y=135-$y;
	$point = array(
		$x-50,$y-50,
		$x-50,$y+50,
		$x+50,$y+50,
		$x+50,$y-50
	);
	imagepolygon($image,$point,4,$green);
	imagefilledarc($image,$x-50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x-50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y+50,5,5,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($image,$x+50,$y-50,5,5,0,360,$black,IMG_ARC_PIE);
	
	<spamg>//blue lines</spamg>
		imageline($image,$x-50,$y-50,$x+50,$y+50,$red);
		imageline($image,$x-50,$y+50,$x+50,$y-50,$blue);
	
		<spamg>//lines</spamg>
	$x1=0;$y1=0;
	$x1=155+$x1;$y1=155-$y1;
	$x2=0;$y2=0;
	$x2=185+$x2;$y2=135-$y2;
	imageline($image,$x1-50,$y1-50,$x2-50,$y2-50,$green);
	imageline($image,$x1-50,$y1+50,$x2-50,$y2+50,$green);
	imageline($image,$x1+50,$y1+50,$x2+50,$y2+50,$green);
	imageline($image,$x1+50,$y1-50,$x2+50,$y2-50,$green);
	
	<spamg>//blue and red line</spamg>
	$x1=0;$y1=0;
	$x1=155+$x1;$y1=155-$y1;
	$x2=0;$y2=0;
	$x2=185+$x2;$y2=135-$y2;
		
		<spamg>//blue</spamg>
	imageline($image,$x1-50,$y1-50,$x2+50,$y2-50,$blue);
	imageline($image,$x1+50,$y1-50,$x2-50,$y2-50,$blue);
	imageline($image,$x1-50,$y1+50,$x2+50,$y2+50,$blue);
	imageline($image,$x1+50,$y1+50,$x2-50,$y2+50,$blue);
	
		<spamg>//red</spamg>
	imageline($image,$x1-50,$y1+50,$x2+50,$y2-50,$red);
	imageline($image,$x1-50,$y1+50,$x2-50,$y2-50,$red);
	imageline($image,$x1+50,$y1+50,$x1-50,$y1-50,$red);
	imageline($image,$x1+50,$y1+50,$x2-50,$y2-50,$red);
	imageline($image,$x1+50,$y1+50,$x2+50,$y2-50,$red);
	imageline($image,$x2+50,$y2+50,$x1-50,$y1-50,$red);
	imageline($image,$x2+50,$y2+50,$x1+50,$y1-50,$red);
	imageline($image,$x2+50,$y2+50,$x2-50,$y2-50,$red);
	imageline($image,$x2-50,$y2+50,$x1-50,$y1-50,$red);
	imageline($image,$x2-50,$y2+50,$x1+50,$y1+50,$red);

<spamg>//image string	</spamg>
	imagestring($image,2,130,20,"Cube",$green);

<spamg>//call image</spamg>
	imagepng($image,"image/g64.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/g64.png">&lt;/center>';

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
