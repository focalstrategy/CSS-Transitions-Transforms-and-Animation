<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>Some CSS3/HTML5 demos</title>
		<meta name="description" content="A selection of demos, showing off CSS3 and HTML5." />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>
		<script>
			$(document).ready(function() {

			});
		</script>
	</head>		
	<body>		

	<header>
		<h1>Some CSS3/HTML5 demos</h1>
	</header>
	
	<section>
		<h1>Demos</h1>
		<p>If you are interested in an explanation of some of the properties used here, check <a href="/">the tutorial</a>.</p>
		
		<ul>
			<li><a href="/demos/multiple_images.php">Click to fade between multiple images</a></li>
			<li><a href="/demos/next_prev_slider.php">Forward and Backward buttons for a slider</a></li>				
			<li><a href="/demos/imageslider.php">A fancy carousel/image slider</a></li>
			<li><a href="/demos/cubecarousel.php">A 3D carousel</a></li>				
			<li><a href="/demos/3d.php">A 3D anaglyphic cube (use red-cyan glasses)</a></li>
			<li><a href="/demos/cuboids.php">3D cuboids in the style of the Toshiba Tablet site</a></li>				
			<!--li><a href="/demos/geo/">Card flipping to show more information with multitouch support.</li-->
		</ul>
	</section>
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>	
</body>
</html>