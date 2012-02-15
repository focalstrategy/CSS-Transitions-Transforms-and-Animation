<section id="flip">
	<h1>Flipping content</h1>
	<h2>Demo 1 - Flipping a simple image to a div (transitions and 3d transforms)</h2>
	<p class="note">As of January 2012, this works in Safari (inc. iOS), Chrome, Firefox 10 and IE10.</p>
	<h3>Plan</h3>
	<ol>
		<li>Put an image on top of a div inside a container.</li>
		<li>Put that in another container with perspective defined.</li>
		<li>When hovering on the outside container, add a rotate around the Y axis to the inside container.</li>
	</ol>
	
	<h3>Demo</h3>
	<style>
	#f1_container {
		position: relative;
		margin: 10px auto;
		width: 450px;
		height: 281px;
		z-index: 1;
	}
	.face.back {
		display: none;
	}

	#f1_container {
		-webkit-perspective: 1000;
	}
	#f1_card {
		width: 100%;
		height: 100%;
		-webkit-transform-style: preserve-3d;
		-webkit-transition: all 1.0s linear;
		-moz-transform-style: preserve-3d;
		-moz-transition: all 1.0s linear;
		-o-transform-style: preserve-3d;
		-o-transition: all 1.0s linear;
		-ms-transform-style: preserve-3d;
		-ms-transition: all 1.0s linear;						
		transform-style: preserve-3d;
		transition: all 1.0s linear;		
	}
	#f1_container:hover #f1_card, #f1_container.hover_effect #f1_card {
		-webkit-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-o-transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		transform: rotateY(180deg);
		
		-webkit-box-shadow: -5px 5px 5px #aaa;				
		-moz-box-shadow: -5px 5px 5px #aaa;
		box-shadow: -5px 5px 5px #aaa;		
	}
	.face {
		position: absolute;
		width: 100%;
		height: 100%;
		-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-o-backface-visibility: hidden;
		-ms-backface-visibility: hidden;
		backface-visibility: hidden;								
	}
	.face.back {
		display: block;
		-webkit-transform: rotateY(180deg);
		-webkit-box-sizing: border-box;
		-moz-transform: rotateY(180deg);
		-moz-box-sizing: border-box;
		-o-transform: rotateY(180deg);
		-o-box-sizing: border-box;		
		-ms-transform: rotateY(180deg);
		-ms-box-sizing: border-box;
		transform: rotateY(180deg);
		box-sizing: border-box;				
		padding: 10px;
		color: white;
		text-align: center;
		background-color: #aaa;
	}
	</style>
	
	<div id="f1_container" class="hover">
		<div id="f1_card" class="shadow">
			<div class="front face">
				<img src="/images/Stones.jpg"/>
			</div>
			<div class="back face center">
				<p>This is nice for exposing more information about an image.</p>
				<p>Any content can go here.</p>
			</div>
  		</div>
	</div>
	<h3>Code</h3>
	<p>First, the markup.</p>
	<pre class="prettyprint html">
&lt;div id=&quot;f1_container&quot;&gt;
	&lt;div id=&quot;f1_card&quot; class=&quot;shadow&quot;&gt;
		&lt;div class=&quot;front face&quot;&gt;
			&lt;img src=&quot;/images/Stones.jpg&quot;/&gt;
		&lt;/div&gt;
		&lt;div class=&quot;back face center&quot;&gt;
			&lt;p&gt;This is nice for exposing more information about an image.&lt;/p&gt;
			&lt;p&gt;Any content can go here.&lt;/p&gt;
		&lt;/div&gt;
 		&lt;/div&gt;
&lt;/div&gt;
	</pre>
	<p>Then the CSS, stripped of the vendor prefixes to keep it clean.</p>
	<pre class="prettyprint css">
#f1_container {
	position: relative;
	margin: 10px auto;
	width: 450px;
	height: 281px;
	z-index: 1;
}
.face.back {
	display: none;
}

#f1_container {
	perspective: 1000;				
}
#f1_card {
	width: 100%;
	height: 100%;	
	transform-style: preserve-3d;
	transition: all 1.0s linear;	
}
#f1_container:hover #f1_card {
	transform: rotateY(180deg);
	box-shadow: -5px 5px 5px #aaa;
}
.face {
	position: absolute;
	width: 100%;
	height: 100%;
	backface-visibility: hidden;
}
.face.back {
	display: block;
	transform: rotateY(180deg);
	box-sizing: border-box;
	padding: 10px;
	color: white;
	text-align: center;
	background-color: #aaa;
}
	</pre>
	<p>You can also flip around the X and Z axes:</p>
	<style>
	#f2_container {
		position: relative;
		margin: 10px auto;
		width: 450px;
		height: 281px;
		z-index: 1;
	}
	#f2_container {
		-webkit-perspective: 1000;
		-moz-perspective: 1000;
		-o-perspective: 1000;
		-ms-perspective: 1000;
		perspective: 1000;
	}
	#f2_card {
		width: 100%;
		height: 100%;
		-webkit-transform-style: preserve-3d;
		-webkit-transition: all 1.0s linear;
		-moz-transform-style: preserve-3d;
		-moz-transition: all 1.0s linear;
		-o-transform-style: preserve-3d;
		-o-transition: all 1.0s linear;
		-ms-transform-style: preserve-3d;
		-ms-transition: all 1.0s linear;	
		transform-style: preserve-3d;
		transition: all 1.0s linear;
	}
	#f2_container:hover #f2_card, #f2_container.hover_effect #f2_card {
		-webkit-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-o-transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		transform: rotateY(180deg);
		
		-webkit-box-shadow: -5px 5px 5px #aaa;				
		-moz-box-shadow: -5px 5px 5px #aaa;
		box-shadow: -5px 5px 5px #aaa;		
	}
	</style>
	
	<div id="f2_container" class="hover">
		<div id="f2_card" class="shadow">
			<div class="front face">
				<img src="/images/Cirques.jpg"/>
			</div>
			<div class="back face center">
				<p>Note that I've had to change the shadow to keep it looking normal.</p>
			</div>
  		</div>
	</div>
	<style>
	#f3_container {
		position: relative;
		margin: 10px auto;
		width: 450px;
		height: 281px;
		z-index: 1;
	}
	#f3_container {
		-webkit-perspective: 1000;
		-moz-perspective: 1000;
		-o-perspective: 1000;
		-ms-perspective: 1000;
		perspective: 1000;
	}
	#f3_card {
		width: 100%;
		height: 100%;
		-webkit-transform-style: preserve-3d;
		-webkit-transition: all 1.0s linear;
		-moz-transform-style: preserve-3d;
		-moz-transition: all 1.0s linear;
		-o-transform-style: preserve-3d;
		-o-transition: all 1.0s linear;
		-ms-transform-style: preserve-3d;
		-ms-transition: all 1.0s linear;	
		transform-style: preserve-3d;
		transition: all 1.0s linear;
	}
	#f3_container:hover #f3_card, #f3_container.hover_effect #f3_card {
		-webkit-transform: rotateZ(180deg);
		-moz-transform: rotateZ(180deg);		
		-o-transform: rotateZ(180deg);
		-ms-transform: rotateZ(180deg);		
		
		-webkit-box-shadow: -5px -5px 5px #aaa;				
		-moz-box-shadow: -5px -5px 5px #aaa;
		box-shadow: -5px -5px 5px #aaa;		
	}
	</style>
	
	<div id="f3_container" class="hover">
		<div id="f3_card" class="shadow">
			<div class="front face">
				<img src="/images/Stones.jpg"/>
			</div>
			<div class="back face center">
				<p>This is nice for exposing more information about an image.</p>
				<p>Any content can go here.</p>
			</div>
  		</div>
	</div>


	<h2>Case Study: Flipping cards on the <a href="http://www.southamptontaxis.org/our-partners/">Southampton Hackney Association's Website</a></h2>
	<p>Part of the design for the Southampton Hackney Association included a grid of sponsors. The design was such that on hover or click, they would flip over revealing a contact number, email address or URL. We wanted this site to work on browsers that didn't support 3D transforms, as at the time, only webkit had support.</p>
	<h3>Code path for browsers with 3D transforms</h3>
	<p>The code used is exactly as above. The markup consists of a div, containing two divs for the back and front faces.</p>
	<h3>Fallback</h3>
	<p>In older browsers, <a href="http://lab.smashup.it/flip">jQuery Flip</a> is used. <a href="http://www.modernizr.com/">Modernizr</a> is used to detect support for 3D transforms and if not, the markup is altered to fit how jQuery flip requires it to be. The key part is that for normal browsers, normal 3D transforms are used, with none of the fluff required to get this to work.</p>
	<p>Due to issues with getting jQuery flip to work on hover, the behaviour was changed to work on click.</p>
	<p>Using this technique, the effect works on all browsers in use, back to IE6. The flip effect is of much higher quality on browsers that support 3D transforms, but still has the distinctive look and feel on older browsers. As we move forward, the percentage of users who hit the fallback will decrease.</p>
</section>