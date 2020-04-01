<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
        <title>Cube three.js app</title>
        <link rel="stylesheet" href="main.css" />
		<style>
			body { margin: 0; }
			canvas { width: 100%; height: 100% }
		</style>
    </head>
    <?php include_once('nav.php'); ?>
	<body>
		<script src="js/three.js"></script>
		<script>
			//Need 3 things: scene, camera & renderer
      var scene = new THREE.Scene();
      var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );//1,Field of view (degrees).2,apsect ratio.3,4 near/far clipping pane
      var renderer = new THREE.WebGLRenderer();   //creating the renderer instance
      renderer.setSize( window.innerWidth, window.innerHeight );//set the size to render our app.If wna render at lower resolution add 3rd argument ,false)
      document.body.appendChild( renderer.domElement ); //add the renderer element to our HTML document. This is a <canvas> element

        //Add cube
        var cubeGeometry = new THREE.BoxGeometry( 1, 1, 1 ); //object that contains all the points (vertices) and fill (faces) of the cube
        var cubeMaterial = new THREE.MeshBasicMaterial( { color: 0x00ff00 } ); //colour it
        var cube = new THREE.Mesh( cubeGeometry, cubeMaterial ); //Mesh is an object that takes a geometry, and applies a material to it
        scene.add( cube ); //default to the coordinates (0,0,0)
        camera.position.z = 5;//cause both the camera and the cube to be inside each other. To avoid this, we simply move the camera out a bit.

        //render or animate loop.To see it create a loop that causes the renderer to draw the scene every time the screen is refreshed
        function animate() {
	         requestAnimationFrame( animate ); //The requestAnimationFrame - pauses when the user navigates to another browser tab
            cube.rotation.x += 0.01;        //Rotation Animation
            cube.rotation.y += 0.01;
	          renderer.render( scene, camera );
          }
          animate();
		</script>
	</body>
</html>
