<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title = "Home";
		include('inc/head.php');
	?>
	<link href="lib/css/homepage.css" rel="stylesheet" type="text/css">
	<link href="lib/css/box_examples.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div id="home-background-img">
			<?php include ('inc/nav.php'); ?>
			<div id="intro-box">
				<img id="g2g-logo" src="lib/imgs/g2glogo.png" alt="Greens to Grounds Logo">
				<a href="#our-mission"><img src="lib/imgs/arrow.svg" height="60px" width="60px" alt="arrow"></a>
			</div>
		</div>

		<div class="section" id="our-mission">
			<div id="our-mission-body">
				<div>
					<h1>Our mission</h1>
					<p>We are a non-profit, student-run CSA (community supported agriculture) model bringing fresh, local produce and specialty items to the UVA community. We strive to foster a more sustainable relationship between UVA and Charlottesville food producers. We seek to provide students, faculty, and staff with access to fresh, seasonal, and local food on a weekly basis, while providing local farmers and artisans with dedicated support from the University community. Join us in eating well, supporting Central Virginia farmers, and celebrating local food.</p>
				</div>
				<img src="lib/imgs/handshake.png" alt="handshake">
			</div>
			<img src="lib/imgs/fixed_diagram.png" alt="diagram">
		</div>
		<div class="section" id="whats-in-the-boxes">
			<h1>What's in the boxes?</h1>
			<dl>
				<dt>March</dt>
				<dd>Apples, Spinach, Herbs</dd>

				<dt>April</dt>
				<dd>Apples, Asparagus, Spinach, Herbs, Strawberries, Onions</dd>

				<dt>May</span></dt>
				<dd>Asparagus, Beets, Spinach, Herbs, Strawberries, Onions</dd>

				<dt>Add-Ons (Vary Weekly)</dt>
				<dd>Cheese, Freshly-Baked Bread, Granola, Chorizo Sausage, Pastured Ground Beef, Hummus, Queso, Salsa, Apple Cider Donuts, Eggs, Honey</dt>
			</dl>
			<img src="lib/imgs/boxexample1.jpg" alt="box example">
		</div>
		<div class="section">
			<div id="get-started-body">
				<h1>Ready to get started?</h1>
				<p>Choose between pre-built snack boxes and produce boxes, delivered weekly.<br>Starting at only $10</p>
				<a href="order.php"><img src="lib/imgs/ordernow.png" alt="Order Now!"></a>
			</div>
		</div>
		<div class="section">
			<img src="lib/imgs/box.png" alt="handshake">
			<p style="font-size: 10px; text-align: center; padding: 5px;">Although this organization has members who are University of Virginia students and may have University employees associated or engaged in its activities and affairs, the organization is not a part of or an agency of the University. It is a separate and independent organization which is responsible for and manages its own activities and affairs. The University does not direct, supervise or control the organization and is not responsible for the organization's contracts, acts or omissions.</p>
		</div>

	</div>
	<?php include ('inc/footer.php'); ?>
</body>

</html>