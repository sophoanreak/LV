<html>

			<table width = 659px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Inequality >> Solve and Graph Inequality :</font></b><br>
					<p>
					Objective:  Graphing inequality on PHP<br>
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
	echo " x <=3";
	echo "<br>";
	echo "<h4>Parrallel line below shows differences of 100px of x cordination.</h4>";
//set image width and height
	$width = 400;
	$height = 200;
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
//loop for the grid
	for($i=0;$i<395;$i+=10){ 
		imageline($image,$i,98,$i,102,$grey);
	}
	imageline($image,200,97,200,103,$green);
//making an arrow head for X and Y cordinate
	imageline($image,395,95,400,100,$white);
	imageline($image,395,105,400,100,$white);
//Processing value of inequality
	$zero = "0";
	imagestring($image,10,196,109,$zero,$green);
//bigger and equal
	function inequalityE($x){
		$x = 200 + ($x * 10) ;
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,400,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x+10;$i<395;$i+=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
//bigger but not equal too
	function inequality($x){
		$x = 200 + ($x * 10) +10 ;
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,400,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x+10;$i<395;$i+=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
//less than and equal too
	function inequalityLessE($x){
		$x = 200 + ($x * 10);
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,0,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x-10;$i>=5;$i-=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
//less than and not equal too
	function inequalityLess($x){
		$x = 200 + ($x * 10) -10;
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,0,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x-10;$i>=5;$i-=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
//call back function inequalityLess
	inequalityLess(3);
//call image
	imagepng($image,"image/solveinequality.png");
	imagedestroy($image);
	
	echo '<center><img src="image/solveinequality.png"></center>';
	
?>				
					
					</td>
					<td width = 10%>
					
					</td>
				</tr>
			</table>
			<table width = 659px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid: #98bf21;">
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
	echo " x &lt;=3";
	echo "&lt;?br>";
	echo "&lt;?h4>Parallel line below shows differences of 100px of x coordination.&lt;?/h4>";
	
<spamg>//set image width and height</spamg>
	$width = 400;
	$height = 200;
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
	
<spamg>//loop for the grid</spamg>
	for($i=0;$i&lt;?395;$i+=10){ 
		imageline($image,$i,98,$i,102,$grey);
	}
	imageline($image,200,97,200,103,$green);
	
<spamg>//making an arrow head for X and Y coordinate</spamg>
	imageline($image,395,95,400,100,$white);
	imageline($image,395,105,400,100,$white);
	
<spamg>//Processing value of inequality</spamg>
	$zero = "0";
	imagestring($image,10,196,109,$zero,$green);
	
<spamr>//bigger and equal</spamr>
	function inequalityE($x){
		$x = 200 + ($x * 10) ;
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,400,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x+10;$i&lt;?395;$i+=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
<spamr>//bigger but not equal too</spamr>
	function inequality($x){
		$x = 200 + ($x * 10) +10 ;
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,400,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x+10;$i&lt;?395;$i+=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
<spamr>//less than and equal too</spamr>
	function inequalityLessE($x){
		$x = 200 + ($x * 10);
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,0,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x-10;$i>=5;$i-=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
<spamr>//less than and not equal too</spamr>
	function inequalityLess($x){
		$x = 200 + ($x * 10) -10;
		imageline($GLOBALS['image'],$x,93,$x,107,$GLOBALS['green']);
		imageline($GLOBALS['image'],$x,100,0,100,$GLOBALS['green']);
		imagestring($GLOBALS['image'],10,$x-4,109,($x-200)/10,$GLOBALS['green']);
		for($i=$x-10;$i>=5;$i-=10){ 
			imageline($GLOBALS['image'],$i-3,95,$i,105,$GLOBALS['green']);
		}
		
	}
	
<spamg>//call back function inequalityLess</spamg>
	inequalityLess(3);
	
<spamg>//call image</spamg>
	imagepng($image,"image/solveintest2.png");
	imagedestroy($image);
	echo '&lt;?center>&lt;?img src="image/solveintest2.png">&lt;?/center>';
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

