<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Graphing >> Slopes :</font></b><br>
					<p>
					Objective: Finding Slope of a line<br>
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
	/*$gdInfoArray = gd_info();
	$version = $gdInfoArray["GD Version"];
	echo "Your GD Version is: ".$version;
	echo "<br>";*/
	echo "line1 {x1 = -20, y1 = -40; x2 = 100, y2 = 50}";
	echo "<br>";
	echo "line2 {x1 = -30, y1 = 40; x2 = -150, y2 = 150}";
	echo "<br><br>";
	//generate random string using md5
	$md5Random = md5(rand(0,999));
	//Trim from 15 to 5
	$securityCode = substr($md5Random,15,5);
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
	//add randomly generated string in white to the image
	//ImageString($image, 3, 30, 3, $securityCode, $white);
	//image rectangle
	//ImageRectangle($image,4,4,$width-4,$height-4,$grey);
	/*$point = array(
		0,0,
		100,200,
		300,200,
	);
	imagepolygon($image,$point,3,$grey);
	*/
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
	$x1;$x2;$y1;$y2;
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
	}
	//call function line
	line(-20,-40,100,50);
	line(-30,40,-150,150);
	
	imagepng($image,"image/slopetest1.png");
	imagedestroy($image);
	
	echo '<center><img src="image/slopetest1.png"></center>';
	
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

function slope($x1,$y1,$x2,$y2){
		$x1;$x2;$y1;$y2;
		echo $result = ($y2-$y1)/($x2-$x1);
}
	echo "line1 {x1 = -20, y1 = -40; x2 = 100, y2 = 50}"; 
	echo " Answer: ";
	slope(-20,-40,100,50);
	echo "\n";
	echo "\n";
	echo "line2 {x1 = -30, y1 = 40; x2 = -150, y2 = 150}";
	echo " Answer: ";
	slope(-30,40,-150,150);
	
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>

			
</html>

