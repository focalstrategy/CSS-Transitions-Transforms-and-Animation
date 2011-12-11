<h2 id="slide1">Demo 1 - Sliding by adding padding (transitions)</h2>
<p>For more information on these, check this updated post: <a href="http://focalstrategy.com/blog/2010/08/howto/an-animated-image-slider-that-works-in-internet-explorer/">cross browser implementation</a>.
<h3>Plan</h3>
<ol>
	<li>Create a container with overflow set to hidden.</li>
	<li>Inside that container, create another container with width equal to the width of all the images added together.</li>
	<li>Inside that, float the images left with no padding or margin.</li>
	<li>When clicking a control, change the left position of the second container to show the required image.</li>
</ol>
<h3>Demo</h3>
<style>
	p#slide1_controls {
		text-align:center;
	}
	#slide1_controls span {
		padding-right:2em;
		cursor:pointer;
	}
	#slide1_container {
		width:450px;
		height:281px;
		overflow:hidden;
		position:relative;
		margin:0 auto;
	}
	#slide1_images {
		position:absolute;
		left:0px;
		width:1800px;
		-webkit-transition:all 1.0s ease-in-out;
		-moz-transition:all 1.0s ease-in-out;
		-o-transition:all 1.0s ease-in-out;
		-ms-transition:all 1.0s ease-in-out;		
		-transition:all 1.0s ease-in-out;
	}
	#slide1_images img {
		padding:0;
		margin:0;
		float:left;
	}
</style>
<script>
	$(document).ready(function() {
		$("#slide1-1").click(function() {
			$("#slide1_images").css("left","0");
			$("#slide1_controls span").removeClass("selected");
			$(this).addClass("selected");
		});
		$("#slide1-2").click(function() {
			$("#slide1_images").css("left","-450px");
			$("#slide1_controls span").removeClass("selected");
			$(this).addClass("selected");			
		});
		$("#slide1-3").click(function() {
			$("#slide1_images").css("left","-900px");
			$("#slide1_controls span").removeClass("selected");
			$(this).addClass("selected");			
		});
		$("#slide1-4").click(function() {
			$("#slide1_images").css("left","-1350px");
			$("#slide1_controls span").removeClass("selected");
			$(this).addClass("selected");			
		});
	});	
</script>
<div id="slide1_container" class="shadow">
	<div id="slide1_images">
		<img src="/images/Cirques.jpg" />
		<img src="/images/Clown%20Fish.jpg" />
		<img src="/images/Stones.jpg" />
		<img src="/images/Summit.jpg" />		
	</div>
</div>
<p id="slide1_controls"><span class="selected" id="slide1-1">Image 1</span><span id="slide1-2">Image 2</span><span id="slide1-3">Image 3</span><span id="slide1-4">Image 4</span></p>
<h3>Code</h3>
<p>Firstly, the mark up:</p>
<pre class="html">
&lt;div id=&quot;slide1_container&quot;&gt;
	&lt;div id=&quot;slide1_images&quot;&gt;
		&lt;img src=&quot;/images/Cirques.jpg&quot; /&gt;
		&lt;img src=&quot;/images/Clown%20Fish.jpg&quot; /&gt;
		&lt;img src=&quot;/images/Stones.jpg&quot; /&gt;
		&lt;img src=&quot;/images/Summit.jpg&quot; /&gt;		
	&lt;/div&gt;
&lt;/div&gt;
&lt;p id=&quot;slide1_controls&quot;&gt;
	&lt;span id=&quot;slide1-1&quot;&gt;Image 1&lt;/span&gt;
	&lt;span id=&quot;slide1-2&quot;&gt;Image 2&lt;/span&gt;
	&lt;span id=&quot;slide1-3&quot;&gt;Image 3&lt;/span&gt;
	&lt;span id=&quot;slide1-4&quot;&gt;Image 4&lt;/span&gt;
&lt;/p&gt;	
</pre>
<p>The CSS:</p>
<pre class="css">
#slide1_controls span {
	padding-right:2em;
	cursor:pointer;
}
#slide1_container {
	width:450px;
	height:281px;
	overflow:hidden;
	position:relative;
}
#slide1_images {
	position:absolute;
	left:0px;
	width:1800px;
	-webkit-transition:all 1.0s ease-in-out;
	-moz-transition:all 1.0s ease-in-out;
	-o-transition:all 1.0s ease-in-out;
	-ms-transition:all 1.0s ease-in-out;	
	-transition:all 1.0s ease-in-out;
}
#slide1_images img {
	padding:0;
	margin:0;
	float:left;
}
</pre>
<p>Again, I'm using javascript to bind events to the clickable controls. This time I'm adding the number of pixels to slide into the js, though I could have defined classes for this.</p>
<pre class="js">
$(document).ready(function() {
	$("#slide1-1").click(function() {
		$("#slide1_images").css("left","0");
	});
	$("#slide1-2").click(function() {
		$("#slide1_images").css("left","-450px");
	});
	$("#slide1-3").click(function() {
		$("#slide1_images").css("left","-900px");
	});
	$("#slide1-4").click(function() {
		$("#slide1_images").css("left","-1350px");
	});
});
</pre>
<p>This code could be abstracted and improved, but we are looking to keep it simple here.</p>