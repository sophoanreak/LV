<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> System of Equation >> Graphing Equations :</font></b><br>
					<p>
					Objective: Drawing line with PHP <br>
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
//the graph is design to fit 400 pixels only
	echo "y = 1/2x - 4, if x1 = -100 ; x2 = 100"; 
	echo "<br>";
	echo "<h4>Parrallel line below shows differences of 100px of x cordination.</h4>";
//set image width and height
	$width = 400;
	$height = 400;
	$image = imagecreate($width,$height);
//Three colors, white, black and grey
	$grey = imagecolorallocate($image,204,204,204);
	$black = imagecolorallocate($image,0,0,0);
	$blackAlpha = imagecolorallocatealpha($image,0,0,0,50);
	$white = imagecolorallocate($image,255,255,255);
	$blue = imagecolorallocate($image,0,0,255);
	$red = imagecolorallocate($image,255,0,0);
	$green = imagecolorallocate($image,0,255,0);
	$yellow = imagecolorallocate($image,240,240,19);
//make the background black
	imagefill($image,0,0,$blackAlpha);

//add middle lines vertically and horizontally
//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);
//loop for the grid
	for($i=10;$i<400;$i+=5){ 
		imageline($image,198,$i,202,$i,$grey);
	}
	for($i=5;$i<395;$i+=5){ 
		imageline($image,$i,198,$i,202,$grey);
	}
//making an arrow head for X and Y cordinate
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
//making x and y cordinate
	function line($x1,$y1,$x2,$y2){

		$n1 = $x1*2;
		$m1 = $y1*2;
		$n2 = $x2*2;
		$m2 = $y2*2;

		$n1=$n1+200;
		$m1=200-$m1;
		$n2=$n2+200;
		$m2=200-$m2;
		
		$x1=$x1+200;
		$y1=200-$y1;
		$x2=$x2+200;
		$y2=200-$y2;
//insert value of x1 and y1 on the graph
	$xy1 = '('.($x1-200).','.(200-$y1).')';
	imagestring($GLOBALS['image'],10,$x1,$y1,$xy1,$GLOBALS['green']);
//insert value of x2 and y2 on the graph
	$xy2 = '('.($x2-200).','.(200-$y2).')';
	imagestring($GLOBALS['image'],10,$x2,$y2,$xy2,$GLOBALS['green']);
	
	imagedashedline($GLOBALS['image'],$x1,$y1,$x1,200,$GLOBALS['grey']);
	imageline($GLOBALS['image'],$x1,$y1,200,$y1,$GLOBALS['grey']);
	
	imagedashedline($GLOBALS['image'],$x2,200,$x2,$y2,$GLOBALS['grey']);
	imageline($GLOBALS['image'],200,$y2,$x2,$y2,$GLOBALS['grey']);

	imageline($GLOBALS['image'],$x1,$y1,$x2,$y2,$GLOBALS['green']);
//-5 cos of y = ax - 5
	imageline($GLOBALS['image'],$n1,$m1-5,$n2,$m2-5,$GLOBALS['green']);
	}
	
	
//Finding y1 and y2 by substituting fixed number of x1 and x2
//y = 1/2x - 5
	$x1 = -98; $x2 = 90;
	for($i=1;$i<=2;$i++){
		${'y'.$i} = ${'x'.$i} / 2 - 5;
	}

	line($x1,$y1,$x2,$y2);

//call image
	imagepng($image,"image/graphinge1.png");
	imagedestroy($image);
	echo '<center><img src="image/graphinge1.png"></center>';
	
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

	//the graph is design to fit 400 pixels only
	echo "y = 1/2x - 4, if x1 = -100 ; x2 = 100"; 
	echo "&lt;br>";
	echo "&lt;h4>Parrallel line below shows differences of 100px of x cordination.&lt;/h4>";
	
<spamg>//set image width and height</spamg>
	$width = 400;
	$height = 400;
	$image = imagecreate($width,$height);
	
<spamg>//Three colors, white, black and grey</spamg>
	$grey = imagecolorallocate($image,204,204,204);
	$black = imagecolorallocate($image,0,0,0);
	$blackAlpha = imagecolorallocatealpha($image,0,0,0,50);
	$white = imagecolorallocate($image,255,255,255);
	$blue = imagecolorallocate($image,0,0,255);
	$red = imagecolorallocate($image,255,0,0);
	$green = imagecolorallocate($image,0,255,0);
	$yellow = imagecolorallocate($image,240,240,19);
	
<spamg>//make the background black</spamg>
	imagefill($image,0,0,$blackAlpha);

<spamg>//add middle lines vertically and horizontally</spamg>
<spamg>//imagearc($image, 100, 100, 200, 200,  45, 360, $white);</spamg>
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);
	
<spamg>//loop for the grid</spamg>
	for($i=10;$i&lt;400;$i+=5){ 
		imageline($image,198,$i,202,$i,$grey);
	}
	for($i=5;$i&lt;395;$i+=5){ 
		imageline($image,$i,198,$i,202,$grey);
	}
	
<spamg>//making an arrow head for X and Y cordinate</spamg>
	imageline($image,195,5,200,0,$white);
	imageline($image,205,5,200,0,$white);
	imageline($image,395,195,400,200,$white);
	imageline($image,395,205,400,200,$white);
	
<spamg>//making x and y cordinate</spamg>
	function line($x1,$y1,$x2,$y2){

		$n1 = $x1*2;
		$m1 = $y1*2;
		$n2 = $x2*2;
		$m2 = $y2*2;

		$n1=$n1+200;
		$m1=200-$m1;
		$n2=$n2+200;
		$m2=200-$m2;
		
		$x1=$x1+200;
		$y1=200-$y1;
		$x2=$x2+200;
		$y2=200-$y2;
		
<spamg>//insert value of x1 and y1 on the graph</spamg>
	$xy1 = '('.($x1-200).','.(200-$y1).')';
	imagestring($GLOBALS['image'],10,$x1,$y1,$xy1,$GLOBALS['green']);
	
<spamg>//insert value of x2 and y2 on the graph</spamg>
	$xy2 = '('.($x2-200).','.(200-$y2).')';
	imagestring($GLOBALS['image'],10,$x2,$y2,$xy2,$GLOBALS['green']);
	
	imagedashedline($GLOBALS['image'],$x1,$y1,$x1,200,$GLOBALS['grey']);
	imageline($GLOBALS['image'],$x1,$y1,200,$y1,$GLOBALS['grey']);
	
	imagedashedline($GLOBALS['image'],$x2,200,$x2,$y2,$GLOBALS['grey']);
	imageline($GLOBALS['image'],200,$y2,$x2,$y2,$GLOBALS['grey']);

	imageline($GLOBALS['image'],$x1,$y1,$x2,$y2,$GLOBALS['green']);
	
<spamg>//-5 cos of y = ax - 5</spamg>
	imageline($GLOBALS['image'],$n1,$m1-5,$n2,$m2-5,$GLOBALS['green']);
	}
	
<spamr>//Finding y1 and y2 by substituting fixed number of x1 and x2
//y = 1/2x - 5</spamr>
	$x1 = -98; $x2 = 90;
	for($i=1;$i&lt;=2;$i++){
		${'y'.$i} = ${'x'.$i} / 2 - 5;
	}

	line($x1,$y1,$x2,$y2);

<spamg>//call image</spamg>
	imagepng($image,"graphinge1.png");
	imagedestroy($image);
	echo '&lt;center>&lt;img src="graphinge1.png">&lt;/center>';
	
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled>
							</form>It is disabled. Sorry for the inconvience!
					</td>
				</tr>
			</table>

			
</html>

