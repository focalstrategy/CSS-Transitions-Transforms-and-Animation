<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>A 3D CSS3 image slider/carousel</title>
		<meta name="description" content="A 3D CSS3 image slider/carousel" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>		
		<style>
		#controls, #transparency {
			text-align:center;
		}
		#controls span {
			padding-right:2em;
			cursor:pointer;
		}
		
		#cubespinner {
			-webkit-perspective: 800;
			-moz-perspective: 800;
			-ms-perspective: 800;
			-o-perspective: 800;
			perspective: 800;
			
			-webkit-perspective-origin: 50% 100px;
			-moz-perspective-origin: 50% 100px;
			-ms-perspective-origin: 50% 100px;
			-o-perspective-origin: 50% 100px;
			perspective-origin: 50% 100px;
			
			margin:100px auto 20px auto;
			width:450px;
			height:400px;
		}

		#cubespinner #cube {
			position: relative;
			margin: 0 auto;
			height: 281px;
			width: 450px;
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;
			-o-transform-style: preserve-3d;
			transform-style: preserve-3d;
			
			-webkit-transform-origin:(50% 100px 0);
			-moz-transform-origin:(50% 100px 0);
			-ms-transform-origin:(50% 100px 0);
			-o-transform-origin:(50% 100px 0);
			transform-origin:(50% 100px 0);
			
			-webkit-transition:all 1.0s ease-in-out;
			-moz-transition:all 1.0s ease-in-out;
			-ms-transition:all 1.0s ease-in-out;
			-o-transition:all 1.0s ease-in-out;
			transition:all 1.0s ease-in-out;
			
		}

		#cubespinner #Ycube,#cubespinner #Zcube {
			-webkit-transform-style: preserve-3d;	
			-moz-transform-style: preserve-3d;	
			-ms-transform-style: preserve-3d;	
			-o-transform-style: preserve-3d;	
			transform-style: preserve-3d;	
			
		}

		#cubespinner .face {
			position: absolute;
			height: 281px;
			width: 450px;
			padding: 0px;
		}


		#cube .one {
			-webkit-transform: translateZ(225px);
			-moz-transform: translateZ(225px);
			-o-transform: translateZ(225px);
			-ms-transform: translateZ(225px);
			transform: translateZ(225px);
		}

		#cube .two {
			-webkit-transform: rotateY(90deg) translateZ(225px);
			-moz-transform: rotateY(90deg) translateZ(225px);
			-o-transform: rotateY(90deg) translateZ(225px);
			-ms-transform: rotateY(90deg) translateZ(225px);
			transform: rotateY(90deg) translateZ(225px);
		}

		#cube .three {
			-webkit-transform: rotateY(180deg) translateZ(225px);
			-moz-transform: rotateY(180deg) translateZ(225px);
			-o-transform: rotateY(180deg) translateZ(225px);
			-ms-transform: rotateY(180deg) translateZ(225px);
			transform: rotateY(180deg) translateZ(225px);
		}

		#cube .four {
			-webkit-transform: rotateY(-90deg) translateZ(225px);
			-moz-transform: rotateY(-90deg) translateZ(225px);
			-o-transform: rotateY(-90deg) translateZ(225px);
			-ms-transform: rotateY(-90deg) translateZ(225px);
			transform: rotateY(-90deg) translateZ(225px);
		}

		.trans {
			opacity:0.7;
		}
		
		</style>
			<script>
				$(document).ready(function() {
					$("#slide-1").click(function() {
						$("#cube").css("-webkit-transform","rotateY(0deg)");
						$("#cube").css("-moz-transform","rotateY(0deg)");
						$("#cube").css("-o-transform","rotateY(0deg)");
						$("#cube").css("transform","rotateY(0deg)");							
						$("#controls span").removeClass("selected");
						$(this).addClass("selected");			
					});
					$("#slide-2").click(function() {
						$("#cube").css("-webkit-transform","rotateY(-90deg)");
						$("#cube").css("-moz-transform","rotateY(-90deg)");
						$("#cube").css("-o-transform","rotateY(-90deg)");
						$("#cube").css("transform","rotateY(-90deg)");		
						$("#controls span").removeClass("selected");
						$(this).addClass("selected");
					});
					$("#slide-3").click(function() {
						$("#cube").css("-webkit-transform","rotateY(-180deg)");
						$("#cube").css("-moz-transform","rotateY(-180deg)");
						$("#cube").css("-o-transform","rotateY(-180deg)");
						$("#cube").css("transform","rotateY(-180deg)");			
						$("#controls span").removeClass("selected");
						$(this).addClass("selected");
					});
					$("#slide-4").click(function() {
						$("#cube").css("-webkit-transform","rotateY(-270deg)");
						$("#cube").css("-moz-transform","rotateY(-270deg)");
						$("#cube").css("-o-transform","rotateY(-270deg)");
						$("#cube").css("transform","rotateY(-270deg)");			
						$("#controls span").removeClass("selected");
						$(this).addClass("selected");
					});
					$("#transparency").click(function() {
						$("#cube img").toggleClass("trans");
						$(this).toggleClass("selected");						
					});
					
				});	
			</script>		
	</head>		
	<body>		
	<div id="top_ads">
<!-- BuySellAds.com Zone Code -->
<div id="bsap_1273358" class="bsarocks bsap_6db88c5a69495071ea29eb766bc6ddf6"></div>
<!-- End BuySellAds.com Zone Code -->
	</div>
	<header>
		<h1>A 3D Carousel</h1>
	</header>
	
	<section>
		<p><a href="/demos/">Back to demos</a></p>
	</section>
	
	<section>
		<h1>Demo</h1>
		<p>A carousel demonstrating transitions, 3D transforms other cool stuff!</p>		

		<p class="note">3D transforms only work in Safari and Webkit Nightlies.</p>

		<div id="cubespinner">

			<div id="cube">

				<div class="face one">
					<img src="/images/Cirques.jpg" />
				</div>
				<div class="face two">
					<img src="/images/Clown%20Fish.jpg" />
				</div>
				<div class="face three">
					<img src="/images/Stones.jpg" />
				</div>
				<div class="face four">
					<img src="/images/Summit.jpg" />
				</div>

			</div>
		</div>

		<p id="controls">
			<span class="selected" id="slide-1">Image 1</span>
			<span id="slide-2">Image 2</span>
			<span id="slide-3">Image 3</span>
			<span id="slide-4">Image 4</span>
		</p>
		<p id="transparency">Click me to toggle transparency</p>
		

<? include($_SERVER['DOCUMENT_ROOT']."/disqus.php"); ?>			
	</section>		
	
	
	
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>
</body>
</html>