<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Calculus >> Limit of Continuity >> Continuity :</font></b><br>
					<p>
					<b>Objective: </b>Limit of Continuity on PHP.
					
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

//function
	function below($a){
		return "<div class='belowcharacter'>x&#8594;$a</div>";
	}
	function below1($a){
		return "<div class='belowcharacter1'>x&#8594;$a</div>";
	}
	function radicalfun($a){
		return "<div class='radical'>$a</div>";
	}

//Limit (2x<sup>2</sup> + 2)
	echo "<b><u>Lim of Continuity)</u></b><br>";
	echo "<b>Lim (2x<sup>2</sup> + 2)</b><br><br>";
	echo below1('a'). " lim (2x<sup>2</sup> + 2) , provided a is integer.";
	echo "<br><br><br><br>";
	
	echo "<div style='margin-top:-3px;'>";
//x is between (-200,+200)
//y is between (-200,+200)

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
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i<300;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
//add middle lines vertically and horizontally
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);

//loop for the white grid
	for($i=10;$i<300;$i+=5){ 
		imageline($image,148,$i,152,$i,$grey);
	}
	for($i=5;$i<295;$i+=5){ 
		imageline($image,$i,148,$i,152,$grey);
	}
	
//making an arrow head for X and Y coordinate
	imageline($image,145,5,150,0,$white);
	imageline($image,155,5,150,0,$white);
	imageline($image,295,145,300,150,$white);
	imageline($image,295,155,300,150,$white);
	
//draw y=(1+1/n)<sup>n</sup>
//below 200s is to coordinate (x,y) at the center
//scale up 60 times
	
	//right-side parabola
	for($temp=0.1;$temp<=2.21;$temp+=0.1){
		${'y'.$temp*10} = ((2*pow($temp,2))+2)*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp<=2.1;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+150,150-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+150,150-${'y'.(($temp*10)+1)},$green);
	}
	
	
	imagestring($image,2,160,5,'5',$white);
	imagestring($image,2,270,160,'2.5',$white);
	
//call image
	imagepng($image,"image/limitcontinuity.png");
	imagedestroy($image);
	
	echo '<center><img src="image/limitcontinuity.png"></center>';
?> 
					</div>
					</td>
					<td valign="top" width="50%">
	
<?php

//Limit f(x)/g(x)
	echo "<b><u>Lim of Discontinue</u></b><br>";
	echo "<b>Lim f(x)/g(x)</b><br><br>";
	echo "f(x) = 1 , g(x) = x - 3 <br>";
	echo below1('a'). " lim [(2x<sup>2</sup> + 2)/(x - 3)] , provided a is integer. And a &ne; 3.";
	echo "<br><br>";
	
//x is between (-200,+200)
//y is between (-200,+200)

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
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i<300;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
//add middle lines vertically and horizontally
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);

//loop for the white grid
	for($i=10;$i<300;$i+=5){ 
		imageline($image,148,$i,152,$i,$grey);
	}
	for($i=5;$i<295;$i+=5){ 
		imageline($image,$i,148,$i,152,$grey);
	}
	
//making an arrow head for X and Y coordinate
	imageline($image,145,5,150,0,$white);
	imageline($image,155,5,150,0,$white);
	imageline($image,295,145,300,150,$white);
	imageline($image,295,155,300,150,$white);
	
//draw y=(1+1/n)<sup>n</sup>
//below 200s is to coordinate (x,y) at the center
//scale up 60 times
	
	//right-side parabola
	for($temp=0.1;$temp<=5.21;$temp+=0.1){
		${'y'.$temp*10} = (1/($temp-3))*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp<=5.1;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+150,150-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+150,150-${'y'.(($temp*10)+1)},$green);
	}
	imagestring($image,2,160,5,'5',$white);
	imagestring($image,2,270,160,'2.5',$white);
	imagearc($image,150+90,5,10,10,0,360,$blue);
	imagestring($image,2,245,5,'x = 3',$white);
	imagearc($image,150+90,295,10,10,0,360,$blue);
	imagestring($image,2,245,285,'x = 3',$white);
	
//call image
	imagepng($image,"image/limitcontinuity2.png");
	imagedestroy($image);
	
	echo '<center><img src="image/limitcontinuity2.png"></center>';
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
<pre style= "font-family: 'Time New Roman';">
<spamb>&lt;style></spamb>
.belowcharacter{
		font-size:0.6em;
		position:absolute;
		display:inline-block;
		margin-top:11px;
		
	}
	.belowcharacter1{
		font-size:0.6em;
		position:absolute;
		display:inline-block;
		margin-top:16px;
		
	}
	.radical{
		font-size:0.6em;
		position:absolute;
		display:inline-block;
		margin-top:-5px;
	}
<spamb>&lt;/style></spamb>

<spamb>&lt;?php</spamb>

<spamg>//function</spamg>
	function below($a){
		return "&lt;div class='belowcharacter'>x&#8594;$a&lt;/div>";
	}
	function below1($a){
		return "&lt;div class='belowcharacter1'>x&#8594;$a&lt;/div>";
	}
	function radicalfun($a){
		return "&lt;div class='radical'>$a&lt;/div>";
	}

<spamb>//Left graph</spamb>
<spamg>//Limit (2x&lt;sup>2&lt;/sup> + 2)</spamg>
	echo "&lt;b>&lt;u>Lim of Continuity)&lt;/u>&lt;/b>&lt;br>";
	echo "&lt;b>Lim (2x&lt;sup>2&lt;/sup> + 2)&lt;/b>&lt;br>&lt;br>";
	echo below1('a'). " lim (2x&lt;sup>2&lt;/sup> + 2) , provided a is integer.";
	echo "&lt;br>&lt;br>&lt;br>&lt;br>";
	
	echo "&lt;div style='margin-top:-3px;'>";
</spamg>//x is between (-200,+200)
//y is between (-200,+200)

//create background</spamg>
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
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i&lt;300;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
<spamg>//add middle lines vertically and horizontally</spamg>
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);

<spamg>//loop for the white grid</spamg>
	for($i=10;$i&lt;300;$i+=5){ 
		imageline($image,148,$i,152,$i,$grey);
	}
	for($i=5;$i&lt;295;$i+=5){ 
		imageline($image,$i,148,$i,152,$grey);
	}
	
<spamg>//making an arrow head for X and Y coordinate</spamg>
	imageline($image,145,5,150,0,$white);
	imageline($image,155,5,150,0,$white);
	imageline($image,295,145,300,150,$white);
	imageline($image,295,155,300,150,$white);
	
<spamg>//draw y=(1+1/n)&lt;sup>n&lt;/sup>
//below 200s is to coordinate (x,y) at the center
//scale up 60 times
	
	//right-side parabola</spamg>
	for($temp=0.1;$temp&lt;=2.21;$temp+=0.1){
		${'y'.$temp*10} = ((2*pow($temp,2))+2)*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp&lt;=2.1;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+150,150-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+150,150-${'y'.(($temp*10)+1)},$green);
	}
	
	imagestring($image,2,160,5,'5',$white);
	imagestring($image,2,270,160,'2.5',$white);
	
<spamg>//call image</spamg>
	imagepng($image,"image/limitcontinuity.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/limitcontinuity.png">&lt;/center>';

<spamb>//Right Graph</spamb>
<spamg>//Limit f(x)/g(x)</spamg>
	echo "&lt;b>&lt;u>Lim of Discontinue&lt;/u>&lt;/b>&lt;br>";
	echo "&lt;b>Lim f(x)/g(x)&lt;/b>&lt;br>&lt;br>";
	echo "f(x) = 1 , g(x) = x - 3 &lt;br>";
	echo below1('a'). " lim [(2x&lt;sup>2&lt;/sup> + 2)/(x - 3)] , provided a is integer. And a &ne; 3.";
	echo "&lt;br>&lt;br>";
	
<spamg>//x is between (-200,+200)
//y is between (-200,+200)

//create background</spamg>
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
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i&lt;300;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
<spamg>//add middle lines vertically and horizontally</spamg>
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);

<spamg>//loop for the white grid</spamg>
	for($i=10;$i&lt;300;$i+=5){ 
		imageline($image,148,$i,152,$i,$grey);
	}
	for($i=5;$i&lt;295;$i+=5){ 
		imageline($image,$i,148,$i,152,$grey);
	}
	
<spamg>//making an arrow head for X and Y coordinate</spamg>
	imageline($image,145,5,150,0,$white);
	imageline($image,155,5,150,0,$white);
	imageline($image,295,145,300,150,$white);
	imageline($image,295,155,300,150,$white);
	
<spamg>//draw y=(1+1/n)&lt;sup>n&lt;/sup>
//below 200s is to coordinate (x,y) at the center
//scale up 60 times
	
	//right-side parabola</spamg>
	for($temp=0.1;$temp&lt;=5.21;$temp+=0.1){
		${'y'.$temp*10} = (1/($temp-3))*30;
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp&lt;=5.1;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+150,150-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+150,150-${'y'.(($temp*10)+1)},$green);
	}
	imagestring($image,2,160,5,'5',$white);
	imagestring($image,2,270,160,'2.5',$white);
	imagearc($image,150+90,5,10,10,0,360,$blue);
	imagestring($image,2,245,5,'x = 3',$white);
	imagearc($image,150+90,295,10,10,0,360,$blue);
	imagestring($image,2,245,285,'x = 3',$white);
	
<spamg>//call image</spamg>
	imagepng($image,"image/limitcontinuity2.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/limitcontinuity2.png">&lt;/center>';
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled>Sorry, for the inconvenience!
							</form>
					</td>
				</tr>
			</table>

			
</html>