<h2 id="slide2">Demo 2 - Sliding by translating the images (transitions and transforms)</h2>
<p class="note">Note: Animating by transitioning transforms is hardware accelerated on iPhone OS, making this a good option there.</p>
<h3>Plan</h3>
<ol>
	<li>Create a container with overflow set to hidden.</li>
	<li>Inside that container, create another container with width equal to the width of all the images added together.</li>
	<li>Inside that, float the images left with no padding or margin.</li>
	<li>When clicking a control, translate the second container to show the required image.</li>
</ol>
<h3>Demo</h3>
<style>
	p#slide2_controls {
		text-align:center;
	}
	#slide2_controls span {
		padding-right:2em;
		cursor:pointer;
	}
	#slide2_container {
		width:450px;
		height:281px;
		overflow:hidden;
		position:relative;
		margin:0 auto;		
	}
	#slide2_images {
		position:absolute;
		left:0px;
		width:1800px;
		-webkit-transition:all 1.0s ease-in-out;
		-moz-transition:all 1.0s ease-in-out;
		-o-transition:all 1.0s ease-in-out;
		-ms-transition:all 1.0s ease-in-out;		
		-transition:all 1.0s ease-in-out;
	}
	#slide2_images img {
		padding:0;
		margin:0;
		float:left;
	}
</style>
<script>
	$(document).ready(function() {
		$("#slide2-1").click(function() {
			$("#slide2_images").css("-webkit-transform","translate(0px, 0px)");
			$("#slide2_images").css("-moz-transform","translate(0px, 0px)");
			$("#slide2_images").css("-o-transform","translate(0px, 0px)");
			$("#slide2_images").css("transform","translate(0px, 0px)");									
			$("#slide2_controls span").removeClass("selected");
			$(this).addClass("selected");			
		});
		$("#slide2-2").click(function() {
			$("#slide2_images").css("-webkit-transform","translate(-450px, 0px)");
			$("#slide2_images").css("-moz-transform","translate(-450px, 0px)");
			$("#slide2_images").css("-o-transform","translate(-450px, 0px)");
			$("#slide2_images").css("transform","translate(-450px, 0px)");		
			$("#slide2_controls span").removeClass("selected");
			$(this).addClass("selected");
		});
		$("#slide2-3").click(function() {
			$("#slide2_images").css("-webkit-transform","translate(-900px, 0px)");
			$("#slide2_images").css("-moz-transform","translate(-900px, 0px)");
			$("#slide2_images").css("-o-transform","translate(-900px, 0px)");
			$("#slide2_images").css("transform","translate(-900px, 0px)");			
			$("#slide2_controls span").removeClass("selected");
			$(this).addClass("selected");
		});
		$("#slide2-4").click(function() {
			$("#slide2_images").css("-webkit-transform","translate(-1350px, 0)");
			$("#slide2_images").css("-moz-transform","translate(-1350px, 0px)");
			$("#slide2_images").css("-o-transform","translate(-1350px, 0px)");
			$("#slide2_images").css("transform","translate(-1350px, 0px)");			
			$("#slide2_controls span").removeClass("selected");
			$(this).addClass("selected");
		});
	});	
</script>
<div id="slide2_container" class="shadow">
	<div id="slide2_images">
		<img src="/images/Cirques.jpg" />
		<img src="/images/Clown%20Fish.jpg" />
		<img src="/images/Stones.jpg" />
		<img src="/images/Summit.jpg" />		
	</div>
</div>
<p id="slide2_controls"><span class="selected" id="slide2-1">Image 1</span><span id="slide2-2">Image 2</span><span id="slide2-3">Image 3</span><span id="slide2-4">Image 4</span></p>
<h3>Code</h3>
<p>Exactly the same as Demo 1, but the JS looks like this: (times 4 for the vendor specific markup)</p>
<pre class="js">
$(document).ready(function() {
	$("#slide2-1").click(function() {
		$("#slide2_images").css("-webkit-transform","translate(0px, 0px)");
	});
	$("#slide2-2").click(function() {
		$("#slide2_images").css("-webkit-transform","translate(-450px, 0)");
	});
	$("#slide2-3").click(function() {
		$("#slide2_images").css("-webkit-transform","translate(-900px, 0)");
	});
	$("#slide2-4").click(function() {
		$("#slide2_images").css("-webkit-transform","translate(-1350px, 0)");
	});
});
</pre>