<section id="how2transitions">
<h1>How to use transitions</h1>
<p>If you haven't used transitions before, here's a very brief introduction.</p>
<p>On the element you want to have animate, add the following CSS:</p>
<pre class="css">
#id_of_element {
	-webkit-transition: all 1s ease-in-out;
	-moz-transition: all 1s ease-in-out;
	-o-transition: all 1s ease-in-out;
	-webkit-transition: all 1s ease-in-out;
	transition: all 1s ease-in-out;
}
</pre>
<p>There is a lot of duplication due to vendor prefixes - until the specification if finalised, this is likely to stay the same. If this bothers you, there are various tools such as <a href="http://wiki.github.com/anthonyshort/csscaffold/">CSS Scaffold</a> that allow you to define mixins to avoid repetitive code.</p>
<p>The syntax is pretty straightforward - the property you want to animate, all or border-radius or color or whatever, the time to run, then the transition timing function. The options for the timing function are shown below.</p>

<style>
	#timings_demo {
		width:500px;
		height:340px;
		margin:0 auto;
		border:1px #aaa solid;
		padding:10px;		
	}
	
	.test_box {
		width:50px;
		height:50px;
		margin-bottom:10px;
		background-color:#ccc;
	}
	
	#ease.test_box {
		-webkit-transition: all 4s ease;
		-moz-transition: all 4s ease;
		-o-transition: all 4s ease;
		-webkit-transition: all 4s ease;
		transition: all 4s ease;
		border:1px #f00 solid;
	}

	#ease-in.test_box {
		-webkit-transition: all 4s ease-in;
		-moz-transition: all 4s ease-in;
		-o-transition: all 4s ease-in;
		-webkit-transition: all 4s ease-in;
		transition: all 4s ease-in;
		border:1px #0f0 solid;
	}

	#ease-out.test_box {
		-webkit-transition: all 4s ease-out;
		-moz-transition: all 4s ease-out;
		-o-transition: all 4s ease-out;
		-webkit-transition: all 4s ease-out;
		transition: all 4s ease-out;
		border:1px #00f solid;
	}

	#ease-in-out.test_box {
		-webkit-transition: all 4s ease-in-out;
		-moz-transition: all 4s ease-in-out;
		-o-transition: all 4s ease-in-out;
		-webkit-transition: all 4s ease-in-out;
		transition: all 4s ease-in-out;
		border:1px #ff0 solid;
	}

	#linear.test_box {
		-webkit-transition: all 4s linear;
		-moz-transition: all 4s linear;
		-o-transition: all 4s linear;
		-webkit-transition: all 4s linear;
		transition: all 4s linear;
		border:1px #f0f solid;
	}
	
	#timings_demo:hover .test_box {
		margin-left:440px;
		-webkit-border-radius:25px;
		-webkit-transform: rotate(360deg);
		background-color:#fff;
	}
</style>
<h2>Demo</h2>
<div id="timings_demo" class="shadow">
	<div id="ease" class="test_box"><p class="center">Ease</p></div>
	<div id="ease-in" class="test_box"><p class="center">Ease In</p></div>
	<div id="ease-out" class="test_box"><p class="center">Ease Out</p></div>
	<div id="ease-in-out" class="test_box"><p class="center">Ease In Out</p></div>
	<div id="linear" class="test_box"><p class="center">Linear</p></div>
	<p class="center"> Hover on me</p>
</div>

<p>To actually animate a property, any time it changes, it will gradually change from one to the other. This can be due to a different set of properties set on hover, or a new class set by javascript.</p>

<p>To find out more, read through the <a href="http://www.w3.org/TR/css3-transitions/">W3C specification</a>.</p>
</section>