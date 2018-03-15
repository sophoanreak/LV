<html>



		<script src='3D/three.min.js'></script>
		<script src='3D/TrackballControl.js'></script>
		
		<script>
		//function for making it works
		function animate(){
			var scene = new THREE.Scene();
			scene.fog = new THREE.FogExp2( 0xefd1b5, 0.0025 );
			var camera = new THREE.PerspectiveCamera( 50, 400/400, 1, 1000 );
			
			//render
			var container = document.getElementById("container");
			var renderer = new THREE.WebGLRenderer();
			//renderer.setClearColor( 0xffffff, 1 );
			renderer.setSize( 300,300);
			container.appendChild(renderer.domElement);
			
			//create Convas
			var geometry = new THREE.BoxGeometry( 200, 200, 200 );
			var material = new THREE.MeshNormalMaterial();
			var cube = new THREE.Mesh( geometry, material );
			scene.add( cube );
			
			//Camera Position
			camera.position.z = 700;
			
			//rendering the Object
			function render() {
				requestAnimationFrame( render );
				cube.rotation.x += 0.01;
				cube.rotation.y += 0.001;
				renderer.render(scene, camera);
			};
			//call the rendering object
			render();
		}
		 </script>



			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Parallelogram >> Square and Cube :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Square(ABCD) and Cube.
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
					<td width = 50%>
					<b><font style="font-size:1em"></font></b>
<?php
echo "<b>1, Squre with PHP</b>";
//create background
	
	$width = 300;
	$height = 300;
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

//makes Square
	$point = array(
		100,100,
		100,200,
		200,200,
		200,100,
	);
	imagepolygon($image,$point,4,$green);
	//set point (ABCD) 
	imagestring($image,10,100,85,'A',$white);
	imagestring($image,10,200,85,'B',$white);
	imagestring($image,10,100,200,'C',$white);
	imagestring($image,10,200,200,'D',$white);


//call image
	imagepng($image,"pimage/square.png");
	imagedestroy($image);
	
	echo '<center><img src="pimage/square.png"></center>';
	echo "<br>";
?>
	
					</td>
					<td width = 50% valign="top">
	<b>2, Cube with JavaScript</b><br>				
	<center><div id="container"></div></center>
	<script>animate();</script>
					
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
echo "<b>1, Squre with PHP</b>";
<spamg>//create background</spamg>
	
	$width = 300;
	$height = 300;
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

<spamg>//makes Square</spamg>
	$point = array(
		100,100,
		100,200,
		200,200,
		200,100,
	);
	imagepolygon($image,$point,4,$green);
	//set point (ABCD) 
	imagestring($image,10,100,85,'A',$white);
	imagestring($image,10,200,85,'B',$white);
	imagestring($image,10,100,200,'C',$white);
	imagestring($image,10,200,200,'D',$white);

<spamg>//call image</spamg>
	imagepng($image,"pimage/square.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="pimage/square.png">&lt;/center>';
	
	<spamg>//for 3D box to work it is require three.min.js </spamg><a href = "http://www.html5canvastutorials.com/libraries/three.min.js" style = "color:blue">" Three.min.js"</a>
	<spamb>&lt;script</spamb> src='3D/three.min.js'><spamb>&lt;/script></spamb>
	<spamb>&lt;script></spamb>
		<spamg>//function for making it works</spamg>
		function animate(){
			var scene = new THREE.Scene();
			var camera = new THREE.PerspectiveCamera( 50, 400/400, 1, 1000 );
			
			<spamg>//render</spamg>
			var container = document.getElementById("container");
			var renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0xffffff, 1 );
			renderer.setSize( 300,300);
			container.appendChild(renderer.domElement);
			
			<spamg>//create Convas</spamg>
			var geometry = new THREE.BoxGeometry( 1, 1, 1 );
			var material = new THREE.MeshNormalMaterial();
			var cube = new THREE.Mesh( geometry, material );
			scene.add( cube );
			
			<spamg>//Camera Position</spamg>
			camera.position.z = 5;
			
			<spamg>//rendering the Object</spamg>
			function render() {
				requestAnimationFrame( render );
				cube.rotation.x += 0.01;
				cube.rotation.y += 0.001;
				renderer.render(scene, camera);
			};
			
			<spamg>//call the rendering object</spamg>
			render();
		}
		<spamb>&lt;/script></spamb>
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