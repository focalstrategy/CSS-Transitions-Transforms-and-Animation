<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>A 3D Anaglyph</title>
		<meta name="description" content="A CSS3 and HTML5 anaglyph" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>
		<script>
			$(document).ready(function() {

			});
		</script>
	</head>	
	<style>
	@-webkit-keyframes spin {
	 0% {
	   -webkit-transform:rotateY(0deg);
	 }
	 100% {
	   -webkit-transform:rotateY(360deg);
	 }
	}
	
	#cubes {
		position:relative;
		width:450px;
		margin:0 auto;		
	}
	.cubespinner {
		position:absolute;
		left:0;
		-webkit-perspective: 600;
		margin:100px auto 20px auto;
		width:450px;
		height:400px;
	}

	.cubespinner .cube {
		position: relative;
		margin: 0 auto;
		height: 281px;
		width: 450px;
		-webkit-transform-style: preserve-3d;
		-webkit-transform-origin:(50% 100px 0);
		-webkit-transition:all 1.0s ease-in-out;
	}

	.cubespinner #Ycube,.cubespinner #Zcube {
		-webkit-transform-style: preserve-3d;	
	}

	.cubespinner .face {
		position: absolute;
		height: 281px;
		width: 450px;
		padding: 0px;
		text-align:center;
	}
	
	.cubespinner.red {
		-webkit-perspective-origin: 50% 110px;
	}

	.cubespinner.cyan {
		-webkit-perspective-origin: 50% 90px;
	}
	
	.cubespinner.cyan .face {
		border:3px #f00 solid;
		background-color:rgba(255,0,0,0.2);
		color:rgba(255,0,0,0.2);		
	}
	.cubespinner.red .face {
		border:3px #0ff solid;
		background-color:rgba(0,255,255,0.2);		
		color:rgba(0,255,255,0.2);		
	}


	.cube .one {
		-webkit-transform: translateZ(225px);
		font-size:150px;
		line-height:0;
	}

	.cube .two {
		-webkit-transform: rotateY(90deg) translateZ(225px);
	}

	.cube .three {
		-webkit-transform: rotateY(180deg) translateZ(225px);
	}

	.cube .four {
		-webkit-transform: rotateY(-90deg) translateZ(225px);
	}
	
	.cube {
		-webkit-animation-name: spin;
		-webkit-animation-timing-function: linear;
		-webkit-animation-iteration-count: infinite;
		-webkit-animation-duration: 8s;
		-webkit-animation-direction: normal;		
	}
	</style>		
	<body>		

	<header>
		<h1>A 3D Anaglyph</h1>
	</header>
	
	<section>
		<div id="cubes">
		<div class="cubespinner red">

			<div class="cube">

				<div class="face one">
					<p>3D?</p>
				</div>
				<div class="face two">

				</div>
				<div class="face three">

				</div>
				<div class="face four">

				</div>

			</div>
		</div>
		<div class="cubespinner cyan">

			<div class="cube">

				<div class="face one">
					<p>3D?</p>
				</div>
				<div class="face two">

				</div>
				<div class="face three">

				</div>
				<div class="face four">

				</div>

			</div>
		</div>
		</div>		
	</section>
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>	
</body>
</html>