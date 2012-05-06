<?
include($_SERVER['DOCUMENT_ROOT']."/constants.php");

if (isset($_GET['section']) && preg_match("/^[a-zA-Z]+/", $_GET['section'])) {
	$section = $_GET['section'];
} else {
	$section = "index";
}

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title><?= $titles[$section] ?></title>
		<meta name="description" content="<?= $descriptions[$section] ?>" />
		<meta name="google-site-verification" content="zTH7hEgeKVTkOu0F5bO5Guw9iRHWBJdCX0RpMASGZVI" />
		<link rel="stylesheet" href="/styles/default.css" media="screen" />
<script>
function block(node) {
    if (   (node.nodeName == 'LINK' && node.href == 'data:text/css,')
        || (node.nodeName == 'STYLE' && node.innerText.match(/^\/\*This block of style rules is inserted by AdBlock/))
        ) {
        node.parentElement.removeChild(node);
    }

}
document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener('DOMNodeInserted', function(e) {
    block(e.target);
    }, false);

}, false);
</script>
<script>
window.google_analytics_uacct = "UA-16444273-1";
</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>
		<script type="text/javascript" src="/js/prettify.js"></script>

		<script>
			$(document).ready(function() {
				$('.hover').bind('touchstart touchend', function(e) {
					e.preventDefault();
					$(this).toggleClass('hover_effect');
				});
			});
		</script>

		<link rel=alternate type=application/atom+xml href=/feed.xml />
		<!-- TradeDoubler site verification 2099245 -->
	</head>
	<body onload="prettyPrint()">

<!-- BuySellAds.com Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds.com Ad Code -->

	<div id="top_ads">
<!-- BuySellAds.com Zone Code -->
<div id="bsap_1273358" class="bsarocks bsap_6db88c5a69495071ea29eb766bc6ddf6"></div>
<!-- End BuySellAds.com Zone Code -->
	</div>

	<header>
		<h1><a href="/">Using CSS3 Transitions, Transforms and Animation</a></h1>
	</header>
<?
if(isset($_GET['section']) && preg_match("/^[a-zA-Z]+/", $_GET['section']) && $_GET['section'] != "all") {
$section = 	$_GET['section'];

?>
<section>
		<p>New! Find the new blog at <a href="/blog/">CSS/HTML news, techniques and information</a>!</p>
	<script type="text/javascript"><!--
	google_ad_client = "pub-7181696033265659";
	/* CSS3 Banner */
	google_ad_slot = "0969051732";
	google_ad_width = 728;
	google_ad_height = 90;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	<?include($_SERVER['DOCUMENT_ROOT']."/".$section.".php");?>

	<? include($_SERVER['DOCUMENT_ROOT']."/disqus.php"); ?>


</section>

<section id="inpage-contents">
	<h1>Contents</h1>
	<?include($_SERVER['DOCUMENT_ROOT']."/contents.php");?>
</section>

<?} else { // No page requested.
if (isset($_GET['section']) && $_GET['section'] == "all") {
	$section = "all";
} else {
	$section = "";
}
?>
	<section>
		<p>New! Find the new blog at <a href="/blog/">CSS/HTML news, techniques and information</a>!</p>
		<h1>Intro</h1>
		<p>First things first - these demos are showing of CSS transitions, transforms (2D and 3D) and animations. Currently (January 2012), 2D transforms are available in all current browsers including IE9, transitions are available in all browsers except Internet Explorer 9 and less, while 3D transforms are in Safari, Chrome, Firefox and IE10 and up. Animations are available in Safari, Chrome, Firefox 5+ and IE10. Most examples degrade nicely, so if you are using a legacy browser you can still use a site using these, you just won't get animation. 3D transforms generally don't degrade nicely, so be careful when using them.</p>
		<p>For a quick table summarising this, check out <a href="/support/">the supported browsers page</a>.</p>
		<p>None of the actual animation uses javascript, though I am using <a href="http://jquery.com">jQuery</a> to add and remove classes to add interactivity. You can use the :target pseudo selector to do this in some cases, but I'm keeping it simple and extensible here.</p>
		<p>If you are using iOS, replace hover with touch and hold wherever appropriate. (Check the script in the head if you are wondering how to replicate that effect.)</p>
		<p>For most transitions I've just used two images to keep the examples simple. Most should be easy to extend to different content (videos, text, etc) or more than two images, though you may need to add and remove appropriate classes with JS in order to get the desired effect.</p>
		<p>Of particular note is that animations that don't require a repaint (transforms and opacity) are hardware accelerated on Webkit, so if you are building a mobile site you definitely should be using this rather than things like the jQuery animate method.</p><p>To see a demo showing exactly how much faster transitions are than the older methods of doing things, check <a href="/demos/speed.php">the speed comparison</a>.</p>
		<p>To make it easier to view source and copy, I'm putting style and script tags in each section, just before the demo. This isn't recommended for production use, but in this instance it will hopefully help.</p>
		<p>Any suggestions/improvements/etc, contact me via my gmail account (rich.bradshaw), or on Twitter (<a href="http://twitter.com/richbradshaw">richbradshaw</a>).</p>
		<p>Keep reading to see the main explanations, or for some more experimental demos with less explanation, check out the <a href="/demos/">demos page</a>.</p>

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
	<script type="text/javascript"><!--
	google_ad_client = "pub-7181696033265659";
	/* CSS3 Banner */
	google_ad_slot = "0969051732";
	google_ad_width = 728;
	google_ad_height = 90;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	</section>

		<section>

		<h1>Contents</h1>

		<?
		if ($section == "all") {
			include($_SERVER['DOCUMENT_ROOT']."/indexcontents.php");
		} else {
			include($_SERVER['DOCUMENT_ROOT']."/contents.php");
		}


		?>
		<? /*
		<script type="text/javascript"><!--
		google_ad_client = "pub-7181696033265659";
		google_ad_slot = "0969051732";
		google_ad_width = 728;
		google_ad_height = 90;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		 */?>
		<? include($_SERVER['DOCUMENT_ROOT']."/disqus.php"); ?>
	</section>
		<? if ($section == "all") {
		include($_SERVER['DOCUMENT_ROOT']."/transitions.php");
		include($_SERVER['DOCUMENT_ROOT']."/transforms.php");
		include($_SERVER['DOCUMENT_ROOT']."/animations.php");

		include($_SERVER['DOCUMENT_ROOT']."/cfimg.php");

		include($_SERVER['DOCUMENT_ROOT']."/sliding.php");

		include($_SERVER['DOCUMENT_ROOT']."/flip.php");

		include($_SERVER['DOCUMENT_ROOT']."/accordions.php");

		include($_SERVER['DOCUMENT_ROOT']."/support.php");

		include($_SERVER['DOCUMENT_ROOT']."/legacy.php");

		include($_SERVER['DOCUMENT_ROOT']."/references.php");
		}
		?>

<? } ?>
<?
	include($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>
	</body>
</html>