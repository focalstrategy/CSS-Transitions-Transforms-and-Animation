<?
include($_SERVER['DOCUMENT_ROOT']."/constants.php");

if (isset($_GET['rows']) && !empty($_GET['rows'])) {
	$rows = preg_replace("/[^0-9]/","",$_GET['rows']);
} else {
	$rows = 48;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>Speed/framerate comparison between jQuery and CSS3 transitions</title>
		<meta name="description" content="A fancy CSS3 image slider/carousel" />
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
		#transitions:hover div, #transitions.hover_effect div {
			background-color:black;
			outline:1px red solid;
		}
		</style>
		<script>
	
		$(document).ready(function() {
			$('.hover').bind('touchstart touchend', function(e) {
				e.preventDefault();
				$(this).toggleClass('hover_effect');
			});
		});
		(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.curCSS(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
		
		$(function() {
			$("#jquery").hover(function(){
				$("#jquery div").animate({
					backgroundColor: "black",
					outline: "1px red solid"
				  }, 1000 );
			}, function(){
				$("#jquery div").animate({
					backgroundColor: "white",
					outline: "1px black solid"
				  }, 1000 );				
			});
		});
		</script>
	</head>		
	<body>		

	<header>
		<h1>Speed test!</h1>
	</header>
	
	<section>
		<p><a href="/demos/">Back to demos</a></p>
	</section>
	
	<section>
		<p class="note">Add a rows parameter to the URL to try different amounts of elements. (e.g. <a href="/demos/speed.php?rows=10">10 rows</a>)</p>
		<p>A head to head comparison of CSS transitions and jQuery's animate. Rather than setting a timer to run repeatedly, transitions are handled natively by the browser. In my rather unscientific testing, transitions are always quicker, running with a higher framerate, especially with high numbers of elements. They also have the advantage that colours can be animated easily, rather than having to rely on plugins.</p>
		<h1>Demo 1 - transitioning multiple elements</h1>
		<p>Hover to see the transition. Scroll down to see the jQuery version.</p>
		<div id="transitions" class="hover">
			<? for ($i=0;$i<$rows*48;$i++) { ?>
				<div></div>
			<? } ?>

		</div>
		<div style="clear:both"></div>
		<h1>Demo 2 - jQuery animate multiple elements</h1>
		<p>Hover to see the animation. Scroll up to see the CSS3 transitions version.</p>
		<p></p>
		<div id="jquery">
			<? for ($i=0;$i<$rows*48;$i++) { ?>
				<div></div>
			<? } ?>

		</div>
		<div style="clear:both"></div>		
	</section>
	<?		
		include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
	?>	
	</body>
</html>