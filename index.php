<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php")
	?>

</head>
<body class="stick">
	<!--block for animation-->
	<?php
		@include("partials/preloader.html")
	?>
	<section class="static-content transition">
		<div class="container">
			<!--header-->
			<?php
				@include("partials/top.html")
			?>

			<div class="main flex flex-center">
				<div class="inside">
					<p class="mainTitle"><?php echo TITLE;?>,</p>
					<p class="note"><?php echo NOTE;?>.</p>
				</div>
			</div>
			<div class="additionalInfo right-align">
				<p class="bold date hide">5-11-2016</p>
				<p class="city hide"><?php echo CITY;?></p>
				<p class="company hide"><?php echo COMPANY;?></p>
			</div>
			<!--button for menu-->
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
		<div class="fixer-container absolute">
			<a href="#" class="bottom-link"><?php echo SPEAKERS;?></a>
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
	<script type="text/javascript" src="js/common.js"></script>	
</body>
</html>