<section id="accordion">
<h2>Accordions</h2>

<h3>Demo</h3>
<style>
	#accordion {
		margin-bottom:50px;
	}
	#accordion h1 {
		font-size:20px;
		background-color:rgba(255,0,0,0.7);
		margin:0;
		padding: 10px 10px 10px 30px;
	}
	
	#accordion h1 a {
		color:black;		
	}
	#accordion section {
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;
		overflow:hidden;
		height:220px;
		border:1px #333 solid;
	}
	#accordion section p {
		padding:0 10px;
	}
	#accordion section.ac_hidden {
		height:44px;
	}
	#accordion .pointer {
		padding:0 0 0 2px;
		margin:20px 0 0 0;
		line-height:0;
		width:13px;
		position:absolute;
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;		
	}
	#accordion section:not(.ac_hidden) .pointer {
		display:block;
		-webkit-transform:rotate(90deg);
		-moz-transform:rotate(90deg);
		-o-transform:rotate(90deg);
		transform:rotate(90deg);						
		padding:0;
	}
</style>
<script>
$(document).ready(function() {
	$("#accordion section h1 a").click(function(e) {
		$(this).parents().siblings("section").addClass("ac_hidden");
		$(this).parents("section").removeClass("ac_hidden");
		
		e.preventDefault();
	});
});
</script>
<div id="accordion">
	<section id="item1" class="active">
		<p class="pointer">&#9654;</p><h1><a href="#">A long paragraph</a></h1>
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
	</section>
	<section id="item2" class="ac_hidden">
		<p class="pointer">&#9654;</p><h1><a href="#">A medium paragraph</a></h1>				
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	</section>
	<section id="item3" class="ac_hidden">
		<p class="pointer">&#9654;</p><h1><a href="#">Two short paragraphs</a></h1>				
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
	</section>	
</div>
<p>Not sure if the use/abuse of Unicode is really a good idea, but you can see that it's pretty easy to get a simple accordion working.</p>
<p>I'm using classes again here to define different states, then using jQuery to turn them on and off. As always, I could use the :target pseudo selector, but I'd want to use preventDefault() onClick anyway to prevent the page skipping up and down, so I might as well just do it all in jQuery.</p>
</section>