<section id="legacy">
	<h1>How will it look in legacy browsers?</h1>
	<p>With all these examples, no attempt has been made to hack around browsers with no support, other than adding the opacity filter in IE where appropriate. This ends up as two lines, as they changed it to a different incorrect syntax between versions 7 and 8.</p>
	<p>In most cases, the transition happens, but with no animation - you see the beginning and end frames but nothing in between. Depending on the site, this may or may not be acceptable. <a href="http://www.modernizr.com">Modernizr</a> provides a nice feature detection library, allowing you to easily add different CSS/JS for legacy browsers.</p>
</section>