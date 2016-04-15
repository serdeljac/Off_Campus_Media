<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Off Campus - Sitemap</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css_php/default.css" />
	<style>
		main {height: 270px; color: white; }
		#map {width: 900px; margin: auto;}
		.group {width: 300px; float: left; margin: auto; }
		.group a {color: #E0E0E0;}
		.group a:hover {color: purple; text-decoration: underline;}
	</style>
</head>

<body>

<!--******************************************************************************************************************|
|      Begins the navigation bar and main header  			                       									  |
|*******************************************************************************************************************-->
<?php include("css_php/header.php");?>
		<span id="pagetitle">Site Map</span>
	<hr class="border">

<!--******************************************************************************************************************|
|      Begins main content just below header       			                       									  |
|*******************************************************************************************************************-->
	
	<main>
		<div id="map">
			<div class="group">
				<h2>Events</h2>
				<a href="index.php">Recent Updates</a><br>
				<a href="vancouver.php">Vancouver</a><br>
				<a href="richmond.php">Richmond</a><br>
				<a href="burnaby.php">Burnaby</a><br>
				<a href="surrey.php">Surrey</a><br>
				<a href="coquitlam.php">Coquitlam</a>
			</div>

			<div class="group">
				<h2>Jobs</h2>
				<a href="sorry.php">Volunteer</a><br>
				<a href="sorry.php">Employment</a>
			</div>

			<div class="group">
				<h2>Store</h2>
				<a href="sorry.php">Store</a><br>
				<a href="sorry.php">Tickets</a>
			</div>

			<div class="group">
				<h2>Calendar</h2>
				<a href="sorry.php">Calendar</a>
			</div>

			<div class="group">
				<h2>Contact</h2>
				<a href="contact.php">Location</a><br>
				<a href="faqs.php">FAQS</a><br>
				<a href="history.php">History</a><br>
				<a href="privatepolicy.php">Private Policy</a>
			</div>
		</div>

	</main>
</div>

<!--******************************************************************************************************************|
|      Begins the footer table (end of main content)                              									  |
|*******************************************************************************************************************-->
<?php include("css_php/footer.php");?>