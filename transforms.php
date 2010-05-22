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
}

#transDemo1 #scale {
	-webkit-transform:scale(1,0.5);
	-moz-transform:scale(1,0.5);
	-o-transform:scale(1,0.5);
}

#transDemo1 #rotate {
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-o-transform:rotate(45deg);	
}

#transDemo1 #translate {
	-webkit-transform:translate(10px, 20px);
	-moz-transform:translate(10px, 20px);
	-o-transform:translate(10px, 20px);
}
#transDemo1 #rotate-skew-scale-translate {
	-webkit-transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);
	-moz-transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);	
	-o-transform:skew(30deg) scale(1.1,1.1) rotate(40deg) translate(10px, 20px);			
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
	transition: all 2s ease-in-out;
}

#transDemo2 div:hover {
	-webkit-transform:rotate(720deg) scale(2,2);
	-moz-transform:rotate(720deg) scale(2,2);
	-o-transform:rotate(720deg) scale(2,2);	
}
</style>
<div id="transDemo2">
	<div>Hover on me and I'll spin and scale!</div>
</div>
<h2>3D Examples</h2>
<p class="note">3D transforms only work in Safari and Webkit Nightlies.</p>
<style>
#transDemo3 {
	-webkit-perspective: 800;
	-webkit-perspective-origin: 50% 100px;
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
}

#transDemo3 #Ycube,#transDemo3 #Zcube {
	-webkit-transform-style: preserve-3d;	
}

#transDemo3 .face {
	position: absolute;
	height: 160px;
	width: 160px;
	padding: 20px;
	background-color: rgba(50, 50, 50, 0.3);
	-webkit-backface-visibility: visible;	
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
     background-color: rgba(255, 0, 0, 0.5);
}

#cube .two {
	-webkit-transform: translateZ(100px);
}

#cube .three {
	-webkit-transform: rotateY(90deg) translateZ(100px);
}

#cube .four {
	-webkit-transform: rotateY(180deg) translateZ(100px);
     background-color: rgba(0, 255, 0, 0.5);	
}

#cube .five {
	-webkit-transform: rotateY(-90deg) translateZ(100px);
}

#cube .six {
	-webkit-transform: rotateX(-90deg) translateZ(100px) rotate(180deg);
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
	$('#td3controls #td3xrot').change(function () {
			$('#cube').css("-webkit-transform","rotateX("+$('#td3controls input#td3xrot').val()+"deg)");
			$('label[for="td3xrot"]').html("X rotation ("+$('#td3controls input#td3xrot').val()+" deg)")
	});
	$('#td3controls #td3yrot').change(function () {
			$('#Ycube').css("-webkit-transform","rotateY("+$('#td3controls input#td3yrot').val()+"deg)");
			$('label[for="td3yrot"]').html("Y rotation ("+$('#td3controls input#td3yrot').val()+" deg)")			
	});
	$('#td3controls #td3zrot').change(function () {
			$('#Zcube').css("-webkit-transform","rotateZ("+$('#td3controls input#td3zrot').val()+"deg)");
			$('label[for="td3zrot"]').html("Z rotation ("+$('#td3controls input#td3zrot').val()+" deg)")			
	});	
	$('#td3controls #td3perspective').change(function () {
			$('#transDemo3').css("-webkit-perspective",$('#td3controls input#td3perspective').val());
			$('label[for="td3perspective"]').html("Perspective ("+$('#td3controls input#td3perspective').val()+")")			
	});		
});
</script>
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
	<label for="td3perspective">Perspective (800)</label>
	<input id="td3perspective" type="range" min="200" max="2000" default="800" />	
</div>
<div class="clear"></div>
<p>Have a play with the controls - there's not transition here, just the sliders to control it. Note that I'm only using javascript to update the css values - all the maths needed is done by the browser automatically.</p>
</section>
