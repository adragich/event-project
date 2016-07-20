<!DOCTYPE html>
<html>
<head>
	<title>Meta title</title>
	<?php
		@include("partials/head.php");
	?>

</head>
<body>
	<!--block for animation-->
	<!--TODO: create unique block for the page-->
	<section class="static-content transition">
		<div class="container">

			<!--header-->
			<?php
				@include("partials/top.html")
			?>

			<div class="main flex flex-center">
				<div class="inside">
					<p>main content</p>
				</div>
			</div>
			<div class="additionalInfo right-align">
				<p>additional info</p>
			</div>
			<!--button for menu-->
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>	
	<section class="scrollableContent">
		<div class="container">
			<div class="col l6 m6 s12">
				<div class="col l8">
					<img src="" alt="">
					<div class="s12 speaker-info">
						<p class="blockTitle">Kriss Hermansson</p>
						<p class="block-content">Creative Director at Resn</p>
						<p class="block-note">www.resn.co.nz</p>
					</div>
				</div>
				<div class="col l4 stick-bottom">
					<a href="" class="learn-more-link">Learn more</a>
				</div>
			</div>
		</div>
	</section>
	<!--menu-->
	<?php
		@include("partials/sidebar.html")
	?>
	<div class="overlay clear transition"></div>
	<?php
		@include("partials/scripts.html")
	?>		
	<script type="text/javascript" src="js/appear.js"></script>	
</body>
</html>