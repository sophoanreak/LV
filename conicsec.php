<html>

		<script src='3D/three.min.js'></script>
		<script src='3D/TrackballControl.js'></script>
		
		<script>
		var camera, cylinder, sphere, scene, renderer , container, plane;
		//function for making it works
		function init(){
			
			container = document.getElementById("container");
						
			scene = new THREE.Scene();
			camera = new THREE.PerspectiveCamera( 60, 600/600, 1, 1000 );
			
			//Camera Position
			camera.position.y = -290;
			camera.position.z = 200;
			camera.rotation.x = 60 * (Math.PI / 180);

			//Material
			var material = new THREE.MeshNormalMaterial();
			var materialc = new THREE.MeshBasicMaterial({
				color:0x551a8b,
				wireframe:'true',
			});
			var materialcircle = new THREE.MeshBasicMaterial({
				color:0x0000ff,
				wireframe:'true',
			});
			var pmaterial = new THREE.MeshBasicMaterial({
				color:0x185760,
			});
			
			//create Convas
			var geometry2 = new THREE.CylinderGeometry( 0, 70, 180,64 );
			var geometrycir = new THREE.CircleGeometry( 27, 64 );
			var geometrycir2 = new THREE.CircleGeometry( 35, 74 );
			var geometryp = new THREE.PlaneGeometry(250,250);
				//plane
			plane = new THREE.Mesh(geometryp, pmaterial);
			plane.overdraw = true;
				//cylinder
			cylinder = new THREE.Mesh( geometry2, materialc );
				//sphere
			circle = new THREE.Mesh( geometrycir , materialcircle );
			circle2 = new THREE.Mesh( geometrycir2 , materialcircle );
			wirefram = new THREE.WireframeHelper( cylinder, 0xffffff );
				//position
			//plane.position.set(0,0,0);
			cylinder.position.set(0,0,90);
			circle.position.set ( 0, 0, 110);
			circle2.position.set ( 35, 0, 1);
			cylinder.rotation.x = Math.PI/2 ;
			
			//add to the scene
				scene.add ( plane );
				scene.add ( cylinder );
				scene.add ( circle );
				scene.add ( circle2 );
				//scene.add (wirefram);
			
			//render
			renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0xf1f1f1, 1 );
			renderer.setSize( 600,600 );
			container.appendChild( renderer.domElement );
			}
			
			//rendering the Object
			function render() {
				requestAnimationFrame( render );
				//cylinder.rotation.x +=0.01;
				//sphere.rotation.x +=0.01;
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
					<b><font style="font-size:1.2em;color:green;">Geometry >> Polyhedron >> Conic Section and Quadratic Form :</font></b><br>
					<p>
					<b>Objective: </b>Drawing Conic section and quadratic form on JavaScript. There is no standard mathematics to draw it. I just simply put everything by guessing. Radius of the small circle should be half the big circle in the bottom. The circumference of the bottom circle should not touch the center point of the cone's base. There is an ellipse but I don't know how to draw it yet. 
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
	<b><u>Cone with JavaScript</u></b><br><br>			
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
	var camera, cylinder, scene, renderer , container, plane;
		<spamg>//function for making it works</spamg>
		function init(){
			
			container = document.getElementById("container");
						
			scene = new THREE.Scene();
			camera = new THREE.PerspectiveCamera( 60, 600/600, 1, 1000 );
			
			<spamg>//Camera Position</spamg>
			camera.position.y = -290;
			camera.position.z = 200;
			camera.rotation.x = 60 * (Math.PI / 180);
	
			<spamg>//Material</spamg>
			var material = new THREE.MeshNormalMaterial();
			var materialc = new THREE.MeshBasicMaterial({
				color:0x551a8b,
				wireframe:'true',
			});
			var materialcircle = new THREE.MeshBasicMaterial({
				color:0x0000ff,
				wireframe:'true',
			});
			var pmaterial = new THREE.MeshBasicMaterial({
				color:0x185760,
			});
			
			<spamg>//create Convas</spamg>
			var geometry2 = new THREE.CylinderGeometry( 0, 70, 180,64 );
			var geometrycir = new THREE.CircleGeometry( 27, 64 );
			var geometrycir2 = new THREE.CircleGeometry( 35, 74 );
			var geometryp = new THREE.PlaneGeometry(250,250);
				<spamg>//plane</spamg>
			plane = new THREE.Mesh(geometryp, pmaterial);
			plane.overdraw = true;
				<spamg>//cylinder</spamg>
			cylinder = new THREE.Mesh( geometry2, materialc );
				<spamg>//sphere</spamg>
			circle = new THREE.Mesh( geometrycir , materialcircle );
			circle2 = new THREE.Mesh( geometrycir2 , materialcircle );
			wirefram = new THREE.WireframeHelper( cylinder, 0xffffff );
				<spamg>//position</spamg>
			<spamg>//plane.position.set(0,0,0);</spamg>
			cylinder.position.set(0,0,90);
			circle.position.set ( 0, 0, 110);
			circle2.position.set ( 35, 0, 1);
			cylinder.rotation.x = Math.PI/2 ;
			
			<spamg>//add to the scene</spamg>
				scene.add ( plane );
				scene.add ( cylinder );
				scene.add ( circle );
				scene.add ( circle2 );
				<spamg>//scene.add (wirefram);</spamg>
			
			<spamg>//render</spamg>
			renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0xf1f1f1, 1 );
			renderer.setSize( 600,600);
			container.appendChild( renderer.domElement );
			
			}
			<spamg>//rendering the Object</spamg>
			function render() {
				requestAnimationFrame( render );
				cylinder.rotation.x +=0.01;
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