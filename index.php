<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>Using CSS3 Transitions, Transforms and Animation</title>
		<meta name="description" content="How to use CSS transitions, transforms and animations." />
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
	</head>		
	<body>		

	<header>
		<h1><a href="/">Using CSS3 Transitions, Transforms and Animation</a></h1>
	</header>
<?
if(isset($_GET['section']) && preg_match("/^[a-zA-Z]+/", $_GET['section'])) {
$section = 	$_GET['section'];
?>
<section>
	<?include($_SERVER['DOCUMENT_ROOT']."/".$section.".php");?>
</section>
<?} else {
?>		
	<section>
		<h1>Intro</h1>
		<p>First things first - these demos are showing of CSS transitions, transforms (2D and 3D) and animations. Currently (May 2010), transitions and 2D transforms are available in all current browsers (at least in a dev build) apart from Internet Explorer, 3D transforms and animations are only in Safari. Most examples degrade nicely, so if you are using a legacy browser you can still use a site using these, you just won't get animation. 3D transforms generally don't degrade nicely, so be careful when using them.</p>
		<p>None of the animation uses javascript, though I am using jQuery to add and remove classes to add interactivity. You can use the :target pseudo selector to do this in some cases, but I'm keeping it simple here.</p>
		<p>If you are using iPhone OS, replace hover with touch and hold wherever appropriate. (Check the script in the head if you are wondering how to replicate that effect.)</p>
		<p>For most transitions I've just used two images to keep the examples simple. Most should be easy to extend to different content (videos, text, etc) or more than two images.</p>
		<p>Of particular note is that these animations are hardware accelerated on iPhone OS, so if you are building a mobile site you definitely should be using this.</p>
		<p>To make it easier to view source and copy, I'm putting style and script tags in each section, just before the demo. This isn't recommended, but in this instance it will hopefully help.</p>
		<p>Any suggestions/improvements/etc, contact me via my gmail account (rich.bradshaw), or on Twitter (<a href="http://twitter.com/richbradshaw">richbradshaw</a>).</p>
		<p>For some more demos with less explanation, check out the <a href="/demos/">demos page</a>.</p>
		
		<h2>Will it work for me?</h2>

		<p>Green means yes, red means no.</p>
		<div class="half left center">
		<p id="bs_transitions">CSS Transitions</p>
		<p id="bs_2dtrans">CSS 2D Transforms</p>
		</div>
		<div class="half right center">		
		<p id="bs_3dtrans">CSS 3D Transforms</p>		
		<p id="bs_animation">CSS Animations</p>
		</div>
		<div class="clear"></div>
	</section>

		<section>
		<h1>Contents</h1>
		<ol>
			<li><a href="#how2transitions">How to use transitions</a></li>
			<li><a href="#how2transforms">How to use transforms</a></li>
			<li><a href="#how2animation">How to use animations</a></li>			
			<li><a href="#cfimg">Cross fading images</a></li>			
				<ol>
					<li><a href="#cfimg1">On hover</a></li>
					<li><a href="#cfimg2">On button press</a></li>
					<li><a href="#cfimg3">With timer</a></li>
					<li><a href="#cfimg4">More than just fades</a></li>					
				</ol>
			<li><a href="#sliding">Sliding content</a></li>
				<ol>
					<li><a href="#slide1">Sliding by transitions</a></li>
					<li><a href="#slide2">Sliding by transitions + translations</a></li>				
				</ol>
			<li><a href="#flip">Flipping content</a></li>
			<li><a href="#accordion">Accordions</a></li>
			<li><a href="#support">Notes on browser support</a></li>
			<li><a href="#legacy">How will it look in legacy browsers?</a></li>
			<li><a href="#references">References</a></li>			
		</ol>
	</section>
		<?
		include($_SERVER['DOCUMENT_ROOT']."/transitions.php");
		include($_SERVER['DOCUMENT_ROOT']."/transforms.php");
		include($_SERVER['DOCUMENT_ROOT']."/animations.php");
				
		include($_SERVER['DOCUMENT_ROOT']."/cfimg.php");

		include($_SERVER['DOCUMENT_ROOT']."/sliding.php");
		
		include($_SERVER['DOCUMENT_ROOT']."/flip.php");
		
		include($_SERVER['DOCUMENT_ROOT']."/accordions.php");		
		?>
		
		
		<section id="support">
			<h1>Notes on browser support</h1>
			<p>Everything here has been available in at least one browser since 2008. Firefox and Opera have only added support in 2010, hence the reason this technology is becoming more mainstream.</p>
			<p>As of May 2010, Microsoft have announced no plans to support this in Internet Explorer, though the IE9 group have mentioned them briefly in their blog.</p>
			<div class="half left">
				<h2>CSS Transitions</h2>
				<p>First introduced</p>
				<ul>
					<li>Safari 3.2: 13/11/2008</li>
					<li>Firefox 4.0: Late 2010</li>
					<li>Chrome 1.0: 02/09/2008</li>
					<li>Opera 10.5: 02/03/2010</li>			
				</ul>
				<h2>CSS 2D Transformations</h2>
				<p>First introduced</p>
				<ul>
					<li>Safari 3.2: 13/11/2008</li>
					<li>Firefox 3.5: 30/06/2009</li>
					<li>Chrome 1.0: 02/09/2008</li>
					<li>Opera 10.5: 02/03/2010</li>			
				</ul>
			</div>
			<div class="half right">
				<h2>CSS Animations</h2>
				<p>First introduced</p>
				<ul>
					<li>Safari 4.0: 11/06/2008</li>
					<li>Chrome 1.0: 02/09/2008</li>			
				</ul>				
				<h2>CSS 3D Transformations</h2>
				<p>First introduced</p>
				<ul>
					<li>Safari 4.0: 11/06/2008</li>
				</ul>
			</div>
			<div class="clear"></div>	
		</section>

		<section id="legacy">
			<h1>How will it look in legacy browsers?</h1>
			<p>With all these examples, no attempt has been made to hack around browsers with no support, other than adding the opacity filter in IE where appropriate. This ends up as two lines, as they changed it to a different incorrect syntax between versions 7 and 8.</p>
			<p>In most cases, the transition happens, but with no animation - you see the beginning and end frames but nothing in between. Depending on the site, this may or may not be acceptable. <a href="http://www.modernizr.com">Modernizr</a> provides a nice feature detection library, allowing you to easily add different CSS/JS for legacy browsers.</p>
		</section>
		<section id="references">
			<h1>References</h1>
			<p>Where to look to find out more.</p>
			<ul>
				<li><a href="http://www.w3.org/TR/css3-transitions/">W3C: CSS Transitions Module Level 3</a></li>
				<li><a href="http://www.w3.org/TR/css3-2d-transforms/">W3C: CSS 2D Transforms Module Level 3</a></li>
				<li><a href="http://www.w3.org/TR/css3-3d-transforms/">W3C: CSS 3D Transforms Module Level 3</a></li>
				<li><a href="http://www.w3.org/TR/css3-animations/">W3C: CSS Animations Module Level 3</a></li>												
				<li><a href="http://webkit.org/blog/">Surfin' Safari (check the archives)</a></li>
				<li><a href="http://www.opera.com/docs/specs/presto23/css/transitions/">CSS3 Transitions support in Opera Presto 2.3</a></li>
			</ul>
		</section>
<? } ?>		
<?		
	include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
?>
	</body>
</html>