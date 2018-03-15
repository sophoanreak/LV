<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Calculus >> Infinite Limits >> Infinite Limits :</font></b><br>
					<p>
					<b>Objective: </b>Laws of Limit on PHP.
					
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

//Limit 1/x
	echo "<b><u>Limit 1/x</u></b><br><br>";
	echo "<div class='belowcharacter'>x&#8594;&infin;</div>lim 1/x = ";
	echo "0 , provided x &#8594;&infin;<br><br>";
	
//Limit f(x) = 2x
	echo "<b><u>Limit f(x) = 2x</u></b><br><br>";
	echo "<div class='belowcharacter'>x&#8594;&infin;</div>lim 2x = ";
	echo "&infin;<br><br>";

//Limit f(x) = 2x<sup>2</sup - 5x
	
	echo "<b><u>Limit f(x) = 2x<sup>2</sup> - 5x</u></b><br><br>";
	echo "<div class='belowcharacter1'>x&#8594;&infin;</div>lim 2x = ";
	echo "+&infin; , &infin;<sup>2</sup> grows faster than (5 * &infin;).<br><br>";

//Limit f(x)/h(x)
	
	//-&infin;
	echo "<b><u>Limit f(x)/h(x)</u></b><br><br>";
	echo "f(x) = -x<sup>3</sup> + 2x -1 ; h(x) = 6x<sup>2</sup> <br>";
	echo "<div class='belowcharacter1'>x&#8594;&infin;</div>lim f(x)/h(x) = ";
	echo "-&infin; , -&infin;<sup>3</sup> grows faster than (&infin; <sup>2</sup>).<br><br>";

	//+&infin;
	echo "f(x) = x<sup>3</sup> + 2x -1 ; h(x) = 6x<sup>2</sup> <br>";
	echo "<div class='belowcharacter1'>x&#8594;&infin;</div>lim f(x)/h(x) = ";
	echo "&infin; , &infin;<sup>3</sup> grows faster than (&infin; <sup>2</sup>).<br><br>";
	
	//a/b, where a,b are integer
	echo "f(x) = x<sup>3</sup> + 2x -1 ; h(x) = 6x<sup>3</sup> <br>";
	echo "<div class='belowcharacter1'>x&#8594;&infin;</div>lim f(x)/h(x) = ";
	echo "1/6; , Simply, divide the coefficient of the term of the largest exponents.<br><br>";
	
	//Limit = 0
	echo "f(x) = x<sup>3</sup> + 2x -1 ; h(x) = 6x<sup>5</sup> <br>";
	echo "<div class='belowcharacter1'>x&#8594;&infin;</div>lim f(x)/h(x) = ";
	echo "0.<br><br>";
	
// e
	echo "<b><u>lim (1+1/n)<sup>n</sup></u></b><br><br>";
	echo "<div class='belowcharacter1'>x&#8594;&infin;</div>lim (1+1/n)<sup>n</sup> = e = 2.71828...";
	echo "<br><br>";
	
//x is between (-200,+200)
//y is between (-200,+200)

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
	
//add middle lines vertically and horizontally
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/3,0,$width/3,$height,$grey);

//loop for the white grid
	for($i=10;$i<400;$i+=5){ 
		imageline($image,198,$i,202,$i,$grey);
	}
	for($i=5;$i<595;$i+=5){ 
		imageline($image,$i,198,$i,202,$grey);
	}
	
//making an arrow head for X and Y coordinate
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,595,195,600,200,$white);
	imageline($image,595,205,600,200,$white);
	
//draw y=(1+1/n)<sup>n</sup>
//below 200s is to coordinate (x,y) at the center
//scale up 60 times
	
	//right-side parabola
	for($temp=0.1;$temp<=9.21;$temp+=0.1){
		${'y'.$temp*10} = pow((1+(1/$temp)),$temp)*60;
		${'x'.$temp*10} = $temp*60;	
		}
	for($temp=0.1;$temp<=9.1;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
	}
	
	imageline($image,200,200-(1*60),$x1+200,200-$y1,$green);//connect y=0 to y=1
	imagestring($image,2,300,50,'Y = e',$white);
	imagestring($image,2,210,5,'3.5',$white);
	imagestring($image,2,570,210,'10',$white);
	imagestring($image,2,205,200-(1*60),'1',$white);
	imagestring($image,2,205,200-(M_E*60),'2.71',$white);
	imagefilledarc($image,200,200-(M_E*60),5,5,0,360,$blue,IMG_ARC_PIE);
	imageline($image,200,200-(M_E*60),600,200-(M_E*60),$white);
	imagefilledarc($image,200,200-(1*60),5,5,0,360,$blue,IMG_ARC_PIE);
	
//call image
	imagepng($image,"image/limitexponential.png");
	imagedestroy($image);
	
	echo '<center><img src="image/limitexponential.png"></center>';
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


<spamg>//Limit 1/x</spamg>
	echo "&lt;b>&lt;u>Limit 1/x&lt;/u>&lt;/b>&lt;br>&lt;br>";
	echo "&lt;div class='belowcharacter'>x&#8594;&infin;&lt;/div>lim 1/x = ";
	echo "0 , provided x &#8594;&infin;&lt;br>&lt;br>";
	
<spamg>//Limit f(x) = 2x</spamg>
	echo "&lt;b>&lt;u>Limit f(x) = 2x&lt;/u>&lt;/b>&lt;br>&lt;br>";
	echo "&lt;div class='belowcharacter'>x&#8594;&infin;&lt;/div>lim 2x = ";
	echo "&infin;&lt;br>&lt;br>";

<spamg>//Limit f(x) = 2x&lt;sup>2&lt;/sup - 5x</spamg>
	
	echo "&lt;b>&lt;u>Limit f(x) = 2x&lt;sup>2&lt;/sup> - 5x&lt;/u>&lt;/b>&lt;br>&lt;br>";
	echo "&lt;div class='belowcharacter1'>x&#8594;&infin;&lt;/div>lim 2x = ";
	echo "+&infin; , &infin;&lt;sup>2&lt;/sup> grows faster than (5 * &infin;).&lt;br>&lt;br>";

<spamg>//Limit f(x)/h(x)
	
	//-&infin;</spamg>
	echo "&lt;b>&lt;u>Limit f(x)/h(x)&lt;/u>&lt;/b>&lt;br>&lt;br>";
	echo "f(x) = -x&lt;sup>3&lt;/sup> + 2x -1 ; h(x) = 6x&lt;sup>2&lt;/sup> &lt;br>";
	echo "&lt;div class='belowcharacter1'>x&#8594;&infin;&lt;/div>lim f(x)/h(x) = ";
	echo "-&infin; , -&infin;&lt;sup>3&lt;/sup> grows faster than (&infin; &lt;sup>2&lt;/sup>).&lt;br>&lt;br>";

	<spamg>//+&infin;</spamg>
	echo "f(x) = x&lt;sup>3&lt;/sup> + 2x -1 ; h(x) = 6x&lt;sup>2&lt;/sup> &lt;br>";
	echo "&lt;div class='belowcharacter1'>x&#8594;&infin;&lt;/div>lim f(x)/h(x) = ";
	echo "&infin; , &infin;&lt;sup>3&lt;/sup> grows faster than (&infin; &lt;sup>2&lt;/sup>).&lt;br>&lt;br>";
	
	<spamg>//a/b, where a,b are integer</spamg>
	echo "f(x) = x&lt;sup>3&lt;/sup> + 2x -1 ; h(x) = 6x&lt;sup>3&lt;/sup> &lt;br>";
	echo "&lt;div class='belowcharacter1'>x&#8594;&infin;&lt;/div>lim f(x)/h(x) = ";
	echo "1/6; , Simply, divide the coefficient of the term of the largest exponents.&lt;br>&lt;br>";
	
	<spamg>//Limit = 0</spamg>
	echo "f(x) = x&lt;sup>3&lt;/sup> + 2x -1 ; h(x) = 6x&lt;sup>5&lt;/sup> &lt;br>";
	echo "&lt;div class='belowcharacter1'>x&#8594;&infin;&lt;/div>lim f(x)/h(x) = ";
	echo "0.&lt;br>&lt;br>";
	
<spamg>// e</spamg>
	echo "&lt;b>&lt;u>(1+1/n)&lt;sup>n&lt;/sup>&lt;/u>&lt;/b>&lt;br>&lt;br>";
	echo "&lt;div class='belowcharacter1'>x&#8594;&infin;&lt;/div>lim (1+1/n)&lt;sup>n&lt;/sup> = e = 2.71828...";
	echo "&lt;br>&lt;br>";
	
<spamg>//x is between (-200,+200)
//y is between (-200,+200)

//create background</spamg>
	$width = 600;
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
		imageline($image,$i,0,$i,600,$blackAlpha1);
	}
	for ($i=0;$i&lt;400;$i+=5){
		imageline($image,0,$i,600,$i,$blackAlpha1);
	}
	
<spamg>//add middle lines vertically and horizontally</spamg>
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);

<spamg>//loop for the white grid</spamg>
	for($i=10;$i&lt;400;$i+=5){ 
		imageline($image,198,$i,202,$i,$grey);
	}
	for($i=5;$i&lt;595;$i+=5){ 
		imageline($image,$i,198,$i,202,$grey);
	}
	
<spamg>//making an arrow head for X and Y coordinate</spamg>
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,595,195,600,200,$white);
	imageline($image,595,205,600,200,$white);
	
<spamg>//draw y=(1+1/n)&lt;sup>n&lt;/sup>
//below 200s is to coordinate (x,y) at the center
//scale up 60 times
	
	//right-side parabola</spamg>
	for($temp=0.1;$temp&lt;=9.21;$temp+=0.1){
		${'y'.$temp*10} = pow((1+(1/$temp)),$temp)*60;
		${'x'.$temp*10} = $temp*60;	
		}
	for($temp=0.1;$temp&lt;=9.1;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+200,200-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+200,200-${'y'.(($temp*10)+1)},$green);
	}
	
	imageline($image,200,200-(1*60),$x1+200,200-$y1,$green);<spamg>//connect y=0 to y=1</spamg>
	imagestring($image,2,300,50,'Y = e',$white);
	imagestring($image,2,210,5,'4',$white);
	imagestring($image,2,370,210,'4',$white);
	imagestring($image,2,205,200-(1*60),'1',$white);
	imagestring($image,2,205,200-(M_E*60),'2.71',$white);
	imagefilledarc($image,200,200-(M_E*60),5,5,0,360,$blue,IMG_ARC_PIE);
	imageline($image,200,200-(M_E*56),590,200-(M_E*56),$white);//cheat a bit
	imagefilledarc($image,200,200-(1*60),5,5,0,360,$blue,IMG_ARC_PIE);
	
<spamg>//call image</spamg>
	imagepng($image,"image/limitexponential.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/limitexponential.png">&lt;/center>';

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