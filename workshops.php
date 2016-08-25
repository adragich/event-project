<!DOCTYPE html>
<html>
<head>
	<title>Meta title</title>
	<?php
	@include("partials/head.php")
	?>

</head>
<body>
	<!--block for animation-->
	<?php
		@include("partials/preloader-workshops.html");
	?>
	<section class="static-content transition">
		<div class="container">

			<!--header-->
			<?php
			@include("partials/top.html")
			?>

			<div class="fillAndCenter main flex flex-center padding-2x inner-page program">
				<div class="inside">
					<p class="mainTitle"><?php echo WORKSHOPS;?></p>
					<p class="note"><?php echo WORKSHOPS_NOTE;?></p>
					<div id="middlePart" class="transition hide animated fadeIn"></div>
				</div>
			</div>
			<div data-offset="0" data-id="#workshopSection" class="navigation animated fadeInUp wow" data-wow-delay="1s">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<!--button for menu-->
			<?php
			@include("partials/menu-button.html")
			?>
		</div>
	</section>
	<section class="scrollableContent relative workshop-section" id="workshopSection">
		<div class="container">
			<p class="blockTitle">Na wybrane warsztaty możesz zapisać się kupując bilet na konferencję !
				Warsztaty nie są dodatkowo płatne, lecz ilość miejsc jest ograniczona.</p>
			<p class="block-content">Poniżej znajduje się lista warsztatów, które odbędą się podczas konferencji. 
				Kliknij i dowiedz się więcej o każdym z nich.
			</p>
		</div>
	</section>
	<!--menu-->
	<?php
	@include("partials/sidebar.html")
	?>
	<?php
	@include("partials/scripts.html")
	?>
	<script type="text/javascript" src="js/appear.js"></script>
</body>
</html>