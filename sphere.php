<html>

		<script src='3D/three.min.js'></script>
		<script src='3D/TrackballControl.js'></script>
		
		<script>
		var camera, sphere, scene, renderer , container, plane;
		
		//function for making it works
		function init(){
			
			container = document.getElementById("container");			
			scene = new THREE.Scene();
			camera = new THREE.PerspectiveCamera( 60, 600/600, 1, 1000 );
			
			//Camera Position
			camera.position.y = -290;
			camera.position.z = 200;
			camera.rotation.x = 60 * (Math.PI / 180);
			
			//light
			light = new THREE.DirectionalLight( 0xffffff );
			light.position.set( 0, 0, 1 );
			scene.add( light );
			
			//create Convas
			var geometry2 = new THREE.SphereGeometry( 90, 32, 32 );
			
			//Material
			var material = new THREE.MeshNormalMaterial();
			var pmaterial = new THREE.MeshBasicMaterial({
				color:0x185760,
			});
			var geometryp = new THREE.PlaneGeometry(250,250);
				//plane
			plane = new THREE.Mesh(geometryp, pmaterial);
			plane.overdraw = true;
			//plane.position.set(0,0,0);
				//sphere
			sphere = new THREE.Mesh( geometry2, material);
				//add wireframe helper
			wireframe = new THREE.WireframeHelper( sphere, 0xf1f1f1 );
			sphere.position.set(0,0,90);
			
			//add to the scene
				scene.add ( plane );
				scene.add ( sphere );
				scene.add ( wireframe );
			
			//render
			renderer = new THREE.WebGLRenderer();
			renderer.shadowMapType = THREE.PCFSoftShadowMap;
			renderer.setClearColor( 0xf1f1f1, 1 );
			renderer.setSize( 600,600);
			container.appendChild( renderer.domElement );
			
			}
			//rendering the Object
			function render() {
				requestAnimationFrame( render );
				sphere.rotation.x +=0.01;
				renderer.render(scene, camera);
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
					<b><font style="font-size:1.2em;color:green;">Geometry >> Circles and Spheres >> Sphere :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Sphere on JavaScript.
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
					<td width = 100%>
					<b><font style="font-size:1em"></font></b>
<?php

?>
	<b><u>Sphere with JavaScript</u></b><br><br>			
	<center><div id="container"></div></center>
	<script>init();render();</script>
	
					</td>
					<td valign="top">
	
					
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
<pre style= "font-family: 'Time New Roman';">
	
<spamr>//For 3D box to work it is require three.min.js </spamr><a href = "http://www.html5canvastutorials.com/libraries/three.min.js" style = "color:blue">" Three.min.js"</a>
	<spamb>&lt;script</spamb> src='3D/three.min.js'><spamb>&lt;/script></spamb>
	<spamb>&lt;script</spamb> src='3D/TrackballControl.js'><spamb>&lt;/script></spamb>
	<spamb>&lt;script></spamb>
	var camera, sphere, scene, renderer , container, plane;
		
		<spamg>//function for making it works</spamg>
		function init(){
			
			container = document.getElementById("container");			
			scene = new THREE.Scene();
			camera = new THREE.PerspectiveCamera( 60, 600/600, 1, 1000 );
			
			<spamg>//Camera Position</spamg>
			camera.position.y = -290;
			camera.position.z = 200;
			camera.rotation.x = 60 * (Math.PI / 180);
	
			<spamg>//create Convas</spamg>
			var geometry2 = new THREE.SphereGeometry( 90, 32 ,32 );
			
			<spamg>//Material</spamg>
			var material = new THREE.MeshNormalMaterial();
			var pmaterial = new THREE.MeshBasicMaterial({
				color:0x185760,
			});
			var geometryp = new THREE.PlaneGeometry(250,250);
				<spamg>//plane</spamg>
			plane = new THREE.Mesh(geometryp, pmaterial);
			plane.overdraw = true;
			<spamg>//plane.position.set(0,0,0);</spamg>
				<spamg>//sphere</spamg>
			sphere = new THREE.Mesh( geometry2, material);
				<spamg>//add wireframe helper</spamg>
			wireframe = new THREE.WireframeHelper( sphere, 0xf000000 );
			sphere.position.set(0,0,90);
			
			<spamg>//add to the scene</spamg>
				scene.add ( plane );
				scene.add ( sphere );
				scene.add ( wireframe );
			
			<spamg>//render</spamg>
			renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0xf1f1f1, 1 );
			renderer.setSize( 600,600);
			container.appendChild( renderer.domElement );
			
			}
			<spamg>//rendering the Object</spamg>
			function render() {
				requestAnimationFrame( render );
				sphere.rotation.x +=0.01;
				renderer.render(scene, camera);
			}
		<spamg>//call function</spamg>
		init();
		render();
		
	<spamb>&lt;/script></spamb>
</pre>
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