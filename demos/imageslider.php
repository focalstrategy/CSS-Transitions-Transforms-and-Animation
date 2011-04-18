<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>A fancy CSS3 image slider/carousel</title>
		<meta name="description" content="A fancy CSS3 image slider/carousel" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>		
		<style>
			#images,#captions {
				-webkit-transition:all 1.0s ease-in-out;
				-moz-transition:all 1.0s ease-in-out;
				-o-transition:all 1.0s ease-in-out;
				-ms-transition:all 1.0s ease-in-out;				
				transition:all 1.0s ease-in-out;				
			}
			
			p {
				-webkit-transition:all 0.3s ease-in-out;
				-moz-transition:all 0.3s ease-in-out;
				-o-transition:all 0.3s ease-in-out;
				-ms-transition:all 0.3s ease-in-out;				
				transition:all 0.3s ease-in-out;				
			}
		
			#controls {
				text-align:center;
			}
			#controls span {
				padding-right:2em;
				cursor:pointer;
			}
			#container {
				width:450px;
				height:481px;
				overflow:hidden;
				position:relative;
				margin:0 auto;		
			}
			#images,#captions {
				position:absolute;
				left:0px;
				width:1800px;
			}
			#images img {
				padding:0;
				margin:0;
				float:left;
				
				-webkit-box-reflect: below 1px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0.6, transparent), to(white));
				
			}
			
			#captions div {
				padding:0;
				margin:0;
				width:450px;
				height:481px;
				float:left;
			}
			
			#captions p {
				padding:10px;
				margin-top:200px;
				background-color:rgba(255,255,255,0.6);
				text-align:right;
			}
			
			#container:hover #captions p {
				background-color:rgba(255,255,255,0.9);
				-webkit-box-shadow:0 0 5px rgba(0,0,0,0.5);
				-moz-box-shadow:0 0 5px rgba(0,0,0,0.5);
				box-shadow:0 0 5px rgba(0,0,0,0.5);								
			}
			
		</style>
		<script>
			$(document).ready(function() {
				$("#slide-1").click(function() {
					$("#images, #captions").css("-webkit-transform","translate(0px, 0px)");
					$("#images, #captions").css("-moz-transform","translate(0px, 0px)");
					$("#images, #captions").css("-o-transform","translate(0px, 0px)");
					$("#images, #captions").css("-ms-transform","translate(0px, 0px)");					
					$("#images, #captions").css("transform","translate(0px, 0px)");							
					$("#controls span").removeClass("selected");
					$(this).addClass("selected");			
				});
				$("#slide-2").click(function() {
					$("#images, #captions").css("-webkit-transform","translate(-450px, 0px)");
					$("#images, #captions").css("-moz-transform","translate(-450px, 0px)");
					$("#images, #captions").css("-o-transform","translate(-450px, 0px)");
					$("#images, #captions").css("-ms-transform","translate(-450px, 0px)");					
					$("#images, #captions").css("transform","translate(-450px, 0px)");		
					$("#controls span").removeClass("selected");
					$(this).addClass("selected");
				});
				$("#slide-3").click(function() {
					$("#images, #captions").css("-webkit-transform","translate(-900px, 0px)");
					$("#images, #captions").css("-moz-transform","translate(-900px, 0px)");
					$("#images, #captions").css("-o-transform","translate(-900px, 0px)");
					$("#images, #captions").css("-ms-transform","translate(-900px, 0px)");					
					$("#images, #captions").css("transform","translate(-900px, 0px)");			
					$("#controls span").removeClass("selected");
					$(this).addClass("selected");
				});
				$("#slide-4").click(function() {
					$("#images, #captions").css("-webkit-transform","translate(-1350px, 0)");
					$("#images, #captions").css("-moz-transform","translate(-1350px, 0px)");
					$("#images, #captions").css("-o-transform","translate(-1350px, 0px)");
					$("#images, #captions").css("-ms-transform","translate(-1350px, 0px)");					
					$("#images, #captions").css("transform","translate(-1350px, 0px)");			
					$("#controls span").removeClass("selected");
					$(this).addClass("selected");
				});
			});	
		</script>		
	</head>		
	<body>		

	<header>
		<h1>A fancy CSS3 image slider/carousel</h1>
	</header>
	
	<section>
		<p><a href="/demos/">Back to demos</a></p>
	</section>
	
	<section>
		<h1>Demo</h1>
		<p>A carousel demonstrating transitions, transforms and reflections.</p>		

			<p id="controls">
				<span class="selected" id="slide-1">Image 1</span>
				<span id="slide-2">Image 2</span>
				<span id="slide-3">Image 3</span>
				<span id="slide-4">Image 4</span>
			</p>
		<div id="container">			
			<div id="images">
				<img src="/images/Cirques.jpg" />
				<img src="/images/Clown%20Fish.jpg" />
				<img src="/images/Stones.jpg" />
				<img src="/images/Summit.jpg" />		
			</div>
			<div id="captions">
				<div><p>Some mountains</p></div>
				<div><p>Clown fish</p></div>
				<div><p>Lots of pebbles</p></div>
				<div><p>An unusually purple mountain</p></div>												
			</div>
		</div>
	</section>		
	
	
	
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>
</body>
</html>	