<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>CSS Filters and image crossfades</title>
		<meta name="description" content="A simple gallery making use of CSS filters and crossfades." />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<style>
		#gallery {
			width:600px;
			margin:20px auto;
			outline:1px solid black;

		}

		#main, #thumbs img {
			-webkit-transition:all 0.6s ease-in-out;
			-moz-transition:all 0.6s ease-in-out;
			-ms-transition:all 0.6s ease-in-out;
			-o-transition:all 0.6s ease-in-out;
			transition:all 0.6s ease-in-out;	
		}

		#main {
			height:510px;	
			padding-top:10px;
			background-position:top center;
			background-repeat:no-repeat;

		}

		#thumbs {
			overflow:hidden;
			height:auto;	
			padding:0 0 0 10px;
		}
		#thumbs a {
			display:block;
			height:150px;
			width:100px;
			float:left;
			margin:8px;	
		}
		#thumbs img {
			width:100px;

			-webkit-filter:grayscale(1);	
			-moz-filter:grayscale(1);	
			-ms-filter:grayscale(1);	
			-o-filter:grayscale(1);	
			filter:grayscale(1);				
		}

		#thumbs img:hover, #thumbs a:target img, #thumbs img.active {
			-webkit-filter:grayscale(0);	
			-moz-filter:grayscale(0);	
			-ms-filter:grayscale(0);	
			-o-filter:grayscale(0);	
			filter:grayscale(0);
		}
		</style>
		<script>
		// There's nothing wrong with using code from the jQuery docs right?
		$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?", {
			tags: "cupcake",
			tagmode: "any",
			format: "json"
		},function(data) {
			$.each(data.items, function(i,item){
				if (i == 0) {
					$("#main").css("background-image", "url("+item.media.m.replace("_m.jpg",".jpg")+")");
				}

				$("<img/>").attr("src", item.media.m.replace("_m.jpg",".jpg")).wrap("<a id=\"image"+i+"\" href=\"#image"+i+"\" />").parent().appendTo("#thumbs");
				if ( i == 9 ) return false;
			});
		});

		$(function(){
			$("#thumbs").on("click", "img", function(e){
				$("#thumbs img").removeClass("active");
				$(this).addClass("active");
				
				$("#main").css("background-image","url("+$(this).attr("src")+")");
				return false;
			});			
		});		
		</script>		
	</head>		
	<body>		

	<header>
		<h1>CSS Filters and Fades</h1>
	</header>
	
	<section>
		<p><a href="/demos/">Back to demos</a></p>
	</section>
	
	<section>
		<h1>Demo</h1>
		<p>A Flickr powered image gallery that uses crossfades by animating background-image. Note how the browser animates the dimensions automatically if you go from landscape to portrait.</p>		
		<p>CSS Filters are used to grey out the thumbs that aren't active.</p>
		<p class="note">When this was written, it only worked in browsers using Webkit builds from January 2012 and newer.</p>

		<div id="gallery">
			<div id="main"></div>
			<div id="thumbs"></div>
		</div>

<? include($_SERVER['DOCUMENT_ROOT']."/disqus.php"); ?>			
	</section>		
	
	
	
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>
</body>
</html>