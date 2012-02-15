<section id="accordions">
<h1>Accordions</h1>
<h3>Plan</h3>
<ol>
	<li>Mark up a few sections with a title and content</li>
	<li>Set the height to all but the first to 0, and overflow to hidden on all of them</li>
	<li>Bind click events on the titles to change the heights</li>
</ol>
<h3>Demo</h3>
<style>
#accordion section,	#accordion .pointer, #accordion h1, #accordion p {
	-webkit-transition: all 1.0s ease-in-out;
	-moz-transition: all 1.0s ease-in-out;
	-o-transition: all 1.0s ease-in-out;
	-ms-transition: all 1.0s ease-in-out;
	transition: all 1.0s ease-in-out;
}
#accordion {
	margin-bottom:30px;
}
#accordion h1 {
	font-size:20px;
	background-color:rgba(255,0,0,0.3);
	margin:0;
	padding: 10px 10px 10px 30px;
}

#accordion h1 a {
	color:black;		
}
#accordion section {
	overflow:hidden;
	height:220px;
	border:1px #333 solid;
}
#accordion p {
	padding:0 10px;
	color:black;
}
#accordion section.ac_hidden p:not(.pointer) {
	color:#fff;
}

#accordion section.ac_hidden {
	height:44px;
}
#accordion .pointer {
	padding:0;
	margin:10px 0 0 6px;
	line-height:20px;
	width:13px;
	position:absolute;		
}
#accordion section:not(.ac_hidden) h1 {
	background-color:rgba(255,0,0,0.7);
}

#accordion section:not(.ac_hidden) .pointer {
	display:block;
	-webkit-transform:rotate(90deg);
	-moz-transform:rotate(90deg);
	-o-transform:rotate(90deg);
	-ms-transform:rotate(90deg);
	transform:rotate(90deg);						
	padding:0;
}
</style>
<script>
$(document).ready(function() {
	$("#accordion section h1").click(function(e) {
		$(this).parents().siblings("section").addClass("ac_hidden");
		$(this).parents("section").removeClass("ac_hidden");
		
		e.preventDefault();
	});
});
</script>
<div id="accordion">
	<section id="item1">
		<p class="pointer">&#9654;</p><h1><a href="#">A long paragraph</a></h1>
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
	</section>
	<section id="item2" class="ac_hidden">
		<p class="pointer">&#9654;</p><h1><a href="#">A medium paragraph</a></h1>				
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	</section>
	<section id="item3" class="ac_hidden">
		<p class="pointer">&#9654;</p><h1><a href="#">Two short paragraphs</a></h1>				
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
	</section>	
</div>
<p>Not sure if the use/abuse of Unicode is really a good idea, but you can see that it's pretty easy to get a simple accordion working.</p>
<p>I'm using classes again here to define different states, then using jQuery to turn them on and off. As always, I could use the :target pseudo selector, but I'd want to use preventDefault() onClick anyway to prevent the page skipping up and down, so I might as well just do it all in jQuery.</p>
<h3>The Code</h3>
<p>HTML:</p>
<pre class="prettyprint lang-html">
&lt;div id=&quot;accordion&quot;&gt;
	&lt;section id=&quot;item1&quot;&gt;
		&lt;p class=&quot;pointer&quot;&gt;&amp;#9654;&lt;/p&gt;&lt;h1&gt;&lt;a href=&quot;#&quot;&gt;A long paragraph&lt;/a&gt;&lt;/h1&gt;
		&lt;p&gt;Pellentesque habitant... &lt;/p&gt;
	&lt;/section&gt;
	&lt;section id=&quot;item2&quot; class=&quot;ac_hidden&quot;&gt;
		&lt;p class=&quot;pointer&quot;&gt;&amp;#9654;&lt;/p&gt;&lt;h1&gt;&lt;a href=&quot;#&quot;&gt;A medium paragraph&lt;/a&gt;&lt;/h1&gt;				
		&lt;p&gt;Pellentesque habitant... &lt;/p&gt;
	&lt;/section&gt;
	&lt;section id=&quot;item3&quot; class=&quot;ac_hidden&quot;&gt;
		&lt;p class=&quot;pointer&quot;&gt;&amp;#9654;&lt;/p&gt;&lt;h1&gt;&lt;a href=&quot;#&quot;&gt;Two short paragraphs&lt;/a&gt;&lt;/h1&gt;				
		&lt;p&gt;Pellentesque habitant... &lt;/p&gt;
		&lt;p&gt;Pellentesque habitant... &lt;/p&gt;		
	&lt;/section&gt;	
&lt;/div&gt;	
</pre>
<p>CSS:</p>
<pre class="prettyprint lang-css">
#accordion section,	#accordion .pointer, #accordion h1, #accordion p {
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	-ms-transition: all 0.5s ease-in-out;	
	transition: all 0.5s ease-in-out;
}
#accordion {
	margin-bottom:30px;
}
#accordion h1 {
	font-size:20px;
	background-color:rgba(255,0,0,0.3);
	margin:0;
	padding: 10px 10px 10px 30px;
}

#accordion h1 a {
	color:black;		
}
#accordion section {
	overflow:hidden;
	height:220px;
	border:1px #333 solid;
}
#accordion p {
	padding:0 10px;
	color:black;
}
#accordion section.ac_hidden p:not(.pointer) {
	color:#fff;
}

#accordion section.ac_hidden {
	height:44px;
}
#accordion .pointer {
	padding:0;
	margin:10px 0 0 6px;
	line-height:20px;
	width:13px;
	position:absolute;		
}
#accordion section:not(.ac_hidden) h1 {
	background-color:rgba(255,0,0,0.7);		
}

#accordion section:not(.ac_hidden) .pointer {
	display:block;
	-webkit-transform:rotate(90deg);
	-moz-transform:rotate(90deg);
	-o-transform:rotate(90deg);
	-ms-transform:rotate(90deg);	
	transform:rotate(90deg);						
	padding:0;
}
</pre>
<p>Plus a bit of javascript to turn the classes on and off.</p>
<pre class="prettyprint lang-js">
$(document).ready(function() {
	$("#accordion section h1").click(function(e) {
		$(this).parents().siblings("section").addClass("ac_hidden");
		$(this).parents("section").removeClass("ac_hidden");

		e.preventDefault();
	});
});
</pre>
</section>