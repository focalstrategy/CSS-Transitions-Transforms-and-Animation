<h2 id="cfimg1">Demo 1 - One image to another, on hover (transitions)</h2>
<h3>Plan</h3>
<ol>
	<li>Put one image on top of the other</li>
	<li>Change the opacity of the top image on hover</li>
</ol>
<h3>Demo</h3>
<style>
	#cf {
		position:relative;
		height:281px;
		width:450px;
		margin:0 auto;
	}
	#cf img {
		position:absolute;
		left:0;
		-webkit-transition: opacity 1s ease-in-out;
		-moz-transition: opacity 1s ease-in-out;
		-o-transition: opacity 1s ease-in-out;
		-ms-transition: opacity 1s ease-in-out;		
		transition: opacity 1s ease-in-out;
	}
	
	#cf img.top:hover, #cf img.hover_effect {
		opacity:0;
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
	}
	
</style>
<div id="cf" class="shadow">
	<img class="bottom" src="/images/Stones.jpg" />
	<img class="top hover" src="/images/Summit.jpg" />
</div>
<h3>Code</h3>
<p>First up, the HTML markup. Without CSS enabled, you just get two images. Remember to add alt text for production use.</p>
<pre class="prettyprint lang-html">
&lt;div id=&quot;cf&quot;&gt;
	&lt;img class=&quot;bottom&quot; src=&quot;/tests/images/Stones.jpg&quot; /&gt;
	&lt;img class=&quot;top&quot; src=&quot;/tests/images/Summit.jpg&quot; /&gt;
&lt;/div&gt;
</pre>
<p>Then the CSS:</p>
<pre class="prettyprint lang-css">
#cf {
	position:relative;
	height:281px;
	width:450px;
	margin:0 auto;	
}
#cf img {
	position:absolute;
	left:0;
	-webkit-transition: opacity 1s ease-in-out;
	-moz-transition: opacity 1s ease-in-out;
	-o-transition: opacity 1s ease-in-out;
	-ms-transition: opacity 1s ease-in-out;	
	transition: opacity 1s ease-in-out;
}

#cf img.top:hover {
	opacity:0;
}			
</pre>