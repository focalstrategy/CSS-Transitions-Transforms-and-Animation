<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>What's Happening</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<link rel="stylesheet" href="css/default.css" media="screen">
		<meta name="apple-mobile-web-app-capable"content="yes" />

	</head>		
	<body>
		<div id="wrapper">
		<h1 id="title">What's happening</h1>
		<div id="localevents"></div>
		</div>
	<script>
	var page = 3;
	function addData (lat, lon, page) {
		$("#title").html("What's happening near "+lat+", "+lon);
		$.getJSON("lastfm.php?lat="+lat+"&lon="+lon+"&page="+page, function(data){
				$("#localevents").html("");
			$.each(data.events, function(i,event){
				startDate=event.startDate;
				$("<div class='event flippable'/>").html("<div class='card'><div class='front face'><h1>"+event.headliner+"</h1><p>"+event.venue.name+"</p><p>"+startDate.slice(0, -9)+"</p><img src="+event.image_large+" /></div><div class='back face'><p>"+event.venue.name+", "+event.venue.location.city+"</p><img class='map' src='http://maps.google.com/maps/api/staticmap?center="+event.venue.location.geo_point.lat+","+event.venue.location.geo_point.long+"&markers=color:blue|"+event.venue.location.geo_point.lat+","+event.venue.location.geo_point.long+"&zoom=12&size=200x200&sensor=true'></div></div>").appendTo("#localevents");
			});
			$("<div id='leftarrow'><p>Previous<p></div>").appendTo("#localevents");
			$("<div id='rightarrow'><p>Next<p></div>").appendTo("#localevents");
			$('#rightarrow').live('click touchstart', function(e) {
				page = page + 1;
				addData (lat, lon, page);
			});
			$('#leftarrow').live('click touchstart', function(e) {
				page = page - 1;
				if (page < 1) {
					page = 1;
				}
				addData (lat, lon, page);
			});			
		});
	}
	
	if (navigator.geolocation) {	
		navigator.geolocation.getCurrentPosition(function(position) {
			lat = position.coords.latitude;
			lon = position.coords.longitude;
			page = 1;
			addData (lat, lon,page);
		});
	} else {
		lat = 50.42;
		lon = -3.57;
		addData (lat, lon,1);
	}


	</script>
	<script>
		$(document).ready(function() {
			$('.hover').live('touchstart touchend', function(e) {
				e.preventDefault();
				$(this).toggleClass('hover_effect');
			});
			
			$('.flippable').live('touchstart', function(e) {
				e.preventDefault();				
				$('.flippable').addClass('faded');
				$(this).addClass('flipped');
				$('.flipped').removeClass('faded');				
			});
			
			$('.flippable').live('touchend', function(e) {
				e.preventDefault();				
				$('.flippable').removeClass('faded');
				$(this).removeClass('flipped');
			});
		});
	</script>	
	</body>
</html>
