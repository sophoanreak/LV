<html>

		<script src='3D/three.min.js'></script>
		<script src="3D/js/Projector.js"></script>
		<script src="3D/js/CanvasRenderer.js"></script>
		<script src="3D/js/stats.min.js"></script>
		<script>
		var camera, controls, scene, renderer , container;
		var prism, plane;

			var targetRotation = 0;
			var targetRotationOnMouseDown = 0;

			var mouseX = 0;
			var mouseXOnMouseDown = 0;

			var windowHalfX = 300;
			var windowHalfY = 300;

		//function for making it works
		function init(){
			
			container = document.getElementById("container");
			//document.body.appendChild( container );
						
			scene = new THREE.Scene();
			//scene.fog = new THREE.FogExp2( 0xefd1b5, 0.0025 );
			camera = new THREE.PerspectiveCamera( 70, 400/400, 0.01, 2000 );
			
			//Camera Position
			camera.position.z = 400;
			camera.position.y = 150;
			//camera.rotation.x = 70 * (Math.PI / 180);
			
			//create Convas
			var geometry = new THREE.BoxGeometry( 200, 200, 250 );
			var geometryplane = new THREE.PlaneBufferGeometry( 200, 250 );
			geometryplane.applyMatrix( new THREE.Matrix4().makeRotationX( - Math.PI / 2 ) );
			
			//Material
			var materialplane = new THREE.MeshBasicMaterial( { color: 0xe0e0e0, overdraw: 0.5 } );
			
			for ( var i = 0; i < geometry.faces.length; i += 2 ) {

					var hex = Math.random() * 0xffffff;
					geometry.faces[ i ].color.setHex( hex );
					geometry.faces[ i + 1 ].color.setHex( hex );

				}
			var material = new THREE.MeshBasicMaterial({ vertexColors: THREE.FaceColors, overdraw: 0.5 });
			plane = new THREE.Mesh( geometryplane, materialplane );
				
				//prism2
			prism = new THREE.Mesh( geometry, material );
			prism.position.y = 150;
			//prism.position.z = 1;
			//prism.rotation.x = 40*Math.PI /180;
			
			//add to scene
			scene.add( prism );
			scene.add( plane );
			
			
			//render
			renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0xf1f1f1 );
			renderer.setSize( 300, 300 );
			container.appendChild( renderer.domElement );
				
				stats = new Stats();
				stats.domElement.style.position = 'absolute';
				stats.domElement.style.top = '425px';
				stats.domElement.style.right = '425px';
				container.appendChild( stats.domElement );
				
				document.addEventListener( 'mousedown', onDocumentMouseDown, false );
				document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				document.addEventListener( 'touchmove', onDocumentTouchMove, false );
			}
			
			//moving mouse
			function onWindowResize() {

				windowHalfX = 300;
				windowHalfY = 300;
				camera.aspect = 1;
				camera.updateProjectionMatrix();
				renderer.setSize( 300, 300 );

			}

			//
			window.addEventListener( 'resize', onWindowResize, false );

			function onDocumentMouseDown( event ) {

				event.preventDefault();

				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'mouseup', onDocumentMouseUp, false );
				document.addEventListener( 'mouseout', onDocumentMouseOut, false );

				mouseXOnMouseDown = event.clientX - windowHalfX;
				targetRotationOnMouseDown = targetRotation;

			}

			function onDocumentMouseMove( event ) {

				mouseX = event.clientX - windowHalfX;

				targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.02;

			}

			function onDocumentMouseUp( event ) {

				document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
				document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
				document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

			}

			function onDocumentMouseOut( event ) {

				document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
				document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
				document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

			}

			function onDocumentTouchStart( event ) {

				if ( event.touches.length === 1 ) {

					event.preventDefault();

					mouseXOnMouseDown = event.touches[ 0 ].pageX - windowHalfX;
					targetRotationOnMouseDown = targetRotation;

				}

			}

			function onDocumentTouchMove( event ) {

				if ( event.touches.length === 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.05;

				}

			}
			
			//rendering the Object
			function animate(){
				requestAnimationFrame( animate );
				render();
				stats.update();
			}
			
			function render(){
				plane.rotation.y = prism.rotation.y += ( targetRotation - prism.rotation.y ) * 0.05;
				renderer.render( scene, camera );
			}
		
		 </script>



			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Geometry >> Parallelogram >> Rectangle :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Rectangle(ABCD) and Right Rectangular Prism.
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
echo "<b>1, Rhomboid with PHP</b>";
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
		$x1=75;$y1=100;
		$x2=75;$y2=200;
		$x3=225;$y3=200;
		$x4=225;$y4=100;
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
	imageline($image,150,95,150,105,$grey);
	imageline($image,150,195,150,205,$grey);
	//equal lines [AC] = [BD]
	imageline($image,70,148,80,148,$grey);
	imageline($image,220,148,230,148,$grey);
	imageline($image,70,150,80,150,$grey);
	imageline($image,220,150,230,150,$grey);


//call image
	imagepng($image,"pimage/rectangle.png");
	imagedestroy($image);
	
	echo '<center><img src="pimage/rectangle.png"></center>';
	echo "<br>";
?>
	
					</td>
					<td width = 50% valign="top">
	<b>2, Rectangle Prism with JavaScript</b><br>				
	<center><div id="container"></div></center>
	<script>init();animate();</script>
					
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
echo "<b>1, Rectangle with PHP</b>";
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
		$x1=75;$y1=100;
		$x2=75;$y2=200;
		$x3=225;$y3=200;
		$x4=225;$y4=100;
	$point = array(
		$x1,$y1,
		$x2,$y2,
		$x3,$y3,
		$x4,$y4,
	);
	imagepolygon($image,$point,4,$green);
	<spamg>//set point (ABCD)</spamg> 
	imagestring($image,10,$x1-3,$y1-15,'A',$white);
	imagestring($image,10,$x4-3,$y4-15,'B',$white);
	imagestring($image,10,$x2-3,$y2,'C',$white);
	imagestring($image,10,$x3-3,$y3,'D',$white);
	<spamg>//diagonal lines</spamg>
	imageline($image,$x1,$y1,$x3,$y3,$grey);
	imageline($image,$x2,$y2,$x4,$y4,$grey);
	<spamg>//equal lines [AB] = [CD]</spamg>
	imageline($image,150,95,150,105,$grey);
	imageline($image,150,195,150,205,$grey);
	<spamg>//equal lines [AC] = [BD]</spamg>
	imageline($image,70,148,80,148,$grey);
	imageline($image,220,148,230,148,$grey);
	imageline($image,70,150,80,150,$grey);
	imageline($image,220,150,230,150,$grey);

<spamg>//call image</spamg>
	imagepng($image,"pimage/rectangle.png");
	imagedestroy($image);
	
	echo '&lt;center>&lt;img src="pimage/rectangle.png">&lt;/center>';
	
<spamr>//For 3D box to work it is require three.min.js </spamr><a href = "http://www.html5canvastutorials.com/libraries/three.min.js" style = "color:blue">" Three.min.js"</a>
	<spamb>&lt;script</spamb> src='3D/three.min.js'><spamb>&lt;/script></spamb>
	<spamb>&lt;script</spamb> src="3D/js/Projector.js"><spamb>&lt;/script</spamb>
	<spamb>&lt;script</spamb> src="3D/js/CanvasRenderer.js"><spamb>&lt;/script</spamb>
	<spamb>&lt;script</spamb> src="3D/js/stats.min.js"><spamb>&lt;/script</spamb>
	<spamb>&lt;script></spamb>
			var camera, controls, scene, renderer , container;
			var prism, plane;

			var targetRotation = 0;
			var targetRotationOnMouseDown = 0;

			var mouseX = 0;
			var mouseXOnMouseDown = 0;

			var windowHalfX = 300;
			var windowHalfY = 300;

		<spamg>//function for making it works</spamg>
		function init(){
			
			container = document.getElementById("container");
						
			scene = new THREE.Scene();
			camera = new THREE.PerspectiveCamera( 70, 400/400, 0.01, 2000 );
			
			<spamg>//Camera Position</spamg>
			camera.position.z = 400;
			camera.position.y = 150;
			<spamg>//camera.rotation.x = 70 * (Math.PI / 180);</spamg>
			
			<spamg>//create Convas</spamg>
			var geometry = new THREE.BoxGeometry( 200, 200, 250 );
			var geometryplane = new THREE.PlaneBufferGeometry( 200, 250 );
			geometryplane.applyMatrix( new THREE.Matrix4().
			makeRotationX( - Math.PI / 2 ) );
			
			<spamg>//Material</spamg>
			var materialplane = new THREE.MeshBasicMaterial
			( { color: 0xe0e0e0, overdraw: 0.5 } );
			
			for ( var i = 0; i &lt; geometry.faces.length; i += 2 ) {

					var hex = Math.random() * 0xffffff;
					geometry.faces[ i ].color.setHex( hex );
					geometry.faces[ i + 1 ].color.setHex( hex );

				}
			var material = new THREE.MeshBasicMaterial
			({ vertexColors: THREE.FaceColors, overdraw: 0.5 });
			plane = new THREE.Mesh( geometryplane, materialplane );
				
				<spamg>//prism2</spamg>
			prism = new THREE.Mesh( geometry, material );
			prism.position.y = 150;
			
			<spamg>//add to scene</spamg>
			scene.add( prism );
			scene.add( plane );
			
			<spamg>//render</spamg>
			renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0xf1f1f1 );
			renderer.setSize( 300, 300 );
			container.appendChild( renderer.domElement );
				
				stats = new Stats();
				stats.domElement.style.position = 'absolute';
				stats.domElement.style.top = '425px';
				stats.domElement.style.right = '425px';
				container.appendChild( stats.domElement );
				
				document.addEventListener( 'mousedown', onDocumentMouseDown, false );
				document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				document.addEventListener( 'touchmove', onDocumentTouchMove, false );
			}
			
			<spamg>//moving mouse</spamg>
			function onWindowResize() {

				windowHalfX = 300;
				windowHalfY = 300;
				camera.aspect = 1;
				camera.updateProjectionMatrix();
				renderer.setSize( 300, 300 );

			}

			//
			window.addEventListener( 'resize', onWindowResize, false );

			function onDocumentMouseDown( event ) {

				event.preventDefault();

				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'mouseup', onDocumentMouseUp, false );
				document.addEventListener( 'mouseout', onDocumentMouseOut, false );

				mouseXOnMouseDown = event.clientX - windowHalfX;
				targetRotationOnMouseDown = targetRotation;

			}

			function onDocumentMouseMove( event ) {

				mouseX = event.clientX - windowHalfX;

				targetRotation = targetRotationOnMouseDown + 
				( mouseX - mouseXOnMouseDown )* 0.02;

			}

			function onDocumentMouseUp( event ) {

				document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
				document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
				document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

			}

			function onDocumentMouseOut( event ) {

				document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
				document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
				document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

			}

			function onDocumentTouchStart( event ) {

				if ( event.touches.length === 1 ) {

					event.preventDefault();

					mouseXOnMouseDown = event.touches[ 0 ].pageX - windowHalfX;
					targetRotationOnMouseDown = targetRotation;

				}

			}

			function onDocumentTouchMove( event ) {

				if ( event.touches.length === 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					targetRotation = targetRotationOnMouseDown + 
					( mouseX - mouseXOnMouseDown ) * 0.05;

				}

			}
			
			<spamg>//rendering the Object</spamg>
			function animate(){
				requestAnimationFrame( animate );
				render();
				stats.update();
			}
			
			function render(){
				plane.rotation.y = prism.rotation.y += ( targetRotation - prism.rotation.y ) * 0.05;
				renderer.render( scene, camera );
			}
		<spamg>//Call Function</spamg>
		init();
		animate();
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