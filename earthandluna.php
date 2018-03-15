<html>
		<script src='3D/three.min.js'></script>
		<script src='3D/TrackballControl0.js'></script>
		<script src="3D/js/Projector.js"></script>
		<script src="3D/js/CanvasRenderer.js"></script>
		<script>
		var camera, earth, scene, renderer , container, plane, earthPivot, moonPivot;
		
		//function for making it works
		function init(){
			
			container = document.getElementById("container");			
			scene = new THREE.Scene();
			camera = new THREE.PerspectiveCamera( 120, 600/600, 1, 2000 );
			
			//Camera Position
			//camera.position.x = 100;
			camera.position.y = 120;
			camera.position.z = 140;
			
			//camera.rotation.x = 60 * (Math.PI / 180);
			camera.lookAt(scene.position);
			
			//create Convas
			var geometrySun = new THREE.SphereGeometry( 60, 15, 15 );
			var geometryEarth = new THREE.SphereGeometry( 10, 10, 10 );
			var geometryMoon = new THREE.SphereGeometry( 3, 10, 10 );
			var geometryline = new THREE.Geometry();
			
			//vertices for lines
			var size = 150, step =5;
			 for ( var i = -size; i<= size; i +=step){
				 geometryline.vertices.push(new THREE.Vector3( - size , -0.04, i));
				 geometryline.vertices.push(new THREE.Vector3( size , -0.04, i));
				 geometryline.vertices.push(new THREE.Vector3( i , -0.04, - size));
				 geometryline.vertices.push(new THREE.Vector3( i , -0.04, size));
			 }
			
			//Material
			var materialline = new THREE.LineBasicMaterial({color:"blue"});
			var material = new THREE.MeshNormalMaterial();
			var pmaterial = new THREE.MeshBasicMaterial({
				color:0x185760,
			});
			var line = new THREE.Line( geometryline, materialline, THREE.LinePieces);
			var geometryp = new THREE.PlaneGeometry(250,250);
				//plane
			plane = new THREE.Mesh(geometryp, pmaterial);
			plane.overdraw = true;
			
			//plane.position.set(0,0,0);
				
				//earth
			sun = new THREE.Mesh( geometrySun, material);
			earth = new THREE.Mesh( geometryEarth, material);
			moon = new THREE.Mesh( geometryMoon, material);
				
				//add wire-frame helper
			wireframeSun = new THREE.WireframeHelper( sun, 0xffff00 );
			wireframeEarth = new THREE.WireframeHelper( earth, 0xffff00 );
			wireframemoon = new THREE.WireframeHelper( moon, 0xffff00 );
				
				//position
			earth.position.set(100,0,0);
			
				//pivot
			earthPivot = new THREE.Object3D();
			sun.add ( earthPivot );
			earthPivot.add( earth );
			
			moonPivot = new THREE.Object3D();
			moonPivot.position = earth.position;
			earthPivot.add( moonPivot );
			moonPivot.add( moon );
			
			//add to the scene
				//scene.add ( plane );
				//scene.add ( earth );
				//scene.add ( moon );
				scene.add ( sun );
				scene.add ( wireframeEarth );
				scene.add ( wireframemoon );
				scene.add ( wireframeSun );
				scene.add ( line );
			
			//render
			renderer = new THREE.WebGLRenderer();
			renderer.setClearColor( 0x000000, 1 );
			renderer.setSize( 600,600);
			container.appendChild( renderer.domElement );
			
			}
			
			function render() {
				requestAnimationFrame( render );
				sun.rotation.y -=0.01;
				earth.rotation.y -=0.01;
				moon.rotation.y -=0.01;
				//earth.translateZ( 1 );
				earthPivot.rotation.y -= 0.01;
				//moonPivot.rotation.y -= 0.01;
				//moon.rotation.z -= 1.11;
				moon.translateZ( 0.01 );
				
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
					<b><font style="font-size:1.2em;color:green;">Special Math >> Orbital Calender >> Earth and Moon</font></b><br>
					<p>
						<b>Objective: </b>3D of the earth and Moon on JavaScript. 					</p>
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

	<b><u>Tetrahedron with JavaScript</u></b><br><br>			
	<center><div id="container"></div></center>
	<script>init();render();</script>
	
					</td>
					<!--td>
					
					</td-->
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled>It is disabled, Sorry for the inconvenience!
							</form>
					</td>
				</tr>
			</table>

			
</html>
