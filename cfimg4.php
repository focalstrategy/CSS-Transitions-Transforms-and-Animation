<h2 id="cfimg4">Demo 4 - More than just fades</h2>
<p>This technique isn't limited to just fades, you can animate almost every property. Here are a couple of examples.</p>
<h3>Zooming in and out</h3>
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
		-ms-transition: all 1s ease-in-out;		
		transition: all 1s ease-in-out;
	}
	
	#cf4 img.top {
		-webkit-transform:scale(0,0);
		-moz-transform:scale(0,0);		
		-o-transform:scale(0,0);
		-ms-transform:scale(0,0);		
		transform:scale(0,0);				
		opacity:0;

	}
	
	#cf4:hover img.top, #cf4.hover_effect img.top {
		opacity:1;
		-webkit-transform:scale(1,1);
		-webkit-transform-origin: top right;
		-moz-transform:scale(1,1);
		-moz-transform-origin: top right;		
		-o-transform:scale(1,1);
		-o-transform-origin: top right;
		-ms-transform:scale(1,1);
		-ms-transform-origin: top right;		
		transform:scale(1,1);
		transform-origin: top right;		
	}
	
	#cf4:hover img.bottom, #cf4.hover_effect img.bottom {
		-webkit-transform:scale(0,0);
		-webkit-transform-origin: bottom left;
		-moz-transform:scale(0,0);
		-moz-transform-origin: bottom left;
		-o-transform:scale(0,0);
		-o-transform-origin: bottom left;
		-ms-transform:scale(0,0);
		-ms-transform-origin: bottom left;
		transform:scale(0,0);
		transform-origin: bottom left;		
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
		-ms-transition: all 1s ease-in-out;		
		transition: all 1s ease-in-out;
	}
	
	#cf5 img.top {
		-webkit-transform:scale(1,0);
		-moz-transform:scale(1,0);		
		-o-transform:scale(1,0);
		-ms-transform:scale(1,0);
		transform:scale(1,0);						
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);		
		opacity:0;

	}
	
	#cf5:hover img.top, #cf5.hover_effect img.top {
		opacity:1;
		-webkit-transform:scale(1,1);
		-moz-transform:scale(1,1);
		-o-transform:scale(1,1);
		-ms-transform:scale(1,1);
		transform:scale(1,1);								
	}
	
	#cf5:hover img.bottom, #cf5.hover_effect img.bottom {
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);		
		-webkit-transform:rotate(360deg) scale(0,0);
		-moz-transform:rotate(360deg) scale(0,0);
		-o-transform:rotate(360deg) scale(0,0);
		-ms-transform:rotate(360deg) scale(0,0);
		transform:rotate(360deg) scale(0,0);								
	}
	
</style>
<div id="cf5" class="hover">
	<img class="bottom shadow" src="/images/Stones.jpg" />
	<img class="top shadow" src="/images/Summit.jpg" />
</div>
	<p class="center">Hover on the image</p>