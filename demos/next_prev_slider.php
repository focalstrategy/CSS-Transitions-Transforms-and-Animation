<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>CSS3 next/prev button slider</title>
		<meta name="description" content="CSS3 next/prev button slider" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>		
		<style>
			#images {
				-webkit-transition:all 0.6s ease-in-out;
				-moz-transition:all 0.6s ease-in-out;
				-o-transition:all 0.6s ease-in-out;
				-transition:all 0.6s ease-in-out;				
			}
			
		
			#next_prev {
				text-align:center;
			}
			#next_prev span {
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
			#images {
				position:absolute;
				left:0px;
				width:1800px;											
			}
			#images img {
				padding:0;
				margin:0;
				float:left;
			}
			

			
		</style>
		<script>
			$(document).ready(function() {
				
				currentTranslateX = 0;
				$("#images").css("-webkit-transform","translateX("+currentTranslateX+"px)");
				$("#images").css("-moz-transform","translateX("+currentTranslateX+"px)");
				$("#images").css("-o-transform","translateX("+currentTranslateX+"px)");
				$("#images").css("transform","translateX("+currentTranslateX+"px)");				
				
				$("#next").click(function() {
					var width = $("#images img").width();
					var maxWidth = width * $("#images img").length;
					
					var transformProperty = $("#images").css("-webkit-transform") || $("#images").css("-moz-transform") || $("#images").css("-o-transform") || $("#images").css("transform");
					
					var currentTranslateX =  parseInt(transformProperty.replace(/translateX\(/i, ""));
				
					if (currentTranslateX - width > -maxWidth) {
						currentTranslateX -= width;
						$("#images").css("-webkit-transform","translateX("+currentTranslateX+"px)");
						$("#images").css("-moz-transform","translateX("+currentTranslateX+"px)");
						$("#images").css("-o-transform","translateX("+currentTranslateX+"px)");
						$("#images").css("transform","translateX("+currentTranslateX+"px)");						
					}
				});
				
				$("#prev").click(function() {
					var width = $("#images img").width();
					var maxWidth = width * $("#images img").length;
					
					var transformProperty = $("#images").css("-webkit-transform") || $("#images").css("-moz-transform") || $("#images").css("-o-transform") || $("#images").css("transform");
					
					var currentTranslateX =  parseInt(transformProperty.replace(/translateX\(/i, ""));
				
					if (currentTranslateX + width <= 0) {
						currentTranslateX += width;
						$("#images").css("-webkit-transform","translateX("+currentTranslateX+"px)");
						$("#images").css("-moz-transform","translateX("+currentTranslateX+"px)");
						$("#images").css("-o-transform","translateX("+currentTranslateX+"px)");
						$("#images").css("transform","translateX("+currentTranslateX+"px)");						
					}
				});				
		
			});	
		</script>		
	</head>		
	<body>		

	<header>
		<h1>CSS3 next/prev button slider</h1>
	</header>
	
	<section>
		<p><a href="/demos/">Back to demos</a></p>
	</section>
	
	<section>
		<h1>Demo</h1>
		<p>Using next and previous buttons. The difficult part is parsing out the actual value of the transform. I used the following:</p>
<pre class="js">
parseInt(transformProperty.replace(/translateX\(/i, ""));
</pre>
<p>In english, get rid of the translateX( bit, then get an integer out of the remaining info.</p>

<p>Due to use of transforms, this is hardware accelerated on iOS, but doesn't work in IE, even dev builds of IE9.</p>

			<p id="next_prev">
				<span id="prev">&laquo; Prev</span>
				<span id="next">Next &raquo;</span>				
			</p>
		<div id="container">			
			<div id="images">
				<img src="/images/Cirques.jpg" />
				<img src="/images/Clown%20Fish.jpg" />
				<img src="/images/Stones.jpg" />
				<img src="/images/Summit.jpg" />		
			</div>
		</div>
	</section>		
	
	
	
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>
</body>
</html>