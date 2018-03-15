<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<title> Css3d - periodic table</title>
		<style>
			html, body {
				height: 100%;
			}

			body {
				background-color: #f1f1f1;
				margin: 0;
				font-family: Helvetica, sans-serif;;
				overflow: hidden;
			}

			a {
				color: #000000;
			}

			#info {
				position: absolute;
				width: 100%;
				color: #000000;
				padding: 5px;
				font-family: Monospace;
				font-size: 13px;
				font-weight: bold;
				text-align: center;
				z-index: 1;
			}

			#menusudoku {
				position: absolute;
				bottom: 20px;
				width: 100%;
				text-align: center;
			}

			.element {
				width: 120px;
				height: 160px;
				box-shadow: 0px 0px 12px rgba(0,255,255,0.5);
				border: 1px solid rgba(127,255,255,0.25);
				text-align: center;
				cursor: default;
			}

			.element:hover {
				box-shadow: 6px 6px 12px rgba(0,1,1,0.75);
				border: 1px solid rgba(127,255,255,0.75);
			}

				.element .number {
					position: absolute;
					top: 20px;
					right: 20px;
					font-size: 12px;
					color: rgba(127,255,255,0.75);
				}

				.element .symbol {
					position: absolute;
					top: 40px;
					left: 0px;
					right: 0px;
					font-size: 60px;
					font-weight: bold;
					color: rgba(255,255,255,0.75);
					text-shadow: 0 0 10px rgba(0,255,255,0.95);
				}

				.element .details {
					position: absolute;
					bottom: 15px;
					left: 0px;
					right: 0px;
					font-size: 12px;
					color: rgba(127,255,255,0.75);
				}

			button {
				color: black;
				background: transparent;
				outline: 1px solid rgba(255,255,255,250);
				border: 0px;
				padding: 5px 10px;
				cursor: pointer;
			}
			button:hover {
				background-color: rgba(0,255,255,0.5);
			}
			button:active {
				color: #000000;
				background-color: rgba(0,255,255,0.75);
			}
		</style>
	</head>
	<body>
		<script src="3D/three.min.js"></script>
		<script src="3D/js/tween.min.js"></script>
		<script src="3D/TrackballControl.js"></script>
		<script src="3D/js/CSS3DRenderer.js"></script>

		<div id="container"></div>
		<div id="info"><a href="http://threejs.org" target="_blank">three.js css3d</a> - Sudoku Table. <a href="#" target="_blank">info</a>.</div>
		<div id="menusudoku">
			<button id="table">TABLE</button>
			<button id="helix">HELIX</button>
		</div>

		<script>

			var table = [
			<?php
			$num = array(1,2,3,4,5,6,7,8,9);
			$numMul = array($num,$num,$num,$num,$num,$num,$num,$num,$num);
			for ($i=1;$i<=9;$i++){
				for($j=6;$j<=14;$j++){
					echo $i . "," . "' '" . "," . "' '" . "," . $j .",". $i . ",";
				}
			}
			?>
	
			];

			var camera, scene, renderer;
			var controls;

			var objects = [];
			var targets = { table: [], sphere: [], helix: [], grid: [] };

			init();
			animate();

			function init() {

				camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 10000 );
				camera.position.z = 3000;

				scene = new THREE.Scene();

				// table1

				for ( var i = 0; i < table.length; i += 5 ) {
				
				//element
					var element = document.createElement( 'div' );
					element.className = 'element';
						
						if ( i>=15 && i<=25 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=60 && i<=70 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=105 && i<=115 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=135 && i<=145 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=165 && i<=175 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=180 && i<=190 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=210 && i<=220 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=225 && i<=235 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=255 && i<=265 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=285 && i<=295 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=330 && i<=340 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=375 && i<=385 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}
						else{
							element.style.backgroundColor = 'rgba(127,127,127,127)';
							}
							
					var number = document.createElement( 'div' );
					number.className = 'number';
					number.textContent = (i/5) + 1;
					//element
					element.appendChild( number );

					var symbol = document.createElement( 'div' );
					symbol.className = 'symbol';
					symbol.textContent = table[ i ];
					//element
					element.appendChild( symbol );

					var details = document.createElement( 'div' );
					details.className = 'details';
					details.innerHTML = table[ i + 1 ] + '<br>' + table[ i + 2 ];
					//element
					element.appendChild( details );
				
				//create object
					//object
					var object = new THREE.CSS3DObject( element );
					object.position.x = Math.random() * 4000 - 2000;
					object.position.y = Math.random() * 4000 - 2000;
					object.position.z = Math.random() * 4000 - 2000;
					
				//add to scene
					scene.add( object );

					
					objects.push( object );
					//

					var object = new THREE.Object3D();
					object.position.x = ( table[ i + 3 ] * 140 ) - 1330;
					object.position.y = - ( table[ i + 4 ] * 180 ) + 990;

					targets.table.push( object );

				}
				
				// table2

				for ( var i = 0; i < table.length; i += 5 ) {
				
				//element
					var element = document.createElement( 'div' );
					element.className = 'element';
						
						if ( i>=15 && i<=25 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=60 && i<=70 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=105 && i<=115 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=135 && i<=145 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=165 && i<=175 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=180 && i<=190 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=210 && i<=220 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=225 && i<=235 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=255 && i<=265 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=285 && i<=295 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=330 && i<=340 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=375 && i<=385 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}
						else{
							element.style.backgroundColor = 'rgba(127,127,127,127)';
							}
							
					var number = document.createElement( 'div' );
					number.className = 'number';
					number.textContent = (i/5) + 1;
					//element
					element.appendChild( number );

					var symbol = document.createElement( 'div' );
					symbol.className = 'symbol';
					symbol.textContent = table[ i ];
					//element
					element.appendChild( symbol );

					var details = document.createElement( 'div' );
					details.className = 'details';
					details.innerHTML = table[ i + 1 ] + '<br>' + table[ i + 2 ];
					//element
					element.appendChild( details );
				
				//create object
					//object
					var object = new THREE.CSS3DObject( element );
					object.position.x = Math.random() * 4000 - 2000;
					object.position.y = Math.random() * 4000 - 2000;
					object.position.z = Math.random() * 4000 - 2000;
					
				//add to scene
					scene.add( object );

					
					objects.push( object );
					//

					var object = new THREE.Object3D();
					object.position.x = ( table[ i + 3 ] * 140 ) - 1330;
					
					object.position.y = - ( table[ i + 4 ] * 180 ) + 990;
					object.position.z = -100 ;
					object.rotation.y = -Math.PI ;
					targets.table.push( object );

				}
		
				// helix

				var vector = new THREE.Vector3();

				for ( var i = 0, l = objects.length; i < l; i ++ ) {

					var phi = i * 0.175 + Math.PI;

					var object = new THREE.Object3D();

					object.position.x = 900 * Math.sin( phi );
					object.position.y = - ( i * 8 ) + 450;
					object.position.z = 900 * Math.cos( phi );

					vector.x = object.position.x * 2;
					vector.y = object.position.y;
					vector.z = object.position.z * 2;

					object.lookAt( vector );

					targets.helix.push( object );

				}

				//

				renderer = new THREE.CSS3DRenderer();
				renderer.setSize( window.innerWidth, window.innerHeight );
				renderer.domElement.style.position = 'absolute';
				document.getElementById( 'container' ).appendChild( renderer.domElement );

				//

				controls = new THREE.TrackballControls( camera, renderer.domElement );
				controls.rotateSpeed = 1;
				controls.minDistance = 500;
				controls.maxDistance = 6000;
				controls.addEventListener( 'change', render );

				var button = document.getElementById( 'table' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.table, 2000 );
					
					camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 10000 );
					camera.position.z = 3000;
					
					//
					controls = new THREE.TrackballControls( camera, renderer.domElement );
					controls.rotateSpeed = 2;
					controls.minDistance = 500;
					controls.maxDistance = 6000;
					controls.addEventListener( 'change', render );

				}, false );

				var button = document.getElementById( 'helix' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.helix, 2000 );

				}, false );


				transform( targets.table, 2000 );

				//

				window.addEventListener( 'resize', onWindowResize, false );

			}

			function transform( targets, duration ) {

				TWEEN.removeAll();

				for ( var i = 0; i < objects.length; i ++ ) {

					var object = objects[ i ];
					var target = targets[ i ];

					new TWEEN.Tween( object.position )
						.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();

					new TWEEN.Tween( object.rotation )
						.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();

				}

				new TWEEN.Tween( this )
					.to( {}, duration * 2 )
					.onUpdate( render )
					.start();

			}

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

				render();

			}

			function animate() {

				requestAnimationFrame( animate );

				TWEEN.update();

				controls.update();

			}

			function render() {

				renderer.render( scene, camera );

			}

		</script>
	</body>
</html>

