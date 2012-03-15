<?
include($_SERVER['DOCUMENT_ROOT']."/constants.php");

if (isset($_GET['rows']) && !empty($_GET['rows'])) {
	$rows = preg_replace("/[^0-9]/","",$_GET['rows']);
} else {
	$rows = 48;
}

if ($rows > 1000) {
	$rows = 1000;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>Speed/framerate comparison between jQuery and CSS3 transitions</title>
		<meta name="description" content="What's got the best framerate: jQuery animate or CSS3 transitions?" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>		
		<style>
		#transitions, #jquery {
			outline:1px red solid;
			width:720px;
			overflow:hidden;
		}
		#transitions div, #jquery div {
			width:5px;
			height:5px;
			outline:1px black solid;
			float:left;
			margin:5px;
		}
		#transitions div {
			<?= prefix("transition", "all 1s ease-in-out") ?>
		}
		#transitions.active div {
			background-color:black;
			outline:1px red solid;
		}
		
		.button {
			display:block;
			width:100px;
			height:20px;
			margin-bottom:10px;
			border:1px red solid;
			border-bottom:none;
			text-align:center;
			margin:0 auto;
			<?= prefix("transition", "none") ?>			
		}
		</style>
		<script>
		// jQuery doesn't include a native way to animate color. If anyone knows of a better plugin to use here, please let me know!
	(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.curCSS(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
		
				
		$(function() {
			
			$("#transition_button").on("click", function(){
				$("#transitions").toggleClass('active');
				return false;
			});
			
			$("#jquery_button").on("click", function(){
				$("#jquery").toggleClass('active');
				
				if ($("#jquery").hasClass('active')) {
					$("#jquery div").animate({
						backgroundColor: "black",
						outlineColor: "red"
					  }, 1000 );					
				} else {
					$("#jquery div").animate({
						backgroundColor: "white",
						outlineColor: "black"
					  }, 1000 );					
				}
				
				return false;
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
		<h1>Why are CSS3 transitions worth using?</h1>
	</header>
	
	<section>
		<p><a href="/demos/">Back to demos</a> or (probably better!) <a href="/">Main Tutorial</a>.</p>
	</section>
	
	<section>
		<p class="note">Add a rows parameter to the URL to try different amounts of elements. (e.g. <a href="/demos/speed.php?rows=10">10 rows</a>)</p>
		<p>A head to head comparison of CSS transitions and jQuery's animate. Rather than setting a timer to run repeatedly, transitions are handled natively by the browser. In my rather unscientific testing, transitions are always quicker, running with a higher frame rate, especially with high numbers of elements. They also have the advantage that colours can be animated easily, rather than having to rely on plugins.</p>
		<h1>Demo 1 - CSS3 transitioning multiple elements</h1>
		<p>Click the button to toggle the transition. Scroll down to see the jQuery version.</p>
		<a href="#" id="transition_button" class="button">Click me!</a>
		<div id="transitions" class="hover">
			<? for ($i=0;$i<$rows*48;$i++) { ?>
				<div></div>
			<? } ?>

		</div>
		<div style="clear:both"></div>
		<br />
		<hr />
		<h1>Demo 2 - jQuery animate multiple elements</h1>
		<p>Click below to see the animation. Scroll up to see the CSS3 transitions version.</p>
		<a href="#" id="jquery_button" class="button">Click me!</a>
		<div id="jquery">
			<? for ($i=0;$i<$rows*48;$i++) { ?>
				<div></div>
			<? } ?>

		</div>
		<div style="clear:both"></div>	
		
		<h2>Why such a huge difference?</h2>
		<p>A short answer is that jQuery is written in javascript, where as transitions are written in C++. However, that doesn't really do justice for the differences in the implementation.</p>
		<p>To examine more closely what happens here, I used the Timeline view in the Webkit Inspector, and recorded the section whilst I clicked the buttons.</p>
		<h3>CSS Transitions</h3>
		<img src="/images/transitions_timeline.PNG" alt="CSS3 transitions timeline" />
		<p>The image above shows the full extent of the animation above. There are a couple of things to notice here. Firstly the frame rate has been capped so unnecessary calculations and repaints aren't done. Secondly, only the area needed is repainted, in this case, the 712px &times; 652px rectangle surrounding the squares. The browser is able to decide on the number of frames, and how much things should change up front, and is able to sensibly decide what to do. The animation is either going to complete, or pause/stop part way through - we aren't going to suddenly be animating different properties part way through.</p>
		<p>In this animation, only around 40 events happened.</p>
		<h3>jQuery Animate</h3>
		<img src="/images/jquery_timeline.PNG" alt="jQuery animate timeline" />
		<p>A different story is shown here. Recalculate Style is run for every element that needs to be animated. This means that literally thousands (around 9,500) styles are recalculated during the animation, even though they are all identical. Because of this, on my machine, only a small number of repaints are completed. The browser can't predict up front what is going to happen, as the JS could do anything at any time - there is no guarantee that the animation is a simple tweening animation.</p>
		<p>Reducing the number of elements by a large margin shows that usually, the order is: 1) Calculate all styles, 2) Set timers and Paint. With 10 rows of squares above, the first step takes around 0.4 seconds, meaning there is a fairly noticeable lag before the animation starts. For 10 rows of elements just over 1000 events (paints, calculate style etc) occur.</p>
		<p>For a look at another example in javascript with a much more optimised animate function, have a look at <a href="http://bl.ocks.org/d/1616423/">this example</a> which was written using the <a href="http://mbostock.github.com/d3/">d3.js</a> library. This provides some evidence that the jQuery animate function could be optimised somewhat.</p>
		<h3>Conclusion</h3>
		<p>Javascript animations based on timers can never be as quick as native animations, as they don't have access to enough of the browser to make the same optimisations. These animations should be used as a fallback only in legacy browsers. Now that <a href="/support/">browser support</a> is so universal, there is rarely a case where javascript animations are preferable.</p>

	<?	include($_SERVER['DOCUMENT_ROOT']."/disqus.php"); ?>	

	</section>
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>	
	</body>
</html>