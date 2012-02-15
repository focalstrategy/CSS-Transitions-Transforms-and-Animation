<h2 id="cfimg2">Demo 2 - One image to another, when a button is pressed (transitions)</h2>
<h3>Plan</h3>
<p>Same as before, but instead of using the :hover pseudo class, we are going to use javascript to add a toggle a class. I'm using jQuery here because it's easy to understand, though you could just use plain old JS.</p>
<h3>Demo</h3>
<style>
	#cf2 {
		position:relative;
		height:281px;
		width:450px;
		margin:0 auto;
	}
	#cf2 img {
		position:absolute;
		left:0;
		-webkit-transition: opacity 1s ease-in-out;
		-moz-transition: opacity 1s ease-in-out;
		-o-transition: opacity 1s ease-in-out;
		-ms-transition: opacity 1s ease-in-out;		
		transition: opacity 1s ease-in-out;
	}
	
	#cf2 img.transparent {
		opacity:0;
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);		
	}
	#cf_onclick {
		cursor:pointer;
	}
	
</style>
<script>
$(document).ready(function() {
	$("#cf_onclick, #cf2 img.top").click(function() {
		$("#cf2 img.top").toggleClass("transparent");
	});
});
</script>
<div id="cf2" class="shadow">
	<img class="bottom" src="/images/Stones.jpg" />
	<img class="top" src="/images/Summit.jpg" />
</div>
<p class="center" id="cf_onclick">Click me to toggle</p>
<h3>Code</h3>
<p>First up, the HTML markup. Again, with no CSS enabled, you just get two images.</p>
<pre class="prettyprint lang-html">
&lt;div id=&quot;cf2&quot; class=&quot;shadow&quot;&gt;
	&lt;img class=&quot;bottom&quot; src=&quot;/tests/images/Stones.jpg&quot; /&gt;
	&lt;img class=&quot;top&quot; src=&quot;/tests/images/Summit.jpg&quot; /&gt;
&lt;/div&gt;
&lt;p id=&quot;cf_onclick&quot;&gt;Click me to toggle&lt;/p&gt;
</pre>
<p>Then the CSS. I've added a class with the opacity value.</p>
<pre class="prettyprint lang-css">
#cf2 {
	position:relative;
	height:281px;
	width:450px;
	margin:0 auto;
}
#cf2 img {
	position:absolute;
	left:0;
	-webkit-transition: opacity 1s ease-in-out;
	-moz-transition: opacity 1s ease-in-out;
	-o-transition: opacity 1s ease-in-out;
	-ms-transition: opacity 1s ease-in-out;	
	transition: opacity 1s ease-in-out;
}

#cf2 img.transparent {
	opacity:0;
}
#cf_onclick {
	cursor:pointer;
}			
</pre>
<p>Then the extremely short JS. Note that the browser is smart enough to realise that it can animate to the new properties, I didn't have to set them in javascript (thought that works too).</p>
<pre class="prettyprint lang-js">
$(document).ready(function() {
	$("#cf_onclick").click(function() {
		$("#cf2 img.top").toggleClass("transparent");
	});
});			
</pre>
<p>Have a look at <a href="/demos/multiple_images.php">the multiple image demo</a> to see how to extend this idea to more than two images.</p>