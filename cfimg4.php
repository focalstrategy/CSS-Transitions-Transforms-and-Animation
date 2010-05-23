<h2 id="cfimg4">Demo 4 - More than just fades</h2>
<p>This technique isn't limited to just fades, you can animate almost every property. Here are a couple of examples.</p>
<h3>Zooming in and out</h3>
<p class="note">These are quite temperamental in Safari, but work fine in Chrome &amp; Webkit Nightlies.</p>
<style>
	#cf4 {
		position:relative;
		height:281px;
		width:450px;
		margin:0 auto;
	}
	#cf4 img {
		position:absolute;
		left:0;
		-webkit-transition: all 1s ease-in-out;
		-moz-transition: all 1s ease-in-out;
		-o-transition: all 1s ease-in-out;
		transition: all 1s ease-in-out;
	}
	
	#cf4 img.top {
		-webkit-transform:scale(0,0);
		opacity:0;

	}
	
	#cf4:hover img.top, #cf4.hover_effect img.top {
		opacity:1;
		-webkit-transform:scale(1,1);
		-webkit-transform-origin: top right;		
	}
	
	#cf4:hover img.bottom, #cf4.hover_effect img.bottom {
		-webkit-transform:scale(0,0);
		-webkit-transform-origin: bottom left;
	}
	
</style>
<div id="cf4" class="hover">
	<img class="bottom shadow" src="/images/Stones.jpg" />
	<img class="top shadow" src="/images/Summit.jpg" />
</div>
	<p class="center">Hover on the image</p>
<h3>Rotation</h3>
<style>
	#cf5 {
		position:relative;
		height:281px;
		width:450px;
		margin:10px auto;
	}
	#cf5 img {
		position:absolute;
		left:0;
		-webkit-transition: all 1s ease-in-out;
		-moz-transition: all 1s ease-in-out;
		-o-transition: all 1s ease-in-out;
		transition: all 1s ease-in-out;
	}
	
	#cf5 img.top {
		-webkit-transform:scale(1,0);
		opacity:0;

	}
	
	#cf5:hover img.top, #cf5.hover_effect img.top {
		opacity:1;
		-webkit-transform:scale(1,1);
	}
	
	#cf5:hover img.bottom, #cf5.hover_effect img.bottom {
		-webkit-transform:rotate(360deg) scale(0,0);
	}
	
</style>
<div id="cf5" class="hover">
	<img class="bottom shadow" src="/images/Stones.jpg" />
	<img class="top shadow" src="/images/Summit.jpg" />
</div>
	<p class="center">Hover on the image</p>