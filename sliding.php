<section id="sliding">
	<h1>Sliding content</h1>
	<p>Often used as part of an image gallery or to show additional information, again this can be done in javascript by gradually changing the padding of elements. This often looks choppy on mobile devices, and frames can be missed if the animation is quick. CSS transitions plus transforms help out to make this a simple effect to create.</p>
	<p>Have a look at <a href="/demos/imageslider.php">a more complete example</a> on the <a href="/demos/">demos page</a>.</p>
	<?
	include($_SERVER['DOCUMENT_ROOT']."/slide1.php");
	include($_SERVER['DOCUMENT_ROOT']."/slide2.php");		
	?>
</section>