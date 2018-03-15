
<html>
<style>
#btngraph:hover{
	border:1px solid black;
	box-shadow: 3px 3px 6px rgba(0,1,1,0.75);
	background-color:gray;
}

</style>
	
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Special >> Calculator >> Graphing Calculator :</font></b><br>
					<p>
					<b>Objective :</b> To create graphing calculator on JavaScript since PHP will mostly reload the page. This only work on 1/x, x*x ,a *x , x+x, a + x, a-x , x-x; a is decimal number and x is a variable.
					</p>
					<p>
					<b>Note :</b> -3.5 &le; a &le; 3.5
					</p>
					</td>
				</tr>
				<tr>
					<td>
<center>
<form name = "inputf" method="post">
	<div style ="width:99%;margin-left:-5px;margin-bottom:5px;font-size:1.2em;padding:10px;color:white;background-color: rgb(43, 163, 212);text-align:left">
		<b>Equation :</b> <input type ="text" name ="txtinputandresult" size="32" style="padding:5px;border:0px;font-size:1.2em;">
		<input id="btngraph" type = "submit" value = "Generate" onclick="" style ="margin-left:5px;margin:top:0px;padding:7px; border:0px;font-size:1em;">
	</div>
	<div id="graph">
<?php
	
//create background
	$width = 600;
	$height = 600;
	$image = imagecreate($width,$height);
	
//Colors
	$grey = imagecolorallocate($image,200,200,200);
	$black = imagecolorallocate($image,0,0,0);
	$blackAlpha = imagecolorallocatealpha($image,0,0,0,50);
	$blackAlpha1 = imagecolorallocatealpha($image,0,0,0,70);
	$white = imagecolorallocate($image,255,255,255);
	$blueAlpha = imagecolorallocatealpha($image,43,163,212,0);
	$blue = imagecolorallocate($image,0,0,255);
	$red = imagecolorallocate($image,255,0,0);
	$green = imagecolorallocate($image,0,255,0);
	$yellow = imagecolorallocate($image,240,240,19);
	
//make the background black
	imagefill($image,0,0,$blueAlpha);
	
//add middle lines vertically and horizontally
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$black);
	imageline($image,$width/2,0,$width/2,$height,$black);

//loop for the white grid
	for($i=10;$i<600;$i+=5){ 
		imageline($image,298,$i,302,$i,$black);
	}
	for($i=5;$i<595;$i+=5){ 
		imageline($image,$i,298,$i,302,$black);
	}

//below 200s is to coordinate (x,y) at the center
//scale up 30 times
		
	function operator(){
		
			//keydivide
		if ($GLOBALS['keydivide'] == ""){
	
		}else{
			$GLOBALS['teststringa'] = explode("/",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]/$GLOBALS['teststringa'][1])*30;
		}
			
			//keymultiply
		if ($GLOBALS['keymultiply'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("*",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]*$GLOBALS['teststringa'][1])*30;
		}
		
			//keyadd
		if ($GLOBALS['keyaddition'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("+",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]+$GLOBALS['teststringa'][1])*30;
		}
		
			//keyadd
		if ($GLOBALS['keysub'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("-",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]-$GLOBALS['teststringa'][1])*30;
		}

	}//end operator()
	
	function operatorright(){
			
			//keydivide
		if ($GLOBALS['keydivide'] == ""){
	
		}else{
			$GLOBALS['teststringa'] = explode("/",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]/$GLOBALS['teststringa'][1])*30;
		}
		
			//keymultiply
		if ($GLOBALS['keymultiply'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("*",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]*$GLOBALS['teststringa'][1])*30;
		}
			
			//keyadd
		if ($GLOBALS['keyaddition'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("+",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]+$GLOBALS['teststringa'][1])*30;
		}
		
			//keyadd
		if ($GLOBALS['keysub'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("-",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]-$GLOBALS['teststringa'][1])*30;
		}

	}//end operatorright()
	
	if (isset($_REQUEST['txtinputandresult'])){
		$equation = $_REQUEST['txtinputandresult'];
		for($i=0;$i<strlen($equation);$i++){
			$equationa[$i] = $equation[$i];
		}
		$keydivide = array_search("/",$equationa);
		$keymultiply = array_search("*",$equationa);
		$keyaddition = array_search("+",$equationa);
		$keysub = array_search("-",$equationa);
	
	//left-side parabola
	for($tempminus=-0.1;$tempminus>=-3.1;$tempminus-=0.1){
		$teststring = str_replace("x","$tempminus",$equation);
		operator();
		${'m'.($tempminus*-10)} = $tempminus*30;	
	}
		
	for($tempminus=-0.1;$tempminus>=-3;$tempminus-=0.1){
		imageline($image,${'m'.($tempminus*-10)}+300,300-${'n'.($tempminus*-10)},
		${'m'.(($tempminus*-10)+1)}+300,300-${'n'.(($tempminus*-10)+1)},$green);
	}
	
	//right-side parabola
	for($temp=0.1;$temp<=3.1;$temp+=0.1){
		$teststring = str_replace("x","$temp",$equation);
		operatorright();
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp<=3;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+300,300-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+300,300-${'y'.(($temp*10)+1)},$green);
	}
	}//end isset
//call image
	imagepng($image,"image/graphingcalculator.png");
	imagedestroy($image);
	
	echo '<center><img src="image/graphingcalculator.png"></center>';

?>
	</div>
	
</form>
</center>

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
&lt;?php
	
<spamg>//create background</spamg>
	$width = 600;
	$height = 600;
	$image = imagecreate($width,$height);
	
<spamg>//Colors</spamg>
	$grey = imagecolorallocate($image,200,200,200);
	$black = imagecolorallocate($image,0,0,0);
	$blackAlpha = imagecolorallocatealpha($image,0,0,0,50);
	$blackAlpha1 = imagecolorallocatealpha($image,0,0,0,70);
	$white = imagecolorallocate($image,255,255,255);
	$blueAlpha = imagecolorallocatealpha($image,43,163,212,0);
	$blue = imagecolorallocate($image,0,0,255);
	$red = imagecolorallocate($image,255,0,0);
	$green = imagecolorallocate($image,0,255,0);
	$yellow = imagecolorallocate($image,240,240,19);
	
<spamg>//make the background black</spamg>
	imagefill($image,0,0,$blueAlpha);
	
<spamg>//add middle lines vertically and horizontally</spamg>
	//imagearc($image, 100, 100, 200, 200,  45, 360, $white);
	imageline($image,0,$height/2,$width,$height/2,$black);
	imageline($image,$width/2,0,$width/2,$height,$black);

<spamg>//loop for the white grid</spamg>
	for($i=10;$i&lt;600;$i+=5){ 
		imageline($image,298,$i,302,$i,$black);
	}
	for($i=5;$i&lt;595;$i+=5){ 
		imageline($image,$i,298,$i,302,$black);
	}

<spamg>//below 200s is to coordinate (x,y) at the center
//scale up 30 times</spamg>
		
	function operator(){
		
			<spamg>//keydivide</spamg>
		if ($GLOBALS['keydivide'] == ""){
	
		}else{
			$GLOBALS['teststringa'] = explode("/",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]/
			$GLOBALS['teststringa'][1])*30;
		}
			
			<spamg>//keymultiply</spamg>
		if ($GLOBALS['keymultiply'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("*",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]*
			$GLOBALS['teststringa'][1])*30;
		}
		
			<spamg>//keyadd</spamg>
		if ($GLOBALS['keyaddition'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("+",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]+
			$GLOBALS['teststringa'][1])*30;
		}
		
			<spamg>//keyadd</spamg>
		if ($GLOBALS['keysub'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("-",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'n'.($GLOBALS['tempminus']*-10)} = ($GLOBALS['teststringa'][0]-
			$GLOBALS['teststringa'][1])*30;
		}

	}<spamg>//end operator()</spamg>
	
	function operatorright(){
			
			<spamg>//keydivide</spamg>
		if ($GLOBALS['keydivide'] == ""){
	
		}else{
			$GLOBALS['teststringa'] = explode("/",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]/
			$GLOBALS['teststringa'][1])*30;
		}
		
			<spamg>//keymultiply</spamg>
		if ($GLOBALS['keymultiply'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("*",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]*
			$GLOBALS['teststringa'][1])*30;
		}
			
			<spamg>//keyadd</spamg>
		if ($GLOBALS['keyaddition'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("+",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]+
			$GLOBALS['teststringa'][1])*30;
		}
		
			<spamg>//keyadd</spamg>
		if ($GLOBALS['keysub'] == ""){
			
		}else{
			$GLOBALS['teststringa'] = explode("-",$GLOBALS['teststring']);
			$GLOBALS['teststringa'][0] = floatval($GLOBALS['teststringa'][0]); 
			$GLOBALS['teststringa'][1] = floatval($GLOBALS['teststringa'][1]);
			$GLOBALS{'y'.($GLOBALS['temp']*10)} = ($GLOBALS['teststringa'][0]-
			$GLOBALS['teststringa'][1])*30;
		}

	}<spamg>//end operatorright()</spamg>
	
	if (isset($_REQUEST['txtinputandresult'])){
		$equation = $_REQUEST['txtinputandresult'];
		for($i=0;$i&lt;strlen($equation);$i++){
			$equationa[$i] = $equation[$i];
		}
		$keydivide = array_search("/",$equationa);
		$keymultiply = array_search("*",$equationa);
		$keyaddition = array_search("+",$equationa);
		$keysub = array_search("-",$equationa);
	
	<spamg>//left-side parabola</spamg>
	for($tempminus=-0.1;$tempminus>=-3.1;$tempminus-=0.1){
		$teststring = str_replace("x","$tempminus",$equation);
		operator();
		${'m'.($tempminus*-10)} = $tempminus*30;	
	}
		
	for($tempminus=-0.1;$tempminus>=-3;$tempminus-=0.1){
		imageline($image,${'m'.($tempminus*-10)}+300,300-${'n'.($tempminus*-10)},
		${'m'.(($tempminus*-10)+1)}+300,300-${'n'.(($tempminus*-10)+1)},$green);
	}
	
	<spamg>//right-side parabola</spamg>
	for($temp=0.1;$temp&lt;=3.1;$temp+=0.1){
		$teststring = str_replace("x","$temp",$equation);
		operatorright();
		${'x'.$temp*10} = $temp*30;	
		}
	for($temp=0.1;$temp&lt;=3;$temp+=0.1){
		imageline($image,${'x'.($temp*10)}+300,300-${'y'.($temp*10)},
		${'x'.(($temp*10)+1)}+300,300-${'y'.(($temp*10)+1)},$green);
	}
	}<spamg>//end isset</spamg>
	
<spamg>//call image</spamg>
	imagepng($image,"image/graphingcalculator.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="image/graphingcalculator.png">&lt;/center>';
?>
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
							<input type ="submit" name="btnTryit" form = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled> Sorry, for the inconvenience!
							</form>
					</td>
				</tr>
			</table>

<script>

	//focus on txtinputandresult
	document.inputf.txtinputandresult.focus();
</script>
</html>










