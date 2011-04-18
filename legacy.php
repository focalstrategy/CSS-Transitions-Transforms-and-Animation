<section id="legacy">
	<h1>How will it look in legacy browsers?</h1>
	<p>With all these examples, no attempt has been made to hack around browsers with no support, other than adding the opacity filter in IE where appropriate. This ends up as two lines, as they changed it to a different incorrect syntax between versions 7 and 8.</p>
	<p>In most cases, the transition happens, but with no animation - you see the beginning and end frames but nothing in between. Depending on the site, this may or may not be acceptable. <a href="http://www.modernizr.com">Modernizr</a> provides a nice feature detection library, allowing you to easily add different CSS/JS for legacy browsers.</p>
	<p>The best way to do this in practice is to include Modernizr, then to use some javascript such as:</p>
<pre class="js">
speed = 500;

var vP = "";
var transitionEnd = "transitionEnd";
if ($.browser.webkit) {
	vP = "-webkit-";
	transitionEnd = "webkitTransitionEnd";
} else if ($.browser.msie) {
	vP = "-ms-";
	transitionEnd = "msTransitionEnd";	
} else if ($.browser.mozilla) {
	vP = "-moz-";
	transitionEnd = "transitionend";
} else if ($.browser.opera) {
	vP = "-o-";
	transitionEnd = "oTransitionEnd";
}	
	
function animate(object, cssProperties, callback, ms) {
	if (!ms) {
		ms = speed;
	}

	if (Modernizr.csstransitions) {
		object.css(vP+"transition", "all "+ms+"ms ease-in-out");

		object.css(cssProperties);

		if ($.isFunction(callback)) {

			object.bind(transitionEnd,function(){
				object.unbind(transitionEnd);
				callback();
			});

		}

	} else {
		if ($.isFunction(callback)) {		
			object.animate(cssProperties, ms, callback);
		} else {
			object.animate(cssProperties, ms);			
		}
	}
}
</pre>

<p>You can then use javascript to animate something and know that in modern browsers it will use a transition, while in older ones you get the jQuery animation. On the iPhone and iPad particularly this approach gets you much higher frame rates than just using the jQuery animate method.</p>

<p>If you are using simple properties, you can call it like this:</p>

<pre class="js">
	animate($("#someID"),{"left":"100px"});
</pre>

<p>For things where the property to be changed has the vendor prefix concatenated to it, use:</p>

<pre class="js">
var cssArgs = {};
cssArgs[vP+"transform"] = "translate(100px,0px)";

animate($("#someID"),cssArgs);
</pre>

<p>If you are better at JS than me and can think of a way to make this less clumsy, please let me know!</p>
</section>