<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>Simple Anaglyphs</title>
		<meta name="description" content="3d anaglyph effect using CSS3" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>
		<script>
			$(document).ready(function() {

			});
		</script>
		<style>
		section {
						background-color:white;
		}
		 section p {
			text-align:center;
			font-size:2.5em;
			-webkit-transition:all 0.5s ease-in-out;
		}
		.flat {
			color:rgba(0,255,255,0.75);
			text-shadow:0 0 0 rgba(255,0,0,0.75);			
		}
		.level1 {
			color:rgba(0,255,255,0.9);
			text-shadow:5px 0 0 rgba(255,0,0,0.9);
			position:relative;
			left:0;
		}
		.level1:hover {
			text-shadow:15px 0 0 rgba(255,0,0,0.9);
			left:-7px;
		}		
		
		</style>
	</head>		
	<body>		

	<header>
		<h1>Simple Anaglyphs</h1>
	</header>
	
	<section>
		<p class="flat">This is at base level.</p>
		<p class="level1">I'm trying to be 3d</p>			
	</section>
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>	
</body>
</html>