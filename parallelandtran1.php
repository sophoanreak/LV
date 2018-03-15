<html>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Parallel Lines and Transversal >> Parallel Lines and Transversal 1 :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Parrallel Lines and Transversal with PHP.
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

//makes parallel lines and transversal
	//line AB
	imageline($image,50,150,350,150,$green);
		imagefilledarc($image,50,150,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,50,155,"A(50,150)",$white);
		imagefilledarc($image,350,150,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,330,155,"B(350,150)",$white);
	//line CD
	imageline($image,50,250,350,250,$green);
		imagefilledarc($image,50,250,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,50,255,"C(50,250)",$white);
		imagefilledarc($image,350,250,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,330,255,"D(350,250)",$white);
	//Transversal Line EF
	imageline($image,50,100,350,300,$white);
		imagefilledarc($image,50,100,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,50,80,"E(50,100)",$white);
		imagefilledarc($image,350,300,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,330,305,"F(350,300)",$white);
	//point of intersection	between AB and EF
	$x1=50;$x2=350;$x3=50;$x4=350;
	$y1=150;$y2=150;$y3=100;$y4=300;
		//formula for point of interesection
		$px = (($x1*$y2 - $y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		$py = (($x1*$y2-$y1*$x2)*($y3-$y4)-($y1-$y2)*($x3*$y4-$y3*$x3))/(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		imagefilledarc($image,$px,$py,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,$px,$py-25,"(125,150)",$white);
	//point of intersection between CD and EF
	$x1=50;$x2=350;$x3=50;$x4=350;
	$y1=250;$y2=250;$y3=100;$y4=300;
		$px2 = (($x1*$y2 - $y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		$py2 = (($x1*$y2-$y1*$x2)*($y3-$y4)-($y1-$y2)*($x3*$y4-$y3*$x3))/(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		imagefilledarc($image,$px2,$py2,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,$px2,$py2-25,"(275,250)",$white);

//Angles of lines AB and EF
	$x1=125;$x2=350;$x3=$px;$x4=350;
	$y1=150;$y2=150;$y3=$py;$y4=300;
	$m1 = ($y2-$y1)/($x2-$x1);
	$m2 = ($y4-$y3)/($x4-$x3);
	$angle1 = rad2deg(atan(($m1-$m2)/(1+$m1*$m2)));
	imagefilledarc($image,$px,$py,30,30,0,$angle1*(-1),$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px,$py,30,30,180+($angle1*-1),360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$px,$py,30,30,180,180+$angle1*-1,$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px,$py,30,30,($angle1*-1),180,$grey,IMG_ARC_PIE);
		

//Angles of lines CD and EF
	$x1=$px2;$x2=350;$x3=$px2;$x4=350;
	$y1=$py2;$y2=250;$y3=$py2;$y4=300;
	$m1 = ($y2-$y1)/($x2-$x1);
	$m2 = ($y4-$y3)/($x4-$x3);
	$angle1 = rad2deg(atan(($m1-$m2)/(1+$m1*$m2)));
	imagefilledarc($image,$px2,$py2,30,30,0,$angle1*(-1),$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px2,$py2,30,30,180+($angle1*-1),360,$grey,IMG_ARC_PIE);
	imagefilledarc($image,$px2,$py2,30,30,180,180+$angle1*-1,$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px2,$py2,30,30,($angle1*-1),180,$grey,IMG_ARC_PIE);

	
//call image
	imagepng($image,"image/parallelandtran1.png");
	imagedestroy($image);
	
	echo '<center><img src="image/parallelandtran1.png"></center>';
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
	
<spamg>//makes parallel lines and transversal</spamg>
	<spamg>//line AB</spamg>
	imageline($image,50,150,350,150,$green);
		imagefilledarc($image,50,150,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,50,155,"A(50,150)",$white);
		imagefilledarc($image,350,150,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,330,155,"B(350,150)",$white);
	<spamg>//line CD</spamg>
	imageline($image,50,250,350,250,$green);
		imagefilledarc($image,50,250,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,50,255,"C(50,250)",$white);
		imagefilledarc($image,350,250,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,330,255,"D(350,250)",$white);
	<spamg>//Transversal Line EF</spamg>
	imageline($image,50,100,350,300,$white);
		imagefilledarc($image,50,100,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,50,80,"E(50,100)",$white);
		imagefilledarc($image,350,300,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,330,305,"F(350,300)",$white);
	<spamg>//point of intersection	between AB and EF</spamg>
	$x1=50;$x2=350;$x3=50;$x4=350;
	$y1=150;$y2=150;$y3=100;$y4=300;
		<spamg>//formula for point of interesection</spamg>
		$px = (($x1*$y2 - $y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/
		(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		$py = (($x1*$y2-$y1*$x2)*($y3-$y4)-($y1-$y2)*($x3*$y4-$y3*$x3))/
		(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		imagefilledarc($image,$px,$py,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,$px,$py-25,"(125,150)",$white);
	<spamg>//point of intersection between CD and EF</spamg>
	$x1=50;$x2=350;$x3=50;$x4=350;
	$y1=250;$y2=250;$y3=100;$y4=300;
		$px2 = (($x1*$y2 - $y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/
		(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		$py2 = (($x1*$y2-$y1*$x2)*($y3-$y4)-($y1-$y2)*($x3*$y4-$y3*$x3))/
		(($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
		imagefilledarc($image,$px2,$py2,5,5,0,360,$black,IMG_ARC_PIE);
		imagestring($image,2,$px2,$py2-25,"(275,250)",$white);

<spamg>//Angles of lines AB and EF</spamg>
	$x1=125;$x2=350;$x3=$px;$x4=350;
	$y1=150;$y2=150;$y3=$py;$y4=300;
	$m1 = ($y2-$y1)/($x2-$x1);
	$m2 = ($y4-$y3)/($x4-$x3);
	$angle1 = rad2deg(atan(($m1-$m2)/(1+$m1*$m2)));
	imagefilledarc($image,$px,$py,30,30,0,$angle1*(-1),$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px,$py,30,30,180+($angle1*-1),360,$red,IMG_ARC_PIE);
	imagefilledarc($image,$px,$py,30,30,180,180+$angle1*-1,$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px,$py,30,30,($angle1*-1),180,$red,IMG_ARC_PIE);
		

<spamg>//Angles of lines CD and EF</spamg>
	$x1=$px2;$x2=350;$x3=$px2;$x4=350;
	$y1=$py2;$y2=250;$y3=$py2;$y4=300;
	$m1 = ($y2-$y1)/($x2-$x1);
	$m2 = ($y4-$y3)/($x4-$x3);
	$angle1 = rad2deg(atan(($m1-$m2)/(1+$m1*$m2)));
	imagefilledarc($image,$px2,$py2,30,30,0,$angle1*(-1),$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px2,$py2,30,30,180+($angle1*-1),360,$red,IMG_ARC_PIE);
	imagefilledarc($image,$px2,$py2,30,30,180,180+$angle1*-1,$blue,IMG_ARC_PIE);
	imagefilledarc($image,$px2,$py2,30,30,($angle1*-1),180,$red,IMG_ARC_PIE);

	
<spamg>//call image</spamg>
	imagepng($image,"parallelandtran1.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="parallelandtran1.png">&lt;/center>';

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
