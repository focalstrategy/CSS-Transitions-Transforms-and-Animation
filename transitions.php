<section id="how2transitions">
<h1>How to use transitions</h1>
<p>If you haven't used transitions before, here's a very brief introduction.</p>
<p>On the element you want to have animate, add the following CSS:</p>
<pre class="css">
#id_of_element {
	-webkit-transition: all 1s ease-in-out;
	-moz-transition: all 1s ease-in-out;
	-o-transition: all 1s ease-in-out;
	-ms-transition: all 1s ease-in-out;
	transition: all 1s ease-in-out;
}
</pre>
<p>There is a lot of duplication due to vendor prefixes - until the specification if finalised, this is likely to stay the same. If this bothers you, there are various tools such as <a href="http://wiki.github.com/anthonyshort/csscaffold/">CSS Scaffold</a> or <a href="http://sass-lang.com/">SASS</a> that allow you to define mixins to avoid repetitive code.</p>
<p>The syntax is pretty straightforward, you specify the property you want to animate, all or border-radius or color or whatever, the time to run, then the transition timing function. The options for the timing function are shown below.</p>
<p>Whenever any property changes, then it will animate instead of changing directly. This can be due to a different set of properties set on a pseudo class such as hover, or a new class or properties set by javascript. The example below uses :hover to change the properties – no javascript is needed.</p>
<style>
	#timings_demo {
		position:relative;		
		width:500px;
		height:400px;
		margin:0 auto 10px;
		border:1px #aaa solid;
		padding:10px;
	}

	.test_box {
		position:relative;
		width:50px;
		height:50px;
		margin-bottom:10px;
		background-color:#ccc;
	}

	#ease.test_box {
		-webkit-transition: all 4s ease;
		-moz-transition: all 4s ease;
		-o-transition: all 4s ease;
		-ms-transition: all 4s ease;
		transition: all 4s ease;
		border:1px #f00 solid;
	}

	#ease-in.test_box {
		-webkit-transition: all 4s ease-in;
		-moz-transition: all 4s ease-in;
		-o-transition: all 4s ease-in;
		-ms-transition: all 4s ease-in;
		transition: all 4s ease-in;
		border:1px #0f0 solid;
	}

	#ease-out.test_box {
		-webkit-transition: all 4s ease-out;
		-moz-transition: all 4s ease-out;
		-o-transition: all 4s ease-out;
		-ms-transition: all 4s ease-out;
		transition: all 4s ease-out;
		border:1px #00f solid;
	}

	#ease-in-out.test_box {
		-webkit-transition: all 4s ease-in-out;
		-moz-transition: all 4s ease-in-out;
		-o-transition: all 4s ease-in-out;
		-ms-transition: all 4s ease-in-out;
		transition: all 4s ease-in-out;
		border:1px #ff0 solid;
	}

	#linear.test_box {
		-webkit-transition: all 4s linear;
		-moz-transition: all 4s linear;
		-o-transition: all 4s linear;
		-ms-transition: all 4s linear;
		transition: all 4s linear;
		border:1px #f0f solid;
	}
	
	#custom.test_box {
		-webkit-transition: all 4s cubic-bezier(1.000, 0.835, 0.000, 0.945);
		-moz-transition: all 4s cubic-bezier(1.000, 0.835, 0.000, 0.945);
		-o-transition: all 4s cubic-bezier(1.000, 0.835, 0.000, 0.945);
		-ms-transition: all 4s cubic-bezier(1.000, 0.835, 0.000, 0.945);
		transition: all 4s cubic-bezier(1.000, 0.835, 0.000, 0.945);
		border:1px #0ff solid;
	}

	#timings_demo:hover .test_box, #timings_demo.hover_effect .test_box {

		left:440px;
		
		-webkit-border-radius:25px;
		-moz-border-radius:25px;
		-o-border-radius:25px;
		border-radius:25px;

		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
		
		background-color:#fff;
	}
</style>
<h2>Demo - Different timing functions</h2>
<div id="timings_demo" class="shadow hover">
	<div id="ease" class="test_box"><p class="center">Ease</p></div>
	<div id="ease-in" class="test_box"><p class="center">Ease In</p></div>
	<div id="ease-out" class="test_box"><p class="center">Ease Out</p></div>
	<div id="ease-in-out" class="test_box"><p class="center">Ease In Out</p></div>
	<div id="linear" class="test_box"><p class="center">Linear</p></div>
	<div id="custom" class="test_box"><p class="center">Custom</p></div>	
	<p class="center"> Hover on me</p>
</div>

<p>In addition to the built in timing functions, you can also specify your own. The excellent <a href="http://matthewlein.com/ceaser/">Ceaser CSS Easing Tool</a> makes this very easy.</p>

<p>Regarding the properties you can animate, the best way is to experiment. The Mozilla Developer Network maintain a list of properties that can be animated on their <a href="https://developer.mozilla.org/en/CSS/CSS_transitions">CSS Transitions</a> page. These include everything from background-color and box-shadow to column width and box-flex. Many of these properties are not supported by default by jQuery animation, making CSS transitions much more useful out of the box. In addition, iOS hardware accelerates animations that don't require repaints, namely opacity and transforms.</p>

<p>To find out more, read through the <a href="http://www.w3.org/TR/css3-transitions/">W3C specification</a>.</p>
</section>