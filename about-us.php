
<!DOCTYPE html>
<html>
<head>
	<title>Meta title</title>
	<?php
		@include("partials/head.php")
	?>

</head>
<body>
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