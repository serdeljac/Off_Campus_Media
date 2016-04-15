<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Off Campus - Contact Us</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css_php/default.css" />
	<style>
		main {width: 900px; margin: auto; font-size: 20px;}
		#info {width: 350px; color: white; float: left;}
		#map-canvas {
			width: 500px;
			height: 400px;
			float: right;
			margin: 20px 0;
			border: 5px solid green;
			}
		#info a {color: white;}
		#info a:hover {color: purple;}
	</style>
</head>

<body>

<!--******************************************************************************************************************|
|      Begins the navigation bar and main header  			                       									  |
|*******************************************************************************************************************-->
	<?php include("css_php/header.php");?>
		<span id="pagetitle">Contact</span>
	<hr class="border">


<!--******************************************************************************************************************|
|      Begins main content just below header       			                       									  |
|*******************************************************************************************************************-->
	
	<main>
		<div id="info">
			<h2>Address:</h2>
			<p>1061 Granville St<br>
			Vancouver, BC V6Z 1L4<br>
			<small>*Not an actual location</small></p>
			
			<h2>Contact:</h2>
			<p>Phone:778.834.3817<br>
			<a href="mailto:serdeljac88@gmail.com">Email: administration@offcampus.com</a></p>
		
		</div>
		<div id="map-canvas"></div>
	</main>
	
	</div>
<!--******************************************************************************************************************|
|      Area below is for Java scripts                              									  				  |
|*******************************************************************************************************************-->

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
		function initialize() {
			var myLatlng = new google.maps.LatLng(49.278736, -123.124108);
			var mapOptions = {
				zoom: 17,
				center: myLatlng
				}
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: 'Hello World!'
				}
			);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<!--******************************************************************************************************************|
|      Begins the footer table (end of main content)                              									  |
|*******************************************************************************************************************-->
<?php include("css_php/footer.php");?>
