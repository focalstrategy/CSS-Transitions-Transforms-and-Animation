<section id="how2transforms">
<h1>How to use transforms</h1>
<p>There are two categories of transform - 2D transforms and 3D transforms. As of May 2010, 3D transforms only work in Safari (both desktop and mobile). 2D transforms are more widely supported.</p>
<h2>2D examples</h2>
<style>
#transDemo1 div:not(.clear) {
	width:70px;
	height:130px;
	margin:10px 20px;
	padding:10px;
	border:1px red solid;
	float:left;
}
#transDemo1 #skew {
	-webkit-transform:skew(35deg);
	-moz-transform:skew(35deg);
	-o-transform:skew(35deg);
	-ms-transform:skew(35deg);
	transform:skew(35deg);
}

#transDemo1 #scale {
	-webkit-transform:scale(1,0.5);
	-moz-transform:scale(1,0.5);
	-o-transform:scale(1,0.5);
	-ms-transform:scale(1,0.5);
	transform:scale(1,0.5);	
}

#transDemo1 #rotate {
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	transform:rotate(45deg);	
}

#transDemo1 #translate {
	-webkit-transform:translate(10px, 20px);
	-moz-transform:translate(10px, 20px);
	-o-transform:translate(10px, 20px);
	-ms-transform:translate(10px, 20px);
	transform:translate(10px, 20px);	
}
#transDemo1 #rotate-skew-scale-translate {
	-webkit-transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);
	-moz-transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);	
	-o-transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);
	-ms-transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);
	transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);
}
</style>
<div id="transDemo1">
	<div id="skew">This div has been skewed - note that the text is still selectable.</div>
	<div id="scale">This div has been scaled - again, the text is real text.</div>
	<div id="rotate">This div has been rotated - you get the idea about the text!</div>
	<div id="translate">This div has been translated 10px down, and 20px across.</div>	
	<div id="rotate-skew-scale-translate">This div has all four types!</div>	
	<div class="clear"></div>
</div>
<p>The code for these looks like this, but with the appropriate vendor prefixes added:</p>
<pre class="css">
#skew {
	transform:skew(35deg);	
}
#scale {
	transform:scale(1,0.5);	
}
#rotate {
	transform:rotate(45deg);	
}
#translate {
	transform:translate(10px, 20px);
}
#rotate-skew-scale-translate {
	transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);
}
</pre>
<p>These can also be animated using transitions - try hovering on the div below.</p>
<style>
#transDemo2 div {
	height:100px;
	width:100px;
	border:1px red solid;
	margin:10px auto;
	text-align:center;
	-webkit-transition: all 2s ease-in-out;
	-moz-transition: all 2s ease-in-out;
	-o-transition: all 2s ease-in-out;
	-ms-transition: all 2s ease-in-out;	
	transition: all 2s ease-in-out;

}

#transDemo2 div:hover, #transDemo2 div.hover_effect {
	-webkit-transform:rotate(720deg) scale(2,2);
	-moz-transform:rotate(720deg) scale(2,2);
	-o-transform:rotate(720deg) scale(2,2);
	-ms-transform:rotate(720deg) scale(2,2);
	transform:rotate(720deg) scale(2,2);		
}
</style>
<div id="transDemo2">
	<div class="hover">Hover on me and I'll spin and scale!</div>
</div>
<h2>3D Examples</h2>
<p class="note">3D transforms work in Safari, Chrome, Firefox 10+ and IE10</p>

<p>3D transforms are similar to 2D transforms. The basic properties are translate3d, scale3d, rotateX, rotateY and rotateZ. Translate3d and scale3d take three arguments for x,y and z, whereas the rotates just take an angle. Here are some examples:</p>
<style>
#transDemo4 {
	width:400px;
	height:190px;
	margin:0 auto 10px;
	border:1px #aaa solid;
	padding:10px;
}



#transDemo4 div:not(.clear) {
	-webkit-transition:all 2s ease-in-out;
	-moz-transition:all 2s ease-in-out;
	-o-transition:all 2s ease-in-out;
	-ms-transition:all 2s ease-in-out;
	transition:all 2s ease-in-out;				
	
	-webkit-perspective: 800;
	-webkit-perspective-origin: 50% 100px;
	
	-moz-perspective: 800;
	-moz-perspective-origin: 50% 100px;
	
	-o-perspective: 800;
	-o-perspective-origin: 50% 100px;
	
	-ms-perspective: 800;
	-ms-perspective-origin: 50% 100px;	
	
	perspective: 800;
	perspective-origin: 50% 100px;	
	
	width:70px;
	height:130px;
	margin:10px 20px;
	padding:10px;
	border:1px blue solid;
	float:left;
}

#transDemo4:hover #rotateX, #transDemo4.hover_effect #rotateX {
	-webkit-transform:rotateX(180deg);
	-moz-transform:rotateX(180deg);
	-o-transform:rotateX(180deg);
	-ms-transform:rotateX(180deg);
	transform:rotateX(180deg);				
}
#transDemo4:hover #rotateY, #transDemo4.hover_effect #rotateY {
	-webkit-transform:rotateY(180deg);
	-moz-transform:rotateY(180deg);
	-o-transform:rotateY(180deg);
	-ms-transform:rotateY(180deg);
	transform:rotateY(180deg);	
}
#transDemo4:hover #rotateZ, #transDemo4.hover_effect #rotateZ {
	-webkit-transform:rotateZ(180deg);
	-moz-transform:rotateZ(180deg);
	-o-transform:rotateZ(180deg);
	-ms-transform:rotateZ(180deg);
	transform:rotateZ(180deg);
}
</style>
<div id="transDemo4" class="shadow hover">
	<div id="rotateX">rotateX</div>
	<div id="rotateY">rotateY</div>
	<div id="rotateZ">rotateZ</div>		
	<p class="center">Hover me</p>
	<div class="clear"></div>
</div>
<p>The simplified code for those looks like this:</p>
<pre class="css">
#transDemo4 div {
	transition:all 2s ease-in-out;		
	perspective: 800;
	perspective-origin: 50% 100px;	
}
#transDemo4:hover #rotateX {
	transform:rotateX(180deg);
}
#transDemo4:hover #rotateY {
	transform:rotateY(180deg);
}
#transDemo4:hover #rotateZ {
	transform:rotateZ(180deg);
}
</pre>
<style>
#transDemo3 {
	-webkit-perspective: 800;
	-webkit-perspective-origin: 50% 100px;
	
	-moz-perspective: 800;
	-moz-perspective-origin: 50% 100px;
	
	-o-perspective: 800;
	-o-perspective-origin: 50% 100px;
	
	-ms-perspective: 800;
	-ms-perspective-origin: 50% 100px;	
	
	perspective: 800;
	perspective-origin: 50% 100px;	
	margin:50px auto;
	width:400px;
	float:left;	
}

#transDemo3 #cube {
	position: relative;
	margin: 0 auto;
	height: 200px;
	width: 200px;
	-webkit-transform-style: preserve-3d;
	-webkit-transform-origin:(50% 100px 0);
	-moz-transform-style: preserve-3d;
	-moz-transform-origin:(50% 100px 0);
	-o-transform-style: preserve-3d;
	-o-transform-origin:(50% 100px 0);
	-ms-transform-style: preserve-3d;
	-ms-transform-origin:(50% 100px 0);
	transform-style: preserve-3d;
	transform-origin:(50% 100px 0);				
}

#transDemo3 #Ycube,#transDemo3 #Zcube {
	-webkit-transform-style: preserve-3d;	
	-moz-transform-style: preserve-3d;	
	-o-transform-style: preserve-3d;	
	-ms-transform-style: preserve-3d;	
	transform-style: preserve-3d;					
}

#transDemo3 .face {
	position: absolute;
	height: 160px;
	width: 160px;
	padding: 20px;
	background-color: rgba(50, 50, 50, 0.3);
	-webkit-backface-visibility: visible;	
	-moz-backface-visibility: visible;	
	-o-backface-visibility: visible;	
	-ms-backface-visibility: visible;
	backface-visibility: visible;					
	border:1px #aaa solid;
}

#transDemo3 .face p {
	font-size:160px;
	line-height:1;
	text-align:center;
	margin:0;
	padding:0;
	color:rgba(0,0,0,0.75);
}

#cube .one  {
	-webkit-transform: rotateX(90deg) translateZ(100px);
	-moz-transform: rotateX(90deg) translateZ(100px);
	-o-transform: rotateX(90deg) translateZ(100px);
	-ms-transform: rotateX(90deg) translateZ(100px);			
	transform: rotateX(90deg) translateZ(100px);				
     background-color: rgba(255, 0, 0, 0.5);
}

#cube .two {
	-webkit-transform: translateZ(100px);
	-moz-transform: translateZ(100px);
	-o-transform: translateZ(100px);
	-ms-transform: translateZ(100px);
	transform: translateZ(100px);				
}

#cube .three {
	-webkit-transform: rotateY(90deg) translateZ(100px);
	-moz-transform: rotateY(90deg) translateZ(100px);	
	-o-transform: rotateY(90deg) translateZ(100px);
	-ms-transform: rotateY(90deg) translateZ(100px);
	transform: rotateY(90deg) translateZ(100px);		
}

#cube .four {
	-webkit-transform: rotateY(180deg) translateZ(100px);
	-moz-transform: rotateY(180deg) translateZ(100px);
	-o-transform: rotateY(180deg) translateZ(100px);
	-ms-transform: rotateY(180deg) translateZ(100px);
	transform: rotateY(180deg) translateZ(100px);				
     background-color: rgba(0, 255, 0, 0.5);	
}

#cube .five {
	-webkit-transform: rotateY(-90deg) translateZ(100px);
	-moz-transform: rotateY(-90deg) translateZ(100px);
	-o-transform: rotateY(-90deg) translateZ(100px);
	-ms-transform: rotateY(-90deg) translateZ(100px);
	transform: rotateY(-90deg) translateZ(100px);				
}

#cube .six {
	-webkit-transform: rotateX(-90deg) translateZ(100px) rotate(180deg);
	-moz-transform: rotateX(-90deg) translateZ(100px) rotate(180deg);
	-o-transform: rotateX(-90deg) translateZ(100px) rotate(180deg);
	-ms-transform: rotateX(-90deg) translateZ(100px) rotate(180deg);
	transform: rotateX(-90deg) translateZ(100px) rotate(180deg);				
     background-color: rgba(0, 0, 255, 0.5);		
}

#td3controls {
	width:300px;
	float:right;
}

#td3controls label {
	float:left;
	width:150px;
}

#td3controls input {
	float:left;	
	width:150px;	
}
</style>
<script>
$(document).ready(function() {
	var vP = "";
	if ($.browser.webkit) {
		vP = "-webkit-";
	} else if ($.browser.msie) {
		vP = "-ms-";
	} else if ($.browser.mozilla) {
		vP = "-moz-";
	} else if ($.browser.opera) {
		vP = "-o-";
	}
	
	$('#td3controls #td3xrot').change(function () {
			$('#cube').css(vP+"transform","rotateX("+$('#td3controls input#td3xrot').val()+"deg)");
			$('label[for="td3xrot"]').html("X rotation ("+$('#td3controls input#td3xrot').val()+" deg)")
	});
	$('#td3controls #td3yrot').change(function () {
			$('#Ycube').css(vP+"transform","rotateY("+$('#td3controls input#td3yrot').val()+"deg)");
			$('label[for="td3yrot"]').html("Y rotation ("+$('#td3controls input#td3yrot').val()+" deg)")			
	});
	$('#td3controls #td3zrot').change(function () {
			$('#Zcube').css(vP+"transform","rotateZ("+$('#td3controls input#td3zrot').val()+"deg)");
			$('label[for="td3zrot"]').html("Z rotation ("+$('#td3controls input#td3zrot').val()+" deg)")			
	});	
	$('#td3controls #td3perspective').change(function () {
			$('#transDemo3').css(vP+"perspective",$('#td3controls input#td3perspective').val());
			$('label[for="td3perspective"]').html("Perspective ("+$('#td3controls input#td3perspective').val()+" px)")			
	});		
});
</script>
<h2>A cube made with 3d transforms</h2>
<div id="transDemo3">
	<div id="Zcube">
	<div id="Ycube">
	<div id="cube">
		<div class="face one">
			<p>1</p>
		</div>
		<div class="face two">
			<p>2</p>
		</div>
		<div class="face three">
			<p>3</p>
		</div>
		<div class="face four">
			<p>4</p>
		</div>
		<div class="face five">
			<p>5</p>
		</div>
		<div class="face six">
			<p>6</p>
		</div>
	</div>
	</div>
	</div>
</div>
<div id="td3controls">
	<label for="td3xrot">X rotation (0 deg)</label>
	<input id="td3xrot" type="range" min="-180" max="180" default="0" />
	<label for="td3yrot">Y rotation (0 deg)</label>
	<input id="td3yrot" type="range" min="-180" max="180" default="0" />
	<label for="td3zrot">Z rotation (0 deg)</label>
	<input id="td3zrot" type="range" min="-180" max="180" default="0" />
	<label for="td3perspective">Perspective (800 px)</label>
	<input id="td3perspective" type="range" min="200" max="2000" default="800" />	
</div>
<div class="clear"></div>
<p>Have a play with the controls - there's no transition here, just the sliders to control it. Note that I'm only using javascript to update the css values - all the maths needed is done by the browser automatically.</p>


<h2>3D transforms playground</h2>
<style>
#transPlay {
	margin:50px auto;
	width:400px;
	position:relative;

}

#transPlayStage {

	-webkit-perspective: 800px;
	-moz-perspective: 800px;
	-o-perspective: 800px;
	-ms-perspective: 800px;
	perspective: 800px;	
}
#transPlayControls {
	width:300px;
	float:right;
}

#transPlayControls label {
	float:left;
	width:150px;
}

#transPlayControls input {
	float:left;	
	width:150px;	
}
#transPlay div {
	position: absolute;
	top:0;
	left:0;
	width:150px;
	height:150px;
	outline:1px black solid;
}
#transPlayOriginal {
	background-color:rgba(255,0,0,0.2);
}
#transPlayChanged {
	background-color: rgba(255,0,0,0.5);
}
</style>
<script>
$(document).ready(function() {
	var vP = "";
	if ($.browser.webkit) {
		vP = "-webkit-";
	} else if ($.browser.msie) {
		vP = "-ms-";
	} else if ($.browser.mozilla) {
		vP = "-moz-";
	} else if ($.browser.opera) {
		vP = "-o-";
	}
	var transPlayChanged = $('#transPlayChanged');
	var transPlayperspective = $("#transPlayperspective");
	var transPlayStage = $("#transPlayStage");
	var transPlayX = $('#transPlayX');
	var transPlayY = $('#transPlayY');
	var transPlayZ = $('#transPlayZ');
	var transPlayXRot = $('#transPlayXRot');
	var transPlayYRot = $('#transPlayYRot');
	var transPlayZRot = $('#transPlayZRot');	

	transPlayZ.val(0);

	transPlayChanged.css(vP+"transform","translateX(0px) translateY(0px) translateZ(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg)");

	$('#transPlayControls input').change(function () {
			$('label[for="'+$(this).attr("id")+'"] span').html($(this).val());

			transPlayChanged.css(vP+"transform","translateX("+
				transPlayX.val()+"px) translateY("+
				transPlayY.val()+"px) translateZ("+
				transPlayZ.val()+"px) rotateX("+
				transPlayXRot.val()+"deg) rotateY("+
				transPlayYRot.val()+"deg) rotateZ("+
				transPlayZRot.val()+"deg)");			
	});	

	$('#transPlayperspective').change(function() {
		transPlayStage.css(vP+"perspective", transPlayperspective.val());
	});
});
</script>
<div id="transPlay">
	<div id="transPlayStage">
	<div id="transPlayOriginal"><p>Original</p></div>
	<div id="transPlayChanged"><p>Transformed</p></div>	
	</div>
</div>
<div id="transPlayControls">
	<label for="transPlayperspective">Perspective (<span>800</span> px)</label>
	<input id="transPlayperspective" type="range" min="100" max="1000" default="800" />		

	<label for="transPlayX">∆X (<span>0</span> px)</label>
	<input id="transPlayX" type="range" min="-170" max="170" default="0" />
	<label for="transPlayY">∆Y (<span>0</span> px)</label>
	<input id="transPlayY" type="range" min="-170" max="170" default="0" />
	<label for="transPlayZ">∆Z (<span>0</span> px)</label>
	<input id="transPlayZ" type="range" min="-400" max="170" default="0" />

	<label for="transPlayXRot">X rotation (<span>0</span> deg)</label>
	<input id="transPlayXRot" type="range" min="-180" max="180" default="0" />
	<label for="transPlayYRot">Y rotation (<span>0</span> deg)</label>
	<input id="transPlayYRot" type="range" min="-180" max="180" default="0" />
	<label for="transPlayZRot">Z rotation (<span>0</span> deg)</label>
	<input id="transPlayZRot" type="range" min="-180" max="180" default="0" />	

</div>
<div class="clear"></div>

<p>For more information read both the <a href="http://www.webkit.org/blog/386/3d-transforms/">Webkit blog entry from when 3D transforms were first implemented</a>, <a href="http://desandro.github.com/3dtransforms/">David Desandro's awesome examples</a> and <a href="http://ie.microsoft.com/testdrive/Graphics/hands-on-css3/hands-on_3d-transforms.htm">Microsoft's 3D transforms test drive</a>.</p>

<h3>Advanced usage</h3>
<p>Though it's rare that you'll need it, it's worth noting that the raw matrix implementations are exposed as well. As an example, the skew transform above has a skew of 35 degrees. To find the internal representation, you can use javascript to find the computed style. In this case, <code>skew(35deg)</code> is represented by <code>matrix(1, 0, 0.7002075382097097, 1, 0, 0)</code>. The astute among you will note that this is a 2&times;3 matrix. To use them for normal arithmetic, add a third row of <code>0, 0, 1</code>.</p>
<p>3D transforms are represented similarly, with a 4&times;4 matrix.</p>
<p>Understanding how to create these matrices is probably out of the scope of this tutorial, but an undergraduate understanding of matrix algebra should suffice. Read the <a href="http://en.wikipedia.org/wiki/Transformation_matrix#Examples_in_2D_graphics">Wikipedia article on transformation matrices</a> for a quick primer.</p>
<p>For the exact methods, read the part of the spec about <a href="http://www.w3.org/TR/css3-2d-transforms/#matrix-decomposition">2D matrix decomposition</a> and <a href="http://www.w3.org/TR/css3-3d-transforms/#cssmatrix-interface">3D matrix interface</a>.</p>
</section>
