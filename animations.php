<section id="how2animations">
<h1>CSS Animations</h1>
<?= compat_table("CSS Animations", "4.0", "4.0", "5.0", "10.0", "12.0"); ?>
<h2>How to use animations</h2>
<p class="note">As of March 2012, this is implemented in all browsers (at least as a dev version)</p>
<p>CSS animations were introduced into Webkit in 2007. In 2009 a <a href="http://www.w3.org/TR/css3-animations/">working draft</a> was written and added to the w3c site. Over the next three years support was gained by Firefox, Internet Explorer and finally Opera.</p>
<p>To use CSS animation, you first specify some keyframes for the animation - basically what styles will the element have at certain times. The browser does the tweening for you.</p>
<h2>Demo</h2>
<style>
@-webkit-keyframes resize {
	0% {
		padding: 0;
	}
	50% {
		padding: 0 20px;
		background-color:rgba(255,0,0,0.2);
	}
	100% {
		padding: 0 100px;
		background-color:rgba(255,0,0,0.9);
	}
}
@-moz-keyframes resize {
	0% {
		padding: 0;
	}
	50% {
		padding: 0 20px;
		background-color:rgba(255,0,0,0.2);
	}
	100% {
		padding: 0 100px;
		background-color:rgba(255,0,0,0.9);
	}
}
@-ms-keyframes resize {
	0% {
		padding: 0;
	}
	50% {
		padding: 0 20px;
		background-color:rgba(255,0,0,0.2);
	}
	100% {
		padding: 0 100px;
		background-color:rgba(255,0,0,0.9);
	}
}
@-o-keyframes resize {
	0% {
		padding: 0;
	}
	50% {
		padding: 0 20px;
		background-color:rgba(255,0,0,0.2);
	}
	100% {
		padding: 0 100px;
		background-color:rgba(255,0,0,0.9);
	}
}
@keyframes resize {
	0% {
		padding: 0;
	}
	50% {
		padding: 0 20px;
		background-color:rgba(255,0,0,0.2);
	}
	100% {
		padding: 0 100px;
		background-color:rgba(255,0,0,0.9);
	}
}

#animationDemo {
	height:100px;
	width:500px;
	margin:0 auto;
}

#animationDemo #box {
	height:50px;
	width:50px;
	margin:0 auto;
	border:1px red solid;
	background-color:rgba(255,0,0,0.7);
}

#animationDemo:hover #box, #animationDemo.hover_effect #box {
	-webkit-animation-name: resize;
	-webkit-animation-duration: 1s;
	-webkit-animation-iteration-count: 4;
	-webkit-animation-direction: alternate;

	-moz-animation-name: resize;
	-moz-animation-duration: 1s;
	-moz-animation-iteration-count: 4;
	-moz-animation-direction: alternate;

	-ms-animation-name: resize;
	-ms-animation-duration: 1s;
	-ms-animation-iteration-count: 4;
	-ms-animation-direction: alternate;

	-o-animation-name: resize;
	-o-animation-duration: 1s;
	-o-animation-iteration-count: 4;
	-o-animation-direction: alternate;

	animation-name: resize;
	animation-duration: 1s;
	animation-iteration-count: 4;
	animation-direction: alternate;
}
</style>
<div id="animationDemo" class="hover">
	<div id="box" class="shadow"></div>
	<p class="center">Hover over me</p>
</div>
<h2>Code</h2>
<p>The interesting bit of this code is this bit of CSS (remember to add vendor prefixes both for the keyframes code and the animation-* properties):</p>
<pre class="prettyprint lang-css">
@keyframes resize {
	0% {
		padding: 0;
	}
	50% {
		padding: 0 20px;
		background-color:rgba(255,0,0,0.2);
	}
	100% {
		padding: 0 100px;
		background-color:rgba(255,0,0,0.9);
	}
}

#box {
	animation-name: resize;
	animation-duration: 1s;
	animation-iteration-count: 4;
	animation-direction: alternate;
	animation-timing-function: ease-in-out;
}
</pre>
<p>Note that the 4 iterations makes the box pulse twice - the animation runs forwards then backwards, then forwards then backwards.</p>
<p>You can have as many keyframes as you like, at whatever intervals you like.</p>
<p>A useful setting is to set <code>animation-iteration-count</code> to <code>infinite</code>, making the animation continue for ever.</p>
<h2>Demo</h2>
<style>
@-webkit-keyframes glow {
	0% {
		-webkit-box-shadow: 0 0 16px rgba(66, 140, 240, 0.5);
		border-color: rgba(0,0,255,0.5);
	}
	100% {
		-webkit-box-shadow: 0 0 16px rgba(66, 140, 240, 1.0), 0 0 36px rgba(0, 140, 255, 1.0);
		border-color: rgba(0,0,255,1.0);
	}
}
@-moz-keyframes glow {
	0% {
		-moz-box-shadow: 0 0 16px rgba(66, 140, 240, 0.5);
		border-color: rgba(0,0,255,0.5);
	}
	100% {
		-moz-box-shadow: 0 0 16px rgba(66, 140, 240, 1.0), 0 0 36px rgba(0, 140, 255, 1.0);
		border-color: rgba(0,0,255,1.0);
	}
}
@-ms-keyframes glow {
	0% {
		box-shadow: 0 0 16px rgba(66, 140, 240, 0.5);
		border-color: rgba(0,0,255,0.5);
	}
	100% {
		box-shadow: 0 0 16px rgba(66, 140, 240, 1.0), 0 0 36px rgba(0, 140, 255, 1.0);
		border-color: rgba(0,0,255,1.0);
	}
}
@-o-keyframes glow {
	0% {
		box-shadow: 0 0 16px rgba(66, 140, 240, 0.5);
		border-color: rgba(0,0,255,0.5);
	}
	100% {
		box-shadow: 0 0 16px rgba(66, 140, 240, 1.0), 0 0 36px rgba(0, 140, 255, 1.0);
		border-color: rgba(0,0,255,1.0);
	}
}
@keyframes glow {
	0% {
		box-shadow: 0 0 16px rgba(66, 140, 240, 0.5);
		border-color: rgba(0,0,255,0.5);
	}
	100% {
		box-shadow: 0 0 16px rgba(66, 140, 240, 1.0), 0 0 36px rgba(0, 140, 255, 1.0);
		border-color: rgba(0,0,255,1.0);
	}
}
#animationDemo2 {
	width:255px;
	margin:10px auto;
}
#animationDemo2 button {
		width: 255px;
		height: 35px;
		background: #cde;
		border: 2px solid #ccc;
		border-color: rgba(0,0,255,0.5);
		font-size:18px;
		color: #000;
		text-shadow: rgba(20, 20, 20, 0.5) 1px 1px 5px;
		text-align: center;
		-webkit-border-radius: 16px;
		-moz-border-radius: 16px;
		border-radius: 16px;
		-webkit-box-shadow: 0 0 16px rgba(66, 140, 240, 0.5);
		box-shadow: 0 0 16px rgba(66, 140, 240, 0.5);
	}
#animationDemo2 button:hover, #animationDemo2 button.hover_effect  {
	background-color:#cce;
	-webkit-animation-name: glow;
	-webkit-animation-duration: 1s;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-direction: alternate;
	-webkit-animation-timing-function: ease-in-out;

	-moz-animation-name: glow;
	-moz-animation-duration: 1s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-direction: alternate;
	-moz-animation-timing-function: ease-in-out;

	-ms-animation-name: glow;
	-ms-animation-duration: 1s;
	-ms-animation-iteration-count: infinite;
	-ms-animation-direction: alternate;
	-ms-animation-timing-function: ease-in-out;

	-o-animation-name: glow;
	-o-animation-duration: 1s;
	-o-animation-iteration-count: infinite;
	-o-animation-direction: alternate;
	-o-animation-timing-function: ease-in-out;

	animation-name: glow;
	animation-duration: 1s;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	animation-timing-function: ease-in-out;
}
</style>
<div id="animationDemo2">
	<button class="transition hover">Hover to Pulsate</button>
</div>
<p>The key to using these animations is subtlety - nice delicate animations, rather than extreme over the top ones! It's also worth noting that the WCAG (Web Content Accessibility Guidelines) 2.0 specifies that a website shouldn't contain things that <a href="http://www.w3.org/TR/WCAG20/#seizure">flash more than 3 times a second</a> to avoid causing seizures in people susceptible to them.</p>
</section>