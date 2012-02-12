<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>CSS3 next/prev button slider</title>
		<meta name="description" content="CSS3 next/prev button slider" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>		
		<style>
			#images {
				-webkit-transition:all 0.6s ease-in-out;
				-moz-transition:all 0.6s ease-in-out;
				-o-transition:all 0.6s ease-in-out;
				-ms-transition:all 0.6s ease-in-out;				
				transition:all 0.6s ease-in-out;															
			}
			
		
			#next_prev {
				text-align:center;
				width: 450px;
				margin: 0 auto 10px;				
				-webkit-user-select:none;
			}
			#next_prev span {
				padding-right:2em;
				cursor:pointer;
			}
			#next_prev span:hover {
				text-decoration:underline;
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
		<p>A slider that uses next and previous buttons. Check the code to see how.</p>

		<p>Due to use of 3D transforms, this is hardware accelerated on iOS.</p>

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

<? include($_SERVER['DOCUMENT_ROOT']."/disqus.php"); ?>			
	</section>		
	
	<script>
		function slide(newX) {
			if (Modernizr.csstransforms3d) {
				$("#images").css("-webkit-transform","translate3d("+newX+"px,0,0)");
				$("#images").css("-moz-transform","translate3d("+newX+"px,0,0)");
				$("#images").css("-o-transform","translate3d("+newX+"px,0,0)");
				$("#images").css("-ms-transform","translate3d("+newX+"px,0,0)");
				$("#images").css("transform","translate3d("+newX+"px,0,0)");			
			} else {
				$("#images").css("-webkit-transform","translateX("+newX+"px)");
				$("#images").css("-moz-transform","translateX("+newX+"px)");
				$("#images").css("-o-transform","translateX("+newX+"px)");
				$("#images").css("-ms-transform","translateX("+newX+"px)");				
				$("#images").css("transform","translateX("+newX+"px)");					
			}
		}
	
	
		$(document).ready(function() {
			var width = $("#images img").width();
			var maxWidth = width * $("#images img").length;
			
			var currentTranslateX = 0;
		
			$("#next").click(function() {
				if (currentTranslateX - width > -maxWidth) {
					currentTranslateX -= width;
					slide(currentTranslateX);					
				}
			});
			
			$("#prev").click(function() {
				
				if (currentTranslateX + width <= 0) {
					currentTranslateX += width;
					slide(currentTranslateX);						
				}
			});				
	
		});	
	</script>
	
	
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>
	
</body>
</html>