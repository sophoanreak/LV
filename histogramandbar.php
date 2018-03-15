<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Statistics >> Uncertainty and Population >> Histogram and Bar Chart :</font></b><br>
					<p>
					<b>Objective: </b>Draw Histogram and Bar Chart with PHP. <br>
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
	for ($i=5;$i<300;$i+=5){
		imageline($image,$i,0,$i,300,$blackAlpha1);
	}
	for ($i=0;$i<300;$i+=5){
		imageline($image,0,$i,300,$i,$blackAlpha1);
	}

//Histogram
	//vertical and horizontal line
	imageline($image,40,20,40,260,$grey);
	imageline($image,40,260,280,260,$grey);
	
	//loop for white grids
	for($i=10;$i<=235;$i+=10){
		imageline($image,40+$i,258,40+$i,262,$grey);
	}
	for($i=10;$i<=235;$i+=10){
		imageline($image,38,20+$i,42,20+$i,$grey);
	}
	
	//histogram data
	$x1=30;$y1=0;
	$x2=60;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$white);
	$x1=61;$y1=0;
	$x2=90;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$blue);
	$x1=91;$y1=0;
	$x2=120;$y2=150;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$white);
	$x1=121;$y1=0;
	$x2=150;$y2=120;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$blue);
	$x1=151;$y1=0;
	$x2=180;$y2=78;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$white);
	$x1=181;$y1=0;
	$x2=210;$y2=40;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$blue);

//string
imagestring($image,3,135,5,"Histogram",$yellow);	
		
		//horizontal
	for($i=20;$i<=235;$i+=40){
		imagestring($image,2,40+$i,262,$i/20+70,$green);
		imagefilledarc($image,40+$i,260,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($image,2,135,277,'% Score Interval',$yellow);
		
		//vertical
	for($i=20;$i<=235;$i+=40){
		imagestring($image,2,27,241-$i,$i/20+1,$green);
		imagefilledarc($image,40,245-$i,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($image,2,5,5,'Frequency',$yellow);
	
//call image
	imagepng($image,"image/histogramandbar.png");
	imagedestroy($image);
	
	echo '<center><img src="image/histogramandbar.png"></center>';
?> 

					</td>
					<td valign="top">

<?php

//create background
	$width = 300;
	$height = 300;
	$imageB = imagecreate($width,$height);
	
//Colors
	$grey = imagecolorallocate($imageB,200,200,200);
	$black = imagecolorallocate($imageB,0,0,0);
	$blackAlpha = imagecolorallocatealpha($imageB,0,0,0,50);
	$blackAlpha1 = imagecolorallocatealpha($imageB,0,0,0,40);
	$white = imagecolorallocate($imageB,255,255,255);
	$blue = imagecolorallocate($imageB,0,0,255);
	$red = imagecolorallocate($imageB,255,0,0);
	$green = imagecolorallocate($imageB,0,255,0);
	$yellow = imagecolorallocate($imageB,240,240,19);
	
//make the background black
	imagefill($imageB,0,0,$blackAlpha);
	
//makes grid
	for ($i=5;$i<300;$i+=5){
		imageline($imageB,$i,0,$i,300,$blackAlpha1);
	}
	for ($i=0;$i<300;$i+=5){
		imageline($imageB,0,$i,300,$i,$blackAlpha1);
	}

//Bar Chart
	
	//vertical and horizontal line
	imageline($imageB,40,20,40,260,$grey);
	imageline($imageB,40,260,280,260,$grey);
	
	//loop for white grids
	for($i=10;$i<=235;$i+=10){
		imageline($imageB,40+$i,258,40+$i,262,$grey);
	}
	for($i=10;$i<=235;$i+=10){
		imageline($imageB,38,20+$i,42,20+$i,$grey);
	}
	
	//Bar Chart data
	$x1=10;$y1=0;
	$x2=20;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=50;$y1=0;
	$x2=60;$y2=75;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=61;$y1=0;
	$x2=70;$y2=30;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=90;$y1=0;
	$x2=100;$y2=115;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=101;$y1=0;
	$x2=110;$y2=115;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=130;$y1=0;
	$x2=140;$y2=75;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=141;$y1=0;
	$x2=150;$y2=135;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=170;$y1=0;
	$x2=180;$y2=35;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=181;$y1=0;
	$x2=190;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=210;$y1=0;
	$x2=220;$y2=15;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=221;$y1=0;
	$x2=230;$y2=15;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	
//string
imagestring($imageB,3,135,5,"Bar Chart",$yellow);	
		
		//horizontal
	$location[20]="OH";$location[60]="KY";$location[100]="NY";
	$location[140]="MO";$location[180]="FL";$location[220]="GA";
	for($i=20;$i<=235;$i+=40){
		imagestring($imageB,2,40+$i,262,$location[$i],$green);
		imagefilledarc($imageB,40+$i,260,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($imageB,2,135,277,'Locations',$yellow);
		
		//vertical
	for($i=20;$i<=235;$i+=40){
		imagestring($imageB,2,27,241-$i,$i/20+1,$green);
		imagefilledarc($imageB,40,245-$i,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($imageB,2,5,5,'Number of People',$yellow);
	
		//assign male and female
	imagefilledrectangle($imageB,245,50,255,60,$white);
	imagestring($imageB,2,260,50,'Male',$green);
	imagefilledrectangle($imageB,245,70,255,80,$blue);
	imagestring($imageB,2,260,70,'Female',$green);

//call image
	imagepng($imageB,"image/histogramandbarB.png");
	imagedestroy($imageB);

	echo '<center><img src="image/histogramandbarB.png"></center>';
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
<spamb>&lt;html></spamb><br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
<spamr>//Histogram</spamr>
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
	for ($i=5;$i&lt;300;$i+=5){
		imageline($image,$i,0,$i,300,$blackAlpha1);
	}
	for ($i=0;$i&lt;300;$i+=5){
		imageline($image,0,$i,300,$i,$blackAlpha1);
	}

<spamg>//Histogram</spamg>
	<spamg>//vertical and horizontal line</spamg>
	imageline($image,40,20,40,260,$grey);
	imageline($image,40,260,280,260,$grey);
	
	<spamg>//loop for white grids</spamg>
	for($i=10;$i&lt;=235;$i+=10){
		imageline($image,40+$i,258,40+$i,262,$grey);
	}
	for($i=10;$i&lt;=235;$i+=10){
		imageline($image,38,20+$i,42,20+$i,$grey);
	}
	
	<spamg>//histogram data</spamg>
	$x1=30;$y1=0;
	$x2=60;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$white);
	$x1=61;$y1=0;
	$x2=90;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$blue);
	$x1=91;$y1=0;
	$x2=120;$y2=150;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$white);
	$x1=121;$y1=0;
	$x2=150;$y2=120;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$blue);
	$x1=151;$y1=0;
	$x2=180;$y2=78;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$white);
	$x1=181;$y1=0;
	$x2=210;$y2=40;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($image,$x1,$y1,$x2,$y2,$blue);

<spamg>//string</spamg>
imagestring($image,3,135,5,"Histogram",$yellow);	
		
		<spamg>//horizontal</spamg>
	for($i=20;$i&lt;=235;$i+=40){
		imagestring($image,2,40+$i,262,$i/20+70,$green);
		imagefilledarc($image,40+$i,260,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($image,2,135,277,'% Score Interval',$yellow);
		
		<spamg>//vertical</spamg>
	for($i=20;$i&lt;=235;$i+=40){
		imagestring($image,2,27,241-$i,$i/20+1,$green);
		imagefilledarc($image,40,245-$i,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($image,2,5,5,'Frequency',$yellow);
	
<spamg>//call image</spamg>
	imagepng($image,"image/histogramandbar.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/histogramandbar.png">&lt;/center>';

<spamr>//Bar Chart</spamr>
<spamg>//create background</spamg>
	$width = 300;
	$height = 300;
	$imageB = imagecreate($width,$height);
	
<spamg>//Colors</spamg>
	$grey = imagecolorallocate($imageB,200,200,200);
	$black = imagecolorallocate($imageB,0,0,0);
	$blackAlpha = imagecolorallocatealpha($imageB,0,0,0,50);
	$blackAlpha1 = imagecolorallocatealpha($imageB,0,0,0,40);
	$white = imagecolorallocate($imageB,255,255,255);
	$blue = imagecolorallocate($imageB,0,0,255);
	$red = imagecolorallocate($imageB,255,0,0);
	$green = imagecolorallocate($imageB,0,255,0);
	$yellow = imagecolorallocate($imageB,240,240,19);
	
<spamg>//make the background black</spamg>
	imagefill($imageB,0,0,$blackAlpha);
	
<spamg>//makes grid</spamg>
	for ($i=5;$i&lt;300;$i+=5){
		imageline($imageB,$i,0,$i,300,$blackAlpha1);
	}
	for ($i=0;$i&lt;300;$i+=5){
		imageline($imageB,0,$i,300,$i,$blackAlpha1);
	}

<spamg>//Bar Chart</spamg>
	
	<spamg>//vertical and horizontal line</spamg>
	imageline($imageB,40,20,40,260,$grey);
	imageline($imageB,40,260,280,260,$grey);
	
	<spamg>//loop for white grids</spamg>
	for($i=10;$i&lt;=235;$i+=10){
		imageline($imageB,40+$i,258,40+$i,262,$grey);
	}
	for($i=10;$i&lt;=235;$i+=10){
		imageline($imageB,38,20+$i,42,20+$i,$grey);
	}
	
	<spamg>//Bar Chart data</spamg>
	$x1=10;$y1=0;
	$x2=20;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=50;$y1=0;
	$x2=60;$y2=75;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=61;$y1=0;
	$x2=70;$y2=30;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=90;$y1=0;
	$x2=100;$y2=115;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=101;$y1=0;
	$x2=110;$y2=115;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=130;$y1=0;
	$x2=140;$y2=75;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=141;$y1=0;
	$x2=150;$y2=135;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=170;$y1=0;
	$x2=180;$y2=35;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=181;$y1=0;
	$x2=190;$y2=50;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	$x1=210;$y1=0;
	$x2=220;$y2=15;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$white);
	$x1=221;$y1=0;
	$x2=230;$y2=15;
	$x1=$x1+40;$y1=260-$y1;
	$x2=$x2+40;$y2=260-$y2;
	imagefilledrectangle($imageB,$x1,$y1,$x2,$y2,$blue);
	
<spamg>//string</spamg>
imagestring($imageB,3,135,5,"Bar Chart",$yellow);	
		
		<spamg>//horizontal</spamg>
	$location[20]="OH";$location[60]="KY";$location[100]="NY";
	$location[140]="MO";$location[180]="FL";$location[220]="GA";
	for($i=20;$i&lt;=235;$i+=40){
		imagestring($imageB,2,40+$i,262,$location[$i],$green);
		imagefilledarc($imageB,40+$i,260,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($imageB,2,135,277,'Locations',$yellow);
		
		<spamg>//vertical</spamg>
	for($i=20;$i&lt;=235;$i+=40){
		imagestring($imageB,2,27,241-$i,$i/20+1,$green);
		imagefilledarc($imageB,40,245-$i,5,5,0,360,$blue,IMG_ARC_PIE);
	}
	imagestring($imageB,2,5,5,'Number of People',$yellow);
	
		<spamg>//assign male and female</spamg>
	imagefilledrectangle($imageB,245,50,255,60,$white);
	imagestring($imageB,2,260,50,'Male',$green);
	imagefilledrectangle($imageB,245,70,255,80,$blue);
	imagestring($imageB,2,260,70,'Female',$green);

<spamg>//call image</spamg>
	imagepng($imageB,"image/histogramandbarB.png");
	imagedestroy($imageB);

	echo '&lt;center>&lt;img src="image/histogramandbarB.png">&lt;/center>';
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