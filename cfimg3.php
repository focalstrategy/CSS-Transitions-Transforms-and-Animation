<h2 id="cfimg3">Demo 3 - One image to another with a timer (Webkit/Firefox 5/IE10 only, transitions and animations)</h2>
<h3>Plan</h3>
<p>You could implement this by using Javascript to toggle classes with a delay - that would allow older browsers to still have the images change. As we are looking forward though, we'll use CSS keyframes.</p>
<ol>
	<li>Start with demo 1</li>
	<li>Use CSS keyframes to define two states, one with top image transparent, one with it opaque.</li>
	<li>Set the animations number of iterations to infinite.</li>
</ol>
<h3>Demo</h3>
<style>
	@-webkit-keyframes cf3FadeInOut {
	 0% {
	   opacity:1;
	 }
	25% {
		opacity:1;
	}
	75% {
		opacity:0;
	}
	 100% {
	   opacity:0;
	 }
	}
	
	@-moz-keyframes cf3FadeInOut {
	 0% {
	   opacity:1;
	 }
	25% {
		opacity:1;
	}
	75% {
		opacity:0;
	}
	 100% {
	   opacity:0;
	 }
	}	
	
	@-ms-keyframes cf3FadeInOut {
	 0% {
	   opacity:1;
	 }
	25% {
		opacity:1;
	}
	75% {
		opacity:0;
	}
	 100% {
	   opacity:0;
	 }
	}	

	#cf3 {
		position:relative;
		height:281px;
		width:450px;
		margin:0 auto;
	}
	#cf3 img {
		position:absolute;
		left:0;
	}
	
	#cf3 img.top {
		-webkit-animation-name: cf3FadeInOut;
		-webkit-animation-timing-function: ease-in-out;
		-webkit-animation-iteration-count: infinite;
		-webkit-animation-duration: 10s;
		-webkit-animation-direction: alternate;
		
		-moz-animation-name: cf3FadeInOut;
		-moz-animation-timing-function: ease-in-out;
		-moz-animation-iteration-count: infinite;
		-moz-animation-duration: 10s;
		-moz-animation-direction: alternate;		
		
		-ms-animation-name: cf3FadeInOut;
		-ms-animation-timing-function: ease-in-out;
		-ms-animation-iteration-count: infinite;
		-ms-animation-duration: 10s;
		-ms-animation-direction: alternate;		
	}
	
</style>
<div id="cf3" class="shadow">
	<img class="bottom" src="/images/Stones.jpg" />
	<img class="top" src="/images/Summit.jpg" />
</div>
	<p class="center">Each image is visible for 9 seconds before fading to the other one.</p>
<h3>Code</h3>
<p>Everything's the same as <a href="#cfimg1">Demo 1</a>, but I've added this to the CSS and removed the hover selector</p>
<pre class="css">
@keyframes cf3FadeInOut {
	0% {
		opacity:1;
	}
	45% {
		opacity:1;
	}
	55% {
		opacity:0;
	}
	100% {
		opacity:0;
	}
}

#cf3 img.top {
	animation-name: cf3FadeInOut;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
	animation-duration: 10s;
	animation-direction: alternate;
}			
</pre>
<p>To make sense of that, I've defined 4 keyframes, specified that whatever has this animation attached will be opaque for the first 45%, then transparent for the last 45%. The animation will repeat forever, will last 10 seconds, and will run forward then backwards. In other words, image 1 will be visible for 4.5 seconds, followed by a 1 second fade, followed by 4.5 seconds of image 2 being visible. Then it will reverse, meaning that image 1 and 2 will both be visible for 9 (4.5 x 2) seconds each time.</p>



<h3>Demo with multiple images</h3>
<style>
	@-webkit-keyframes cf4FadeInOut {
	 0% {
	   opacity:0;
	 }
	 25% {
	   opacity:1;
	 }	
	 50% {
	   opacity:1;
	 }
	 100% {
	   opacity:0;
	 }
	}
	
	@-moz-keyframes cf4FadeInOut {
	 0% {
	   opacity:0;
	 }
	 25% {
	   opacity:1;
	 }	
	 50% {
	   opacity:1;
	 }
	 100% {
	   opacity:0;
	 }
	}
	
	@-ms-keyframes cf4FadeInOut {
	 0% {
	   opacity:0;
	 }
	 25% {
	   opacity:1;
	 }	
	 50% {
	   opacity:1;
	 }
	 100% {
	   opacity:0;
	 }
	}		
	
	#cf4a {
		position:relative;
		height:281px;
		width:450px;
		margin:0 auto;
	}
	#cf4a img {
		position:absolute;
		left:0;
	}
	
	#cf4a img {
		-webkit-animation-name: cf4FadeInOut;
		-webkit-animation-timing-function: ease-in-out;
		-webkit-animation-iteration-count: infinite;
		-webkit-animation-duration: 8s;

		-moz-animation-name: cf4FadeInOut;
		-moz-animation-timing-function: ease-in-out;
		-moz-animation-iteration-count: infinite;
		-moz-animation-duration: 8s;
		
		-ms-animation-name: cf4FadeInOut;
		-ms-animation-timing-function: ease-in-out;
		-ms-animation-iteration-count: infinite;
		-ms-animation-duration: 8s;				
	}
	#cf4a img:nth-of-type(1) {
 		-webkit-animation-delay: 0;		
 		-moz-animation-delay: 0;	
 		-ms-animation-delay: 0;	
	}
	#cf4a img:nth-of-type(2) {
 		-webkit-animation-delay: 2s;		
 		-moz-animation-delay: 2s;	
 		-ms-animation-delay: 2s;
	}
	#cf4a img:nth-of-type(3) {
 		-webkit-animation-delay: 4s;		
 		-moz-animation-delay: 4s;		
 		-ms-animation-delay: 4s;		
	}
	#cf4a img:nth-of-type(4) {
 		-webkit-animation-delay: 6s;		
 		-moz-animation-delay: 6s;		
 		-ms-animation-delay: 6s;		
	}			
	
</style>
<div id="cf4" class="shadow">
	<img src="/images/Stones.jpg" />
	<img src="/images/Summit.jpg" />
	<img src="/images/Clown Fish.jpg" />
	<img src="/images/Cirques.jpg" />	
</div>
	<p class="center">Staggering the animations can result in a multiple image fader.</p>
<p>This time I've created an animation that goes from 0 to 1 opacity, then staggered the animations so only one is visible at once. It's not great, but it is maybe a start. Any suggestions on how to make this better would be gladly received!</p>	
<pre class="css">
	#cf4a img:nth-of-type(1) {
 		animation-delay: 0;		
	}
	#cf4a img:nth-of-type(2) {
 		animation-delay: 2s;		
	}
	#cf4a img:nth-of-type(3) {
 		animation-delay: 4s;		
	}
	#cf4a img:nth-of-type(4) {
 		animation-delay: 6s;		
	}
</pre>	