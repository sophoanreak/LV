
<html>
<style>
.flip3d{
	width:140px;
	height:160px;
	margin:30px;
	float:left;
}

.flip3d >.front{
	text-align:center;
	font-size:3em;
	color:white;
	position:absolute;
	-webkit-transform:perspective( 600px ) rotateY( 0deg );
	transform:perspective(600px) rotateY(0deg);
	background-color:#e38d27; width:140px;height:160px;border-radius:2px;
	background-position:bottom left;
	background-image:url('buttons/button_bg.png');
	-webkit-box-shadow: 5px 5px #888;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition:transform .5s linear 0s;
	transition:-webkit-transform .5s linear 0s;
}

.flip3d >.back{
	vertical-align:text-bottom;
	text-align:center;
	font-size:3em;
	color:white;
	position:absolute;
	-webkit-transform:perspective( 600px ) rotateY( 180deg );
	transform:perspective( 600px ) rotateY( 180deg );
	background-color:#80BFFF; width:140px;height:160px;border-radius:2px;
	background-position:bottom left;
	background-image:url('buttons/button_bg.png');
	-webkit-box-shadow: 5px 5px #888;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition:-webkit-transform .5s linear 0s;
	transition:transform .5s linear 0s;
}

.flip3d:hover >.front{
	-webkit-transform:perspective( 600px ) rotateY( -180deg );
	transform:perspective( 600px ) rotateY( -180deg );
}
.flip3d:hover >.back{
	-webkit-transform:perspective( 600px ) rotateY( 0deg );
	transform:perspective( 600px ) rotateY( 0deg );
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
					<b><font style="font-size:1.2em;color:green;">Math Puzzles >> Monty Hall Problem >> Two Goats and a Car :</font></b><br>
					<p>
					<b>Objective :</b> Probability on PHP. This is not very useful for many people. It is more of my interest, so I want to keep a record. 
					</p>
					<p>
					<b>Conditions :</b>The host know which door contain a car.
					</p>
					</td>
				</tr>
				<tr>
					<td>
<?php
echo "<b>How to Play :</b><br>";
echo "1, Choose which one of the boxes that contain a car.<br>";
echo "2, Click (If ready, Click Me).<br>";
echo "3, If you want to change your answer, you can do so.<br>";
echo "4, Open all to check your result<br><br>";
echo "<b>Note :</b><br>";
echo "- Probability of opening doors of two goats and a car.";
echo "<br>";
echo "- P of Goat = 66.6% and P of car is 33.3%.";
echo "- After a Host show you a goat in one of the boxes, you should swamp your answer.<br>";
echo "- By swamping your answer you will have 66.6% chance of winning rather than 33.3%<br>";
echo "- Why So? 66.6%, you will get a goat, before any box is opened.<br>";
echo "- 66.6% you will get it wrong, by swamping you will get 66.6% of winning a car after the host open a box with a goat.";

//generate new randomness
$pvalue = array("Car","Goat","Goat");
if(isset($_REQUEST['btngenerate'])){
	for ($i=1;$i<=3;$i+=1){
		${'temp'.$i} = array_rand($pvalue);
		${'txt'.$i} = $pvalue[${'temp'.$i}];
		if(${'txt'.$i} == "Goat"){
			$temptxt = $i;
		}
		unset($pvalue[${'temp'.$i}]);
	}
}else{
	for ($i=1;$i<=3;$i+=1){
		${'temp'.$i} = array_rand($pvalue);
		${'txt'.$i} = $pvalue[${'temp'.$i}];
		if(${'txt'.$i} == "Goat"){
			$temptxt = $i;
		}
		unset($pvalue[${'temp'.$i}]);
	}
}
?>

<script>
	function opengoat(){
		var elem = document.getElementById("<?php echo 'front'.$temptxt; ?>");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("<?php echo 'back'.$temptxt; ?>");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
	}
	function openresult(){
		var elem = document.getElementById("front1");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("back1");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
		var elem = document.getElementById("front2");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("back2");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
		var elem = document.getElementById("front3");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("back3");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
	}
</script>
					</td>
				</tr>
				<tr>
					<td>
<div class = "flip3d">
	<div class="back" id = "back1"><?php echo $txt1;?></div>
	<div class="front" id = "front1">Box1 <br> ?</div>
</div>
<div class = "flip3d">
	<div class="back" id = "back2"><?php echo $txt2;?></div>
	<div class="front" id = "front2">Box2 <br> ?</div>
</div>
<div class = "flip3d">
	<div class="back" id = "back3"><?php echo $txt3;?></div>
	<div class="front" id = "front3">Box3 <br> ?</div>
</div>
<br>
<form method="post">
<center>
	<input type="button" value="If Ready, Click Me" name = "btnstart"<?php if (isset($_REQUEST['btnstart'])){echo "autofocus";} ?> onclick="opengoat()">
	<input type="button" value="Open All" name = "openall"<?php if (isset($_REQUEST['openall'])){echo "autofocus";} ?> onclick="openresult()">
	<input type="submit" value="Generate New" name = "btngenerate"<?php if (isset($_REQUEST['btngenerate'])){echo "autofocus";} ?>>
	</center>
</form>

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

<spamb>&lt;style></spamb>
.flip3d{
	width:140px;
	height:160px;
	margin:30px;
	float:left;
}

.flip3d >.front{
	text-align:center;
	font-size:3em;
	color:white;
	position:absolute;
	-webkit-transform:perspective( 600px ) rotateY( 0deg );
	transform:perspective(600px) rotateY(0deg);
	background-color:#e38d27; width:140px;height:160px;border-radius:2px;
	background-position:bottom left;
	background-image:url('buttons/button_bg.png');
	-webkit-box-shadow: 5px 5px #888;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition:transform .5s linear 0s;
	transition:-webkit-transform .5s linear 0s;
}

.flip3d >.back{
	vertical-align:text-bottom;
	text-align:center;
	font-size:3em;
	color:white;
	position:absolute;
	-webkit-transform:perspective( 600px ) rotateY( 180deg );
	transform:perspective( 600px ) rotateY( 180deg );
	background-color:#80BFFF; width:140px;height:160px;border-radius:2px;
	background-position:bottom left;
	background-image:url('buttons/button_bg.png');
	-webkit-box-shadow: 5px 5px #888;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	transition:-webkit-transform .5s linear 0s;
	transition:transform .5s linear 0s;
}

.flip3d:hover >.front{
	-webkit-transform:perspective( 600px ) rotateY( -180deg );
	transform:perspective( 600px ) rotateY( -180deg );
}
.flip3d:hover >.back{
	-webkit-transform:perspective( 600px ) rotateY( 0deg );
	transform:perspective( 600px ) rotateY( 0deg );
}
<spamb>&lt;/style></spamb>

<spamb>&lt;?php</spamb>

<spamg>//generate new randomness</spamg>
$pvalue = array("Car","Goat","Goat");
if(isset($_REQUEST['btngenerate'])){
	for ($i=1;$i&lt;=3;$i+=1){
		${'temp'.$i} = array_rand($pvalue);
		${'txt'.$i} = $pvalue[${'temp'.$i}];
		if(${'txt'.$i} == "Goat"){
			$temptxt = $i;
		}
		unset($pvalue[${'temp'.$i}]);
	}
}else{
	for ($i=1;$i&lt;=3;$i+=1){
		${'temp'.$i} = array_rand($pvalue);
		${'txt'.$i} = $pvalue[${'temp'.$i}];
		if(${'txt'.$i} == "Goat"){
			$temptxt = $i;
		}
		unset($pvalue[${'temp'.$i}]);
	}
}
<spamb>?></spamb>

<spamb>&lt;script></spamb>
	function opengoat(){
		var elem = document.getElementById("&lt;?php echo 'front'.$temptxt; ?>");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("&lt;?php echo 'back'.$temptxt; ?>");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
	}
	function openresult(){
		var elem = document.getElementById("front1");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("back1");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
		var elem = document.getElementById("front2");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("back2");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
		var elem = document.getElementById("front3");
		elem.style.webkitTransform = "perspective( 600px ) rotateY( -180deg )";
		var elemb = document.getElementById("back3");
		elemb.style.webkitTransform = "perspective( 600px ) rotateY( 0deg )";
	}
<spamb>&lt;/script></spamb>

<spamr>//HTML</spamr>
&lt;div class = "flip3d">
	&lt;div class="back" id = "back1">&lt;?php echo $txt1;?>&lt;/div>
	&lt;div class="front" id = "front1">Box1 &lt;br> ?&lt;/div>
&lt;/div>
&lt;div class = "flip3d">
	&lt;div class="back" id = "back2">&lt;?php echo $txt2;?>&lt;/div>
	&lt;div class="front" id = "front2">Box2 &lt;br> ?&lt;/div>
&lt;/div>
&lt;div class = "flip3d">
	&lt;div class="back" id = "back3">&lt;?php echo $txt3;?>&lt;/div>
	&lt;div class="front" id = "front3">Box3 &lt;br> ?&lt;/div>
&lt;/div>
&lt;br>
&lt;form method="post">
&lt;center>
	&lt;input type="button" value="If Ready, Click Me" name = "btnstart"&lt;?php 
	if (isset($_REQUEST['btnstart'])){echo "autofocus";} ?> onclick="opengoat()">
	&lt;input type="button" value="Open All" name = "openall"&lt;?php 
	if (isset($_REQUEST['openall'])){echo "autofocus";} ?> onclick="openresult()">
	&lt;input type="submit" value="Generate New" name = "btngenerate"&lt;?php 
	if (isset($_REQUEST['btngenerate'])){echo "autofocus";} ?>>
	&lt;/center>
&lt;/form>
	
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










