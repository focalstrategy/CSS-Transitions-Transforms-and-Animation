<section id="how2transitions">
<h1>How to use transitions</h1>
<p>If you haven't used transitions before, here's a brief introduction.</p>
<p>On the element you want to have animate, add the following CSS:</p>
<pre class="prettyprint lang-css">
#id_of_element {
	-webkit-transition: all 1s ease-in-out;
	-moz-transition: all 1s ease-in-out;
	-o-transition: all 1s ease-in-out;
	-ms-transition: all 1s ease-in-out;
	transition: all 1s ease-in-out;
}
</pre>
<p>There is a lot of duplication due to vendor prefixes - until the specification if finalised, this will persist. If this bothers you, there are various tools such as <a href="http://wiki.github.com/anthonyshort/csscaffold/">CSS Scaffold</a>, <a href="http://lesscss.org/">LESS</a>, or my preference -  <a href="http://sass-lang.com/">SASS</a>, that allow you to define mixins to avoid repetitive code.</p>
<p>Another approach is simply to write the CSS without the prefixes, then use <a href="http://leaverou.github.com/prefixfree/">Lea Verou's -prefix-free</a> to add them in at runtime.</p>
<p>Something you definitely shouldn't do is to only include the webkit prefix. Tempting though it seems, particularly when developing for mobile devices, webkit isn't the only rendering engine!</p>
<p>The syntax is pretty straightforward, you specify the property you want to animate, all or border-radius or color or whatever, the time to run, then the transition timing function. The options for the timing function are shown below.</p>
<p>Whenever any property changes, then it will animate instead of changing directly. This can be due to a different set of properties set on a pseudo class such as hover, or a new class or properties set by javascript. The example below uses :hover to change the properties – no javascript is needed.</p>
<p>To see the difference in speed, have a look at the <a href="/demos/speed.php">speed test</a>.</p>
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
		-webkit-border-radius:25px;
		-moz-border-radius:25px;
		-o-border-radius:25px;
		border-radius:25px;
		<?= prefix("transform", "rotate(360deg)") ?>
    margin-left:440px;
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
<h2>Full syntax</h2>
<p>The syntax for a CSS3 transition is of the form:</p>
<pre>
transition:  [ &lt;transition-property&gt; ||
               &lt;transition-duration&gt; ||
               &lt;transition-timing-function&gt; ||
               &lt;transition-delay&gt; ]
</pre>
<p>You will notice the final parameter is a delay - this let's you trigger things after an event has occurred. Below is a small demo showing this functionality.</p>
<h2>Demo - Transition delays</h2>
<style>
#delay_demo {
	position:relative;
	width:500px;
	height:400px;
	margin:0 auto 10px;
	border:1px #aaa solid;
	padding:10px;
}
#dd_main {
	width:100px;
	height:100px;
	position:absolute;
	top:160px;
	left:210px;
	background-color:red;
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
	<?= prefix("transition", "all 2s ease-in-out") ?>
}
#delay_demo .center {
	width:500px;
	position:absolute;
	bottom:20px;
}
#dd1, #dd2, #dd3, #dd4, #dd5, #dd6, #dd7, #dd8 {
	width:20px;
	height:20px;
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	position:absolute;
	top:200px;
	left:250px;
	background-color:blue;
	<?= prefix("transition", "all 2s ease-in-out") ?>
	/* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in on iOS */
	<?= prefix("transform", "translate3d(0,0,0)") ?>
}
<? for($i=1;$i<9;$i++) { ?>
	#dd<?= $i ?> {
		-webkit-transition-delay: <?= $i * 0.1 ?>s;
	}
<? } ?>
#delay_demo:hover #dd_main {
	opacity:0;
}
#delay_demo:hover #dd1, #delay_demo.hover_effect #dd1 {
	<?= prefix("transform", "translate(-250px,-200px)") ?>
}
#delay_demo:hover #dd2, #delay_demo.hover_effect #dd2 {
	<?= prefix("transform", "translate(0,-200px)") ?>
}
#delay_demo:hover #dd3, #delay_demo.hover_effect #dd3 {
	<?= prefix("transform", "translate(250px,-200px)") ?>
}
#delay_demo:hover #dd4, #delay_demo.hover_effect #dd4 {
	<?= prefix("transform", "translate(250px, 0)") ?>
}
#delay_demo:hover #dd5, #delay_demo.hover_effect #dd5 {
	<?= prefix("transform", "translate(250px,200px)") ?>
}
#delay_demo:hover #dd6, #delay_demo.hover_effect #dd6 {
	<?= prefix("transform", "translate(0,200px)") ?>
}
#delay_demo:hover #dd7, #delay_demo.hover_effect #dd7 {
	<?= prefix("transform", "translate(-250px,200px)") ?>
}
#delay_demo:hover #dd8, #delay_demo.hover_effect #dd8 {
	<?= prefix("transform", "translate(-250px,0)") ?>
}
</style>
<div id="delay_demo" class="shadow hover">
	<div id="dd_main"></div>
	<div id="dd1"></div>
	<div id="dd2"></div>
	<div id="dd3"></div>
	<div id="dd4"></div>
	<div id="dd5"></div>
	<div id="dd6"></div>
	<div id="dd7"></div>
	<div id="dd8"></div>
	<p class="center"> Hover on me</p>
</div>
<h2>Demo - advanced delays</h2>
<p>You can set the way different properties animate differently. In this example the normal (blue) circle has this CSS (with the appropriate vendor prefixes):</p>
<pre class="prettyprint lang-css">
#dd_main2 {
  transition: all 1s ease-in-out;
}
</pre>
<p>The delays (green) circle has this CSS instead:</p>
<pre class="prettyprint lang-css">
#dd_main2 {
  transition-property: top, left;
  transition-duration: 1s, 1s;
  transition-delay: 0s, 1s;
}
</pre>
<p>This allows us to animate top and left differently, meaning we can make it move in an L shape, rather than diagonally. This technique can be used to create very complex animations, if needed.</p>
<style>
#delay_demo2 {
  position:relative;
  width:500px;
  height:400px;
  margin:0 auto 10px;
  border:1px #aaa solid;
  padding:10px;
}
#dd_main2, #dd_main2a {
  width:100px;
  height:100px;
  position:absolute;
  top:160px;
  left:210px;
  background-color:blue;
  -webkit-border-radius:50px;
  -moz-border-radius:50px;
  border-radius:50px;
  text-align:center;
}
#dd_main2 p, #dd_main2a p {
  line-height:70px;
  color:white;
  font-weight:bold;
}
#dd_main2 {
  <?= prefix("transition", "all 1s ease-in-out") ?>
}
#dd_main2a {
  background-color:green;
  <?= prefix("transition-property", "top, left"); ?>
  <?= prefix("transition-duration", "1s, 1s"); ?>
  <?= prefix("transition-delay", "0s, 1s"); ?>
}
#delay_demo2 .center {
  width:500px;
  position:absolute;
  bottom:20px;
}
#delay_demo2:hover #dd_main2, #delay_demo2.hover_effect #dd_main2 {
  top:0px;
  left:0px;
}
#delay_demo2:hover #dd_main2a, #delay_demo2.hover_effect #dd_main2a {
  top:320px;
  left:420px;
}
</style>
<div id="delay_demo2" class="shadow hover">
  <div id="dd_main2"><p>Normal</p></div>
  <div id="dd_main2a"><p>Delays</p></div>
  <p class="center"> Hover on me</p>
</div>
<h2>Animatable properties</h2>
<p>Regarding the properties you can animate, the best way is to experiment. The W3C maintain a list of properties that can be animated on the <a href="http://www.w3.org/TR/css3-transitions/#properties-from-css-">CSS Transitions spec</a>. These include everything from background-color and letter-spacing to text-shadow and min-height. Many of these properties are not supported by default by jQuery animation, making CSS transitions much more useful out of the box. In addition, many browsers hardware accelerate animations that don't require repaints, namely opacity, 3D transforms and filters. To see the methods that Webkit accelerates, take a look at <a href="http://trac.webkit.org/browser/trunk/Source/WebCore/page/animation/AnimationBase.cpp">the AnimationBase.cpp</a> code from the Webkit source. At the time of writing there are three classes defined here: PropertyWrapperAcceleratedOpacity, PropertyWrapperAcceleratedTransform and PropertyWrapperAcceleratedFilter. These are the animations that Webkit accelerates. Other browsers do things differently, but as Webkit is popular on mobile where these things matter most, it's worth noting this special case.</p>
<p>In reality, browsers are allowing more properties than these to be animated - box-shadow springs to mind as an obvious example. The table below is taken from the link above, and is can be considered the minimum number of properties you would expect to be animatable.</p>
<table class="table">
    <tbody>
      <tr>
        <th>Property Name</th>
        <th>Type</th>
      </tr>
      <tr>
        <td>background-color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>background-image</td>
        <td>only gradients</td>
      </tr>
      <tr>
        <td>background-position</td>
        <td>percentage, length</td>
      </tr>
      <tr>
        <td>border-bottom-color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>border-bottom-width</td>
        <td>length</td>
      </tr>
      <tr>
        <td>border-color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>border-left-color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>border-left-width</td>
        <td>length</td>
      </tr>
      <tr>
        <td>border-right-color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>border-right-width</td>
        <td>length</td>
      </tr>
      <tr>
        <td>border-spacing</td>
        <td>length</td>
      </tr>
      <tr>
        <td>border-top-color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>border-top-width</td>
        <td>length</td>
      </tr>
      <tr>
        <td>border-width</td>
        <td>length</td>
      </tr>
      <tr>
        <td>bottom</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>crop</td>
        <td>rectangle</td>
      </tr>
      <tr>
        <td>font-size</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>font-weight</td>
        <td>number</td>
      </tr>
      <tr>
        <td>grid-*</td>
        <td>various</td>
      </tr>
      <tr>
        <td>height</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>left</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>letter-spacing</td>
        <td>length</td>
      </tr>
      <tr>
        <td>line-height</td>
        <td>number, length, percentage</td>
      </tr>
      <tr>
        <td>margin-bottom</td>
        <td>length</td>
      </tr>
      <tr>
        <td>margin-left</td>
        <td>length</td>
      </tr>
      <tr>
        <td>margin-right</td>
        <td>length</td>
      </tr>
      <tr>
        <td>margin-top</td>
        <td>length</td>
      </tr>
      <tr>
        <td>max-height</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>max-width</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>min-height</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>min-width</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>opacity</td>
        <td>number</td>
      </tr>
      <tr>
        <td>outline-color</td>
        <td>color</td>
      </tr>
      <tr>
        <td>outline-offset</td>
        <td>integer</td>
      </tr>
      <tr>
        <td>outline-width</td>
        <td>length</td>
      </tr>
      <tr>
        <td>padding-bottom</td>
        <td>length</td>
      </tr>
      <tr>
        <td>padding-left</td>
        <td>length</td>
      </tr>
      <tr>
        <td>padding-right</td>
        <td>length</td>
      </tr>
      <tr>
        <td>padding-top</td>
        <td>length</td>
      </tr>
      <tr>
        <td>right</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>text-indent</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>text-shadow</td>
        <td>shadow</td>
      </tr>
      <tr>
        <td>top</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>vertical-align</td>
        <td>keywords, length, percentage</td>
      </tr>
      <tr>
        <td>visibility</td>
        <td>visibility</td>
      </tr>
      <tr>
        <td>width</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>word-spacing</td>
        <td>length, percentage</td>
      </tr>
      <tr>
        <td>z-index</td>
        <td>integer</td>
      </tr>
      <tr>
        <td>zoom</td>
        <td>number</td>
      </tr>
    </tbody>
  </table>
<p>In addition to this, all browsers with transitions support animating CSS transforms, which proves to be invaluable.</p>
<p>To find out more about CSS3 transitions, read through the <a href="http://www.w3.org/TR/css3-transitions/">W3C specification</a>.</p>
</section>