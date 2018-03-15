<html>

		<script src='3D/three.min.js'></script>
		<script src='3D/TrackballControl0.js'></script>
		
		<script>
		var camera, controls, scene, renderer , container;
		//function for making it works
		function init(){
			
			container = document.getElementById("container");
			//document.body.appendChild( container );
						
			scene = new THREE.Scene();
			//scene.fog = new THREE.FogExp2( 0xefd1b5, 0.0025 );
			camera = new THREE.PerspectiveCamera( 100, 400/400, 0.1, 1000 );
			
			//Camera Position
			camera.position.z = 200;
			
			//create Convas
			var geometry = new THREE.BoxGeometry( 100, 100, 150 ,2,2,2 );
				
			//Material
			var material = new THREE.MeshBasicMaterial({wireframe:true});
			var prism = new THREE.Mesh( geometry, material );
			scene.add( prism );
				//prism2
			/*
			for (var i=1;i<=1;i+=1){
			var prism = new THREE.Mesh( geometry, material );
			prism.position.x = (Math.random() - 0.5) * 1000;
			prism.position.y = (Math.random() - 0.5) * 1000;
			prism.position.z = (Math.random() - 0.5) * 1000;
			scene.add( prism );
			}*/
			
			//render
			renderer = new THREE.WebGLRenderer();
				//renderer.setClearColor( 0xffffff, 1 );
			renderer.setSize( 300,300);
			container.appendChild( renderer.domElement );
			
			//control with mouse
			controls = new THREE.TrackballControls( camera, container );
			controls.rotateSpeed = 2.0;
			controls.zoomSpeed = 1.2;
			controls.panSpeed = 0.8;
  
			controls.noZoom = false;
			controls.noPan = false;
			controls.addEventListener('change',render);
			}
			//rendering the Object
			function animate(){
				requestAnimationFrame( animate );
				controls.update();
			}
			
			function render(){
				renderer.render( scene, camera );
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
					<b><font style="font-size:1.2em;color:green;">Geometry >> Parallelogram >> Rhomboid :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Rhomboid.
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
echo "<b>1, Rectangle with PHP</b>";
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

//makes Rectangle
		$x1=100;$y1=100;
		$x2=75;$y2=200;
		$x3=225;$y3=200;
		$x4=250;$y4=100;
	$point = array(
		$x1,$y1,
		$x2,$y2,
		$x3,$y3,
		$x4,$y4,
	);
	imagepolygon($image,$point,4,$green);
	//set point (ABCD) 
	imagestring($image,10,$x1-3,$y1-15,'A',$white);
	imagestring($image,10,$x4-3,$y4-15,'B',$white);
	imagestring($image,10,$x2-3,$y2,'C',$white);
	imagestring($image,10,$x3-3,$y3,'D',$white);
	//diagonal lines
	imageline($image,$x1,$y1,$x3,$y3,$grey);
	imageline($image,$x2,$y2,$x4,$y4,$grey);
	//equal lines [AB] = [CD]
	imageline($image,160,95,160,105,$grey);
	imageline($image,150,195,150,205,$grey);
	//equal lines [AC] = [BD]
	imageline($image,83,148,93,148,$grey);
	imageline($image,233,148,243,148,$grey);
	imageline($image,82,150,92,150,$grey);
	imageline($image,232,150,242,150,$grey);


//call image
	imagepng($image,"pimage/rhomboid.png");
	imagedestroy($image);
	
	echo '<center><img src="pimage/rhomboid.png"></center>';
	echo "<br>";
?>
	
					</td>
					<td width = 50% valign="top">
	<b>2, Rhomboid with JavaScript - incomplete</b><br>				
	<center><div id="container"></div></center>
	<script>init();animate();</script>
					
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
echo "<b>1: Rhomboid with PHP</b>";
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

<spamg>//makes Rectangle</spamg>
		$x1=100;$y1=100;
		$x2=75;$y2=200;
		$x3=225;$y3=200;
		$x4=250;$y4=100;
	$point = array(
		$x1,$y1,
		$x2,$y2,
		$x3,$y3,
		$x4,$y4,
	);
	imagepolygon($image,$point,4,$green);
	<spamg>//set point (ABCD) </spamg>
	imagestring($image,10,$x1-3,$y1-15,'A',$white);
	imagestring($image,10,$x4-3,$y4-15,'B',$white);
	imagestring($image,10,$x2-3,$y2,'C',$white);
	imagestring($image,10,$x3-3,$y3,'D',$white);
	<spamg>//diagonal lines</spamg>
	imageline($image,$x1,$y1,$x3,$y3,$grey);
	imageline($image,$x2,$y2,$x4,$y4,$grey);
	<spamg>//equal lines [AB] = [CD]</spamg>
	imageline($image,160,95,160,105,$grey);
	imageline($image,150,195,150,205,$grey);
	<spamg>//equal lines [AC] = [BD]</spamg>
	imageline($image,83,148,93,148,$grey);
	imageline($image,233,148,243,148,$grey);
	imageline($image,82,150,92,150,$grey);
	imageline($image,232,150,242,150,$grey);


<spamg>//call image</spamg>
	imagepng($image,"pimage/rhomboid.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="pimage/rhomboid.png">&lt;/center>';
	
<spamr>//For 3D box to work it is require three.min.js </spamr><a href = "http://www.html5canvastutorials.com/libraries/three.min.js" style = "color:blue">" Three.min.js"</a>
	<spamb>&lt;script</spamb> src='3D/three.min.js'><spamb>&lt;/script></spamb>
	<spamb>&lt;script</spamb> src='3D/TrackballControl.js'><spamb>&lt;/script></spamb>
	<spamb>&lt;script></spamb>
		
		
		
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