<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Graphing >> Parrallel and Perpendicular Lines:</font></b><br>
					<p>
					Objective: Drawing Parallel and Perpendicular Lines. <br>
					<b><font style="font-size:1em">Examples :line1 {x1 = -120, y1 = -100; x2 = 0, y2 = 90}</font></b>
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
					<td valign='top'>
					
	<?php
//scene no.1
	echo "<b>Parallel line below </b>";

	//set image width and height
	$width = 300;
	$height = 300;
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
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);
	
	//loop for the grid
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
	
	//making x and y coordinate
	function line($x1,$y1,$x2,$y2){
	$x1;$x2;$y1;$y2;
		$x1=$x1+150;
		$y1=150-$y1;
		$x2=$x2+150;
		$y2=150-$y2;
	
	//insert value of x1 and y1 on the graph
	$xy1 = '('.($x1-150).','.(150-$y1).')';
	imagestring($GLOBALS['image'],2,$x1,$y1,$xy1,$GLOBALS['green']);
	
	//insert value of x2 and y2 on the graph
	$xy2 = '('.($x2-150).','.(150-$y2).')';
	imagestring($GLOBALS['image'],2,$x2,$y2,$xy2,$GLOBALS['green']);
	
	imagedashedline($GLOBALS['image'],$x1,$y1,$x1,150,$GLOBALS['grey']);
	imageline($GLOBALS['image'],$x1,$y1,150,$y1,$GLOBALS['grey']);
	
	imagedashedline($GLOBALS['image'],$x2,150,$x2,$y2,$GLOBALS['grey']);
	imageline($GLOBALS['image'],150,$y2,$x2,$y2,$GLOBALS['grey']);
	
	imageline($GLOBALS['image'],$x1,$y1,$x2,$y2,$GLOBALS['green']);
	}
	
	function parrallel($x1,$y1,$x2,$y2){
		//Call line
		line($x1,$y1,$x2,$y2);
		line($x1-100,$y1,$x2-100,$y2);
	}
	//call function parallel
	parrallel(-20,-100,100,90);
	
	imagepng($image,"image/parrallelline1.png");
	imagedestroy($image);
	
	echo '<center><img src="image/parrallelline1.png"></center>';
	
	function slope($x1,$y1,$x2,$y2){
		$x1;$x2;$y1;$y2;
		echo $result = ($y2-$y1)/($x2-$x1);
	}
	
?>
					
					</td>
					<td valign='top'>

<?php

//scene no.2
	echo "<b>Perpendicular Line below : </b>";
	$width = 300;
	$height = 300;
	
//colors
	$imageP = imagecreate($width,$height);
	$grey = imagecolorallocate($imageP,204,204,204);
	$white = imagecolorallocate($imageP,255,255,255);
	$blackAlpha = imagecolorallocatealpha($imageP,0,0,0,50);
	$green = imagecolorallocate($imageP,0,255,0);
	
//fill imagep as blackalpha
	imagefill($imageP,0,0,$blackAlpha);
	imageline($imageP,0,$height/2,$width,$height/2,$grey);
	imageline($imageP,$width/2,0,$width/2,$height,$grey);
	
	//loop for the grid
	for($i=10;$i<300;$i+=5){ 
		imageline($imageP,148,$i,152,$i,$grey);
	}
	for($i=5;$i<295;$i+=5){ 
		imageline($imageP,$i,148,$i,152,$grey);
	}
	
	//making an arrow head for X and Y coordinate
	imageline($imageP,145,5,150,0,$white);
	imageline($imageP,155,5,150,0,$white);
	imageline($imageP,295,145,300,150,$white);
	imageline($imageP,295,155,300,150,$white);
	
	//create function line
	function lineP($x1,$y1,$x2,$y2){
	$x1;$x2;$y1;$y2;
		$x1=$x1+150;
		$y1=150-$y1;
		$x2=$x2+150;
		$y2=150-$y2;
		
	//insert value of x1 and y1 on the graph
	$xy1 = '('.($x1-150).','.(150-$y1).')';
	imagestring($GLOBALS['imageP'],2,$x1,$y1,$xy1,$GLOBALS['green']);
	
	//insert value of x2 and y2 on the graph
	$xy2 = '('.($x2-150).','.(150-$y2).')';
	imagestring($GLOBALS['imageP'],2,$x2,$y2,$xy2,$GLOBALS['green']);
	
	imagedashedline($GLOBALS['imageP'],$x1,$y1,$x1,150,$GLOBALS['grey']);
	imageline($GLOBALS['imageP'],$x1,$y1,150,$y1,$GLOBALS['grey']);
	
	imagedashedline($GLOBALS['imageP'],$x2,150,$x2,$y2,$GLOBALS['grey']);
	imageline($GLOBALS['imageP'],150,$y2,$x2,$y2,$GLOBALS['grey']);
	
	imageline($GLOBALS['imageP'],$x1,$y1,$x2,$y2,$GLOBALS['green']);
	}
	
	function perpenLine($x1,$y1,$x2,$y2){
		lineP($y1,-$x1,$y2,-$x2);
	}
	lineP(-90,-90,80,80);
	perpenLine(-90,-90,80,80);
	
	imagepng($imageP,"image/perpendicularlines.png");
	imagedestroy($imageP);
	echo '<center><img src="image/perpendicularlines.png"></center>';
	//slope(-50,-100,100,100);
	//slope(-100,50,100,-100);
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
<spamb>&lt;html></spamb>
							<br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
<spamr>//Parrallel line</spamr>
	echo "&lt;b>Parallel line below &lt;/b>";

	<spamg>//set image width and height</spamg>
	$width = 300;
	$height = 300;
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
	imageline($image,0,$height/2,$width,$height/2,$grey);
	imageline($image,$width/2,0,$width/2,$height,$grey);
	
	<spamg>//loop for the grid</spamg>
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
	
	<spamg>//making x and y coordinate</spamg>
	function line($x1,$y1,$x2,$y2){
	$x1;$x2;$y1;$y2;
		$x1=$x1+150;
		$y1=150-$y1;
		$x2=$x2+150;
		$y2=150-$y2;
	
	<spamg>//insert value of x1 and y1 on the graph</spamg>
	$xy1 = '('.($x1-150).','.(150-$y1).')';
	imagestring($GLOBALS['image'],2,$x1,$y1,$xy1,$GLOBALS['green']);
	
	<spamg>//insert value of x2 and y2 on the graph</spamg>
	$xy2 = '('.($x2-150).','.(150-$y2).')';
	imagestring($GLOBALS['image'],2,$x2,$y2,$xy2,$GLOBALS['green']);
	
	imagedashedline($GLOBALS['image'],$x1,$y1,$x1,150,$GLOBALS['grey']);
	imageline($GLOBALS['image'],$x1,$y1,150,$y1,$GLOBALS['grey']);
	
	imagedashedline($GLOBALS['image'],$x2,150,$x2,$y2,$GLOBALS['grey']);
	imageline($GLOBALS['image'],150,$y2,$x2,$y2,$GLOBALS['grey']);
	
	imageline($GLOBALS['image'],$x1,$y1,$x2,$y2,$GLOBALS['green']);
	}
	
	function parrallel($x1,$y1,$x2,$y2){
		<spamg>//Call line</spamg>
		line($x1,$y1,$x2,$y2);
		line($x1-100,$y1,$x2-100,$y2);
	}
	
	<spamg>//call function parallel</spamg>
	parrallel(-20,-100,100,90);
	
	imagepng($image,"image/parrallelline1.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/parrallelline1.png">&lt;/center>';
	
	function slope($x1,$y1,$x2,$y2){
		$x1;$x2;$y1;$y2;
		echo $result = ($y2-$y1)/($x2-$x1);
	}
	
<spamr>//Perpendicular line</spamr>
	echo "&lt;b>Perpendicular Line below : &lt;/b>";
	$width = 300;
	$height = 300;
	
<spamg>//colors</spamg>
	$imageP = imagecreate($width,$height);
	$grey = imagecolorallocate($imageP,204,204,204);
	$white = imagecolorallocate($imageP,255,255,255);
	$blackAlpha = imagecolorallocatealpha($imageP,0,0,0,50);
	$green = imagecolorallocate($imageP,0,255,0);
	
<spamg>//fill imagep as blackalpha</spamg>
	imagefill($imageP,0,0,$blackAlpha);
	imageline($imageP,0,$height/2,$width,$height/2,$grey);
	imageline($imageP,$width/2,0,$width/2,$height,$grey);
	
	<spamg>//loop for the grid</spamg>
	for($i=10;$i&lt;300;$i+=5){ 
		imageline($imageP,148,$i,152,$i,$grey);
	}
	for($i=5;$i&lt;295;$i+=5){ 
		imageline($imageP,$i,148,$i,152,$grey);
	}
	
	<spamg>//making an arrow head for X and Y coordinate</spamg>
	imageline($imageP,145,5,150,0,$white);
	imageline($imageP,155,5,150,0,$white);
	imageline($imageP,295,145,300,150,$white);
	imageline($imageP,295,155,300,150,$white);
	
	<spamg>//create function line</spamg>
	function lineP($x1,$y1,$x2,$y2){
	$x1;$x2;$y1;$y2;
		$x1=$x1+150;
		$y1=150-$y1;
		$x2=$x2+150;
		$y2=150-$y2;
		
	<spamg>//insert value of x1 and y1 on the graph/</spamg>
	$xy1 = '('.($x1-150).','.(150-$y1).')';
	imagestring($GLOBALS['imageP'],2,$x1,$y1,$xy1,$GLOBALS['green']);
	
	<spamg>//insert value of x2 and y2 on the graph</spamg>
	$xy2 = '('.($x2-150).','.(150-$y2).')';
	imagestring($GLOBALS['imageP'],2,$x2,$y2,$xy2,$GLOBALS['green']);
	
	imagedashedline($GLOBALS['imageP'],$x1,$y1,$x1,150,$GLOBALS['grey']);
	imageline($GLOBALS['imageP'],$x1,$y1,150,$y1,$GLOBALS['grey']);
	
	imagedashedline($GLOBALS['imageP'],$x2,150,$x2,$y2,$GLOBALS['grey']);
	imageline($GLOBALS['imageP'],150,$y2,$x2,$y2,$GLOBALS['grey']);
	
	imageline($GLOBALS['imageP'],$x1,$y1,$x2,$y2,$GLOBALS['green']);
	}
	
	function perpenLine($x1,$y1,$x2,$y2){
		lineP($y1,-$x1,$y2,-$x2);
	}
	lineP(-90,-90,80,80);
	perpenLine(-90,-90,80,80);
	
	imagepng($imageP,"image/perpendicularlines.png");
	imagedestroy($imageP);
	echo '&lt;center>&lt;img src="image/perpendicularlines.png">&lt;/center>';
	
</pre>
<spamb>?></spamb> <br>
<spamb>&lt;/html></spamb>
						</P>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50% valign="top">
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

