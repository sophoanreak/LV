<html>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Calculus >> Limits >> Limit to find Area :</font></b><br>
					<p>
					<b>Objective: </b>It should be the uses of  Limits on PHP. Limit(x-1/x<sup>2</sup>-1)... But I could not find away to make this work yet. Instead, I used area of rectangle for estimation. 
					
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

//The area is approximation by using several rectangles to find area
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
	
//making an arrow head for X and Y coordinate
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
	
//draw y=(x-1)/(x*x-1)
//below 200s is to coordinate (x,y) at the center
//scale up 30 times
	
	//left-side parabola
	for($tempminus=-0.1;$tempminus>=-5.1;$tempminus-=0.1){
		${'n'.($tempminus*-10)} = (($tempminus-1)/(($tempminus*$tempminus)-1))*30;
		${'m'.($tempminus*-10)} = $tempminus*30;	
		}
		
	for($tempminus=-0.1;$tempminus>=-0.8;$tempminus-=0.1){
		imageline($image,${'m'.($tempminus*-10)}+200,200-${'n'.($tempminus*-10)},
		${'m'.(($tempminus*-10)+1)}+200,200-${'n'.(($tempminus*-10)+1)},$green);
	}
	
	//right-side parabola
	for($temp=0.1;$temp<=5.1;$temp+=0.1){
		${'y'.$temp*10} = (($temp-1)/(($temp*$temp)-1))*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp<=5;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},${'x'.(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
	}
	
	//area to be calculated
		//draw coordination lines
	imageline($image,$x1,$y1,$x2,$y2,$blue);
	for($temp=0.1;$temp<=3;$temp+=0.1){
		$x1 = $temp*30; $y1 = (($temp-1)/(($temp*$temp)-1))*30;
		$x2 = $temp*30; $y2 = 0;
		$x1 = $x1+200;$y1 = 200-$y1;
		$x2 = $x2+200;$y2 = 200-$y2;
		imageline($image,$x1,$y1,$x2,$y2,$blue);
	}
	
	//string
	imagestring($image,2,50,50,'Y = (X-1)/(X*X-1)',$white);
	imagestring($image,2,210,5,'5.5',$white);
	imagestring($image,2,370,205,'5.5',$white);
	imagestring($image,2,207,205,'0',$white);
	imagestring($image,2,5,5,'Scale up 30 times',$black);
	
	//find the blue area
	for($temp=0.1;$temp<=3.1;$temp+=0.1){
		${'x1'.$temp*10} = $temp*30; ${'y1'.$temp*10} = (($temp-1)/(($temp*$temp)-1))*30;
		${'x2'.$temp*10} = $temp*30; ${'y2'.$temp*10} = 0;
		${'x1'.$temp*10} = ${'x1'.$temp*10}+200;${'y1'.$temp*10} = 200-${'y1'.$temp*10};
		${'x2'.$temp*10} = ${'x2'.$temp*10}+200;${'y2'.$temp*10} = 200-${'y2'.$temp*10};
	}
	$result = 0;
	for($temp=0.1;$temp<=3;$temp+=0.1){
		$result += (${'x1'.(($temp*10)+1)}-${'x1'.$temp*10})*(${'y2'.$temp*10}-${'y1'.$temp*10});
	}
	$result = number_format($result,2,'.',',');
	
	//string
	imagestring($image,2,230,160,'Area = '.$result,$green);
	
//call image
	imagepng($image,"image/limitarea.png");
	imagedestroy($image);
	
	echo '<center><img src="image/limitarea.png"></center>';
	
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
<spamg>//The area is approximation by using several rectangles to find area</spamg>
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
	
<spamg>//draw y=(x-1)/(x*x-1)</spamg>
<spamg>//below 200s is to coordinate (x,y) at the center</spamg>
<spamg>//scale up 30 times</spamg>
	
	<spamg>//left-side parabola</spamg>
	for($tempminus=-0.1;$tempminus>=-5.1;$tempminus-=0.1){
		${'n'.($tempminus*-10)} = (($tempminus-1)/(($tempminus*$tempminus)-1))*30;
		${'m'.($tempminus*-10)} = $tempminus*30;	
		}
		
	for($tempminus=-0.1;$tempminus>=-0.8;$tempminus-=0.1){
		imageline($image,${'m'.($tempminus*-10)}+200,200-${'n'.($tempminus*-10)},
		${'m'.(($tempminus*-10)+1)}+200,200-${'n'.(($tempminus*-10)+1)},$green);
	}
	
	<spamg>//right-side parabola</spamg>
	for($temp=0.1;$temp&lt;=5.1;$temp+=0.1){
		${'y'.$temp*10} = (($temp-1)/(($temp*$temp)-1))*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp&lt;=5;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},${'x'.
		(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
	}
	
	<spamg>//area to be calculated</spamg>
		<spamg>//draw coordination lines</spamg>
	imageline($image,$x1,$y1,$x2,$y2,$blue);
	for($temp=0.1;$temp&lt;=3;$temp+=0.1){
		$x1 = $temp*30; $y1 = (($temp-1)/(($temp*$temp)-1))*30;
		$x2 = $temp*30; $y2 = 0;
		$x1 = $x1+200;$y1 = 200-$y1;
		$x2 = $x2+200;$y2 = 200-$y2;
		imageline($image,$x1,$y1,$x2,$y2,$blue);
	}
	
	<spamg>//string</spamg>
	imagestring($image,2,50,50,'Y = (X-1)/(X*X-1)',$white);
	imagestring($image,2,210,5,'5.5',$white);
	imagestring($image,2,370,205,'5.5',$white);
	imagestring($image,2,207,205,'0',$white);
	imagestring($image,2,5,5,'Scale up 30 times',$black);
	
	<spamg>//find the blue area</spamg>
	for($temp=0.1;$temp&lt;=3.1;$temp+=0.1){
		${'x1'.$temp*10} = $temp*30; ${'y1'.$temp*10} = (($temp-1)/(($temp*$temp)-1))*30;
		${'x2'.$temp*10} = $temp*30; ${'y2'.$temp*10} = 0;
		${'x1'.$temp*10} = ${'x1'.$temp*10}+200;${'y1'.$temp*10} = 200-${'y1'.$temp*10};
		${'x2'.$temp*10} = ${'x2'.$temp*10}+200;${'y2'.$temp*10} = 200-${'y2'.$temp*10};
	}
	$result = 0;
	for($temp=0.1;$temp&lt;=3;$temp+=0.1){
		$result += (${'x1'.(($temp*10)+1)}-${'x1'.$temp*10})*(${'y2'.$temp*10}-
		${'y1'.$temp*10});
	}
	$result = number_format($result,2,'.',',');
	
	<spamg>//string</spamg>
	imagestring($image,2,230,160,'Area = '.$result,$green);

<spamg>//call image</spamg>
	imagepng($image,"image/limitarea.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/limitarea.png">&lt;/center>';
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