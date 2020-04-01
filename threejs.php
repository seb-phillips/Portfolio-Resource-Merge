<?php include_once("head.php");?>
<title>Three JS</title>
<body>

<?php require_once("nav.php");?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Three.js</h1><br>
  <h3>Basics with cube example</h3>
  <h3>Need 3 things: Scene, Camera & Renderer</h3><br><p>
    var scene = new THREE.Scene();<br>
    var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );//1,Field of view (degrees).2,apsect ratio.3,4 near/far clipping pan
<br>var renderer = new THREE.WebGLRenderer();   //creating the renderer instance<br>renderer.setSize( window.innerWidth, window.innerHeight );//set the size to render our app.If wna render at lower resolution add 3rd argument ,false)
      document.body.appendChild( renderer.domElement ); //add the renderer element to our HTML document. This is a <\canvas> element<br><br></p>
  <h3>Add Cube</h3><br>
  <p>var cubeGeometry = new THREE.BoxGeometry( 1, 1, 1 ); //object that contains all the points (vertices) and fill (faces) of the cube
        var cubeMaterial = new THREE.MeshBasicMaterial( { color: 0x00ff00 } ); //colour it
        var cube = new THREE.Mesh( cubeGeometry, cubeMaterial ); //Mesh is an object that takes a geometry, and applies a material to it
        scene.add( cube ); //default to the coordinates (0,0,0)
        camera.position.z = 5;//cause both the camera and the cube to be inside each other. To avoid this, we simply move the camera out a bit.</p>
    <br>
    <h3>Render or animate loop</h3><br>
    <p>//render or animate loop.To see it create a loop that causes the renderer to draw the scene every time the screen is refreshed
        function animate() {
	         requestAnimationFrame( animate ); //The requestAnimationFrame - pauses when the user navigates to another browser tab
            cube.rotation.x += 0.01;        //Rotation Animation
            cube.rotation.y += 0.01;
	          renderer.render( scene, camera );
          }
          animate();</p>
    </div>




<?php include_once("foot.php")?>