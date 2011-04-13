<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>Using CSS3 Transitions, Transforms and Animation</title>
		<meta name="description" content="A practical guide with demos to using CSS transitions, transforms and animations." />
		<meta name="google-site-verification" content="zTH7hEgeKVTkOu0F5bO5Guw9iRHWBJdCX0RpMASGZVI" />		
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.hover').bind('touchstart touchend', function(e) {
					e.preventDefault();
					$(this).toggleClass('hover_effect');
				});
			});
		</script>
		<meta name="viewport" content="width=device-width,maximum-scale=1.0" />
	</head>		
	<body>		

	<header>
		<h1><a href="/">Using CSS3 Transitions, Transforms and Animation</a></h1>
	</header>
<section>
<h2>Fading between multiple images on click</h2>

<style>
	p#controls {
		text-align:center;
	}
	#controls span {
		padding-right:2em;
		cursor:pointer;
	}
	#cf {
		position:relative;
		height:281px;
		width:450px;
		margin:0 auto;
	}
	#cf img {
		position:absolute;
		left:0;
		-webkit-transition: opacity 1s ease-in-out;
		-moz-transition: opacity 1s ease-in-out;
		-o-transition: opacity 1s ease-in-out;
		transition: opacity 1s ease-in-out;
		opacity:0;
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);		
	}
	
	#cf img.opaque {
		opacity:1;
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
		filter: alpha(opacity=1);		
	}	
</style>
<script>
$(document).ready(function() {
	$("#controls span").click(function() {
		$("#cf img").removeClass("opaque");
		
		var imageToShow = $(this).attr("id").replace("for-", "");

		console.log(imageToShow);
		
		$("#cf #"+imageToShow).addClass("opaque");
		
		$("#controls span").removeClass("selected");
		$(this).addClass("selected");			
	});
});
</script>
<div id="cf" class="shadow">
	<img id="image-1" src="/images/Cirques.jpg" class="opaque"/>
	<img id="image-2" src="/images/Clown%20Fish.jpg"/>
	<img id="image-3" src="/images/Stones.jpg" />
	<img id="image-4" src="/images/Summit.jpg" />
</div>
<p id="controls">
	<span class="selected" id="for-image-1">Image 1</span>
	<span id="for-image-2">Image 2</span>
	<span id="for-image-3">Image 3</span>
	<span id="for-image-4">Image 4</span>
</p>

</section>
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>	
</body>
</html>