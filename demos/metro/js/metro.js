$(function(){
	$(".tile").on("mousedown",function(e){
		var height = $(this).height();
		var width = $(this).width();
		var xsection;
		var ysection;

		$$ = $(this);

		if (e.offsetX/width < 0.3333 ) {
			xsection = 1;
		} else if (e.offsetX/width > 0.66667 ) {
			xsection = 3;
		} else {
			xsection = 2;
		}

		if (e.offsetY/height < 0.3333 ) {
			ysection = 1;
		} else if (e.offsetY/height > 0.66667 ) {
			ysection = 3;
		} else {
			ysection = 2;
		}		

		if (xsection === 1) {
			// Rotate Left

		$$.css({"-webkit-transform":"rotateY(-20deg)", "-webkit-transform-origin":"100% 0%"});
		} else if (xsection === 3) {
			// Rotate Right
		$$.css({"-webkit-transform":"rotateY(20deg)", "-webkit-transform-origin":"0% 100%"});

		} else if (ysection === 1) {
			// Rotate Up
		$$.css({"-webkit-transform":"rotateX(20deg)", "-webkit-transform-origin":"100% 100%"});

		} else if (ysection === 3) {
			// Rotate Down
		$$.css({"-webkit-transform":"rotateX(-20deg)", "-webkit-transform-origin":"0% 0%"});

		} else {
			// Depress
			$$.css({"-webkit-transform":"translateZ(-20px)"});
		}

	});

	$("body").on("mouseup",function(e){
		$(".tile").css({"-webkit-transform":"rotateX(0deg) rotateY(0deg) translateZ(0)"});
	});

});