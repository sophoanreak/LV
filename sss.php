<html>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Congruent Triangles >> SSS :</font></b><br>
					<p>
					<b>Objective: </b>Drawing SSS Triangles (AB=DE,AC=DF,BC=EF).
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
					<b><font style="font-size:1em"></font></b>
<?php
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

//makes congruent triangles
	//SSS AB=DE,AC=DF,BC=EF
	$point = array(
		50,100,
		50,300,
		175,300,
	);
	imagepolygon($image,$point,3,$green);
	
	$point1 = array(
		350,100,
		350,300,
		225,300,
	);
	imagepolygon($image,$point1,3,$green);
	
	//set point A,B,C
	imagestring($image,10,50,85,'A',$white);
		imageline($image,45,200,55,200,$grey);
	imagestring($image,10,50,300,'B',$white);
		imageline($image,110,305,110,295,$grey);
		imageline($image,115,305,115,295,$grey);
	imagestring($image,10,175,300,'C',$white);
		imageline($image,105,195,115,195,$grey);
		imageline($image,107,198,117,198,$grey);
		imageline($image,109,201,119,201,$grey);
		
	//set point D,E,F
	imagestring($image,10,350,85,'D',$white);
		imageline($image,345,200,355,200,$grey);
	imagestring($image,10,350,300,'E',$white);
		imageline($image,290,305,290,295,$grey);
		imageline($image,285,305,285,295,$grey);
	imagestring($image,10,225,300,'F',$white);
		imageline($image,285,195,295,195,$grey);
		imageline($image,283,198,293,198,$grey);
		imageline($image,281,201,291,201,$grey);

//call image
	imagepng($image,"pimage/sss.png");
	imagedestroy($image);
	
	echo '<center><img src="pimage/sss.png"></center>';
?>
					</td>
					<td width = 10%>
					
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
	
<spamg>//makes congruent triangles</spamg>
	<spamg>//SSS AB=DE,AC=DF,BC=EF</spamg>
	$point = array(
		50,100,
		50,300,
		175,300,
	);
	imagepolygon($image,$point,3,$green);
	
	$point1 = array(
		350,100,
		350,300,
		225,300,
	);
	imagepolygon($image,$point1,3,$green);
	
	<spamg>//set point A,B,C</spamg>
	imagestring($image,10,50,85,'A',$white);
		imageline($image,45,200,55,200,$grey);
	imagestring($image,10,50,300,'B',$white);
		imageline($image,110,305,110,295,$grey);
		imageline($image,115,305,115,295,$grey);
	imagestring($image,10,175,300,'C',$white);
		imageline($image,105,195,115,195,$grey);
		imageline($image,107,198,117,198,$grey);
		imageline($image,109,201,119,201,$grey);
		
	<spamg>//set point D,E,F</spamg>
	imagestring($image,10,350,85,'D',$white);
		imageline($image,345,200,355,200,$grey);
	imagestring($image,10,350,300,'E',$white);
		imageline($image,290,305,290,295,$grey);
		imageline($image,285,305,285,295,$grey);
	imagestring($image,10,225,300,'F',$white);
		imageline($image,285,195,295,195,$grey);
		imageline($image,283,198,293,198,$grey);
		imageline($image,281,201,291,201,$grey);
	
<spamg>//call image</spamg>
	imagepng($image,"pimage/sss.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="pimage/sss.png">&lt;/center>';

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