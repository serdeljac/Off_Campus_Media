<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Off Campus - Locations</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css_php/default.css" />
	<style>
		main {
			width: 860px; 
			margin: 20px auto;
			}
	
		.left {
			width: 360px; 
			float: left; 
			margin-bottom: 20px;
			}

		.right {
			width: 360px; 
			float: right; 
			margin: 0 50px 20px;
			}

		main img {
			border: 3px solid grey;
			}
	</style>

</head>

<body>

<!--******************************************************************************************************************|
|      Begins the navigation bar and main header  			                       									  |
|*******************************************************************************************************************-->
	<?php include("css_php/header.php");?>
		<span id="pagetitle">Events</span>
	<hr class="border">


<!--******************************************************************************************************************|
|      Begins main content just below header       			                       									  |
|*******************************************************************************************************************-->
	
	<main>
	
		<div class="left">
			<a href="vancouver.php">
				<img src="images/vancouver/main.jpg" alt="vancouver" 
					onMouseOver="this.src=('images/vancouver/main2.jpg')" 
					onMouseOut="this.src=('images/vancouver/main.jpg')" />
			</a>
		</div>
		
		<div class="right">
			<a href="richmond.php">
				<img src="images/richmond/main.jpg" alt="richmond"
					onMouseOver="this.src=('images/richmond/main2.jpg')" 
					onMouseOut="this.src=('images/richmond/main.jpg')" />
			</a>
		</div>
		
		<div class="left">
			<a href="burnaby.php">
				<img src="images/burnaby/main.jpg" alt="burnaby" 
					onMouseOver="this.src=('images/burnaby/main2.jpg')" 
					onMouseOut="this.src=('images/burnaby/main.jpg')" />
			</a>
		</div>
		
		
		<div class="right">
			<a href="surrey.php">
				<img src="images/surrey/main.jpg" alt="surrey"
					onMouseOver="this.src=('images/surrey/main2.jpg')" 
					onMouseOut="this.src=('images/surrey/main.jpg')" />
			</a>
		</div>
		
		
		<div class="left">
			<a href="coquitlam.php">
				<img src="images/coquitlam/main.jpg" alt="coquitlam" 
					onMouseOver="this.src=('images/coquitlam/main2.jpg')" 
					onMouseOut="this.src=('images/coquitlam/main.jpg')" />
			</a>
		</div>
		
	</main>
</div>

<!--******************************************************************************************************************|
|      Begins the footer table (end of main content)                              									  |
|*******************************************************************************************************************-->
<?php include("css_php/footer.php");?>