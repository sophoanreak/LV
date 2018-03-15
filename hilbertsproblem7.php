
<html>
	
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Special Math >> Hilbert's Problems >> Problem No.7 :</font></b><br>
					<p>
					<b>Objective :</b> To do and understand Hilbert's Problem no.7. 
					</p>
					<p>
					<b>Questions :</b><br>- In an isosceles triangle, if the ratio of the base angle to the angle at the vertex is algebraic but not rational, is then the ratio between base and side always transcendental?<br>
					- Is a<sup>b</sup> always transcendental, for algebraic a &#8713;{0,1} and irrational algebraic b?
					</p>
					</td>
				</tr>
				<tr>
					<td>
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

//makes grid
	for ($i=5;$i<=650;$i+=5){
		imageline($image,$i,0,$i,650,$blackAlpha1);
	}
	for ($i=0;$i<=650;$i+=5){
		imageline($image,0,$i,650,$i,$blackAlpha1);
	}
	
//isosceles triangle
	$x=0;$y=0;
	$x=200+$x;$y=200-$y;
	$point = array(
		$x,$y-(+80),
		$x-80,$y-(-100),
		$x+80,$y-(-100)
	);
	imagepolygon($image,$point,3,$green);
	
	//string
	imagestring($image,3,$x-70,$y-185,'Isosceles Triangle',$white);
	imagestring($image,2,$x,$y-95,'A(0,80)',$white);
	imagestring($image,2,$x-80,$y+100,'B(-80,-100)',$white);
	imagestring($image,2,$x+80,$y+100,'C(80,-100)',$white);
	imagefilledarc($image,$x,$y-80,5,5,0,360,$blue,IMG_ARC_PIE);
	imagefilledarc($image,$x-80,$y+100,5,5,0,360,$blue,IMG_ARC_PIE);
	imagefilledarc($image,$x+80,$y+100,5,5,0,360,$blue,IMG_ARC_PIE);
	
	//distance between two points
		//AC
	$x1=0;$y1=+80;
	$x2=80;$y2=-100;
	$ab = sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
	$ab."<br>";
		//AB
	$x1=0;$y1=+80;
	$x2=-80;$y2=-100;
	$ab = sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
	echo "|AB| = |AC| = ";echo number_format($ab,2);
	
	//string
		//AC
	$x1=0;$y1=+80;
	$x1=$x1+200;$y1=200-$y1;
	$x2=80;$y2=-100;
	$x2=$x2+200;$y2=200-$y2;
	imagefilledarc($image,(($x1+$x2)/2),(($y1+$y2)/2),5,5,0,360,$blue,IMG_ARC_PIE);
	imageline($image,(($x1+$x2)/2)-5,(($y1+$y2)/2),(($x1+$x2)/2)+5,(($y1+$y2)/2),$white);
		//AB
	$x1=0;$y1=+80;
	$x1=$x1+200;$y1=200-$y1;
	$x2=-80;$y2=-100;
	$x2=$x2+200;$y2=200-$y2;
	imagefilledarc($image,($x1+$x2)/2,($y1+$y2)/2,5,5,0,360,$blue,IMG_ARC_PIE);
	imageline($image,(($x1+$x2)/2)-5,(($y1+$y2)/2),(($x1+$x2)/2)+5,(($y1+$y2)/2),$white);
	
	//angles
		//AB&ang;AC
	$x1=-80;$x2=0;$x3=-80;$x4=80;
	$y1=100;$y2=-80;$y3=100;$y4=100;
	$m1 = ($y2-$y1)/($x2-$x1);
	$m2 = ($y4-$y3)/($x4-$x3);
	$angle1 = rad2deg(atan(($m1-$m2)/(1+$m1*$m2)));
	imagefilledarc($image,120,300,50,50,360-$angle1*(-1),360,$white,IMG_ARC_PIE);
		//BA&ang;BC
	$x1=80;$x2=-80;$x3=80;$x4=0;
	$y1=-100;$y2=-100;$y3=-100;$y4=80;
	$m1 = ($y2-$y1)/($x2-$x1);
	$m2 = ($y4-$y3)/($x4-$x3);
	echo "<br> AB &ang; AC = BA &ang; BC = ";
	$angle2 = rad2deg(atan(($m1-$m2)/(1+$m1*$m2)));
	echo number_format($angle2,2);
	echo "<br>";
	imagefilledarc($image,280,300,50,50,180,180+$angle2,$white,IMG_ARC_PIE);
	
	
//call image
	imagepng($image,"image/hilbertisocelestriangle.png");
	imagedestroy($image);
	
	echo '<center><img src="image/hilbertisocelestriangle.png"></center>';

//

?>

					</td>
				</tr>

			</table>

			<table width = 100%
			style="padding-bot: 5px;
			background-color: #f1f1f1;
			color: black;
			border: 0px solid #98bf21;
			tom: 4px;">
				<tr>
					<td style="font-size:1em"> 
					<b><font style="font-size:1em">Code :</font></b> 
<pre style = "font-family:'Time New Roman';">
<spamb>&lt;html></spamb> 


	
<spamb>&lt;/html></spamb> 
</pre>	
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
							<input type ="submit" name="btnTryit" form = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>
			
</html>










