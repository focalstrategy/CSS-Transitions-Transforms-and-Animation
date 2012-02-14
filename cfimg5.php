<h2 id="cfimg6">Demo 5 - Animating the background-image property</h2>
<p class="note">Right now this only works on webkits built from 2012 onwards. It's not part of the spec (yet?).</p>
<h3>Plan</h3>
<ol>
	<li>Make a div with a width and height</li>
	<li>Change the background-image property</li>
</ol>
<h3>Demo</h3>
<style>
	#cf6_image {
		margin:0 auto;		
		width:450px;
		height:281px;
		-webkit-transition: background-image 1s ease-in-out;
		-moz-transition: background-image 1s ease-in-out;
		-o-transition: background-image 1s ease-in-out;
		-ms-transition: background-image 1s ease-in-out;		
		transition: background-image 1s ease-in-out;
		
		background-image:url("/images/Stones.jpg");
	}
	
	#cf6_image:hover, #cf6_image.hover_effect {
		background-image:url("/images/Summit.jpg");		
	}
	
</style>
<div id="cf6_image"></div>
<h3>Code</h3>
<p>This only works on Chrome 18+ and on Webkit Nightlies built in 2012 onwards. It seems to be a side effect of the CSS4 crossfading work, though this is a lot more useful.</p>
<pre class="html">
&lt;div id=&quot;cf6_image&quot; class=&quot;shadow&quot;&gt;&lt;/div&gt;
</pre>
<p>Then the CSS:</p>
<pre class="css">
#cf6_image {
	margin:0 auto;		
	width:450px;
	height:281px;
	transition: background-image 1s ease-in-out;
	
	background-image:url("/images/Stones.jpg");
}

#cf6_image:hover {
	background-image:url("/images/Summit.jpg");		
}	
</pre>
<p>Pretty cool - this can easily be extended by simply changing the background-image property with JS, and makes things much much simpler. I'm not sure if this behaviour is part of the spec or not, and I haven't seen support anywhere other than in the afore mentioned browsers.</p>
<p>For a slightly more detailed example, have a look at <a href="/demos/filters-and-fades.php">a simple gallery using filters and fades</a>.</p>