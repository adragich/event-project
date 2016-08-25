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
	<section class="scrollableContent relative workshop-modal-section">
		<div class="container">
			<div class="col s12 l4 m4 workshop-block">
				<div class="workshop-inner">
					<p class="blockTitle">Modo 3D</p>
					<p class="block-content">Podstawy projektowania 3D.</p>
					<img src="" alt="">
					<p class="owner">Wojtek Magierski <span class="italic">/ magierski.pl</span></p>
					<p class="block-content">Wojciech Magierski - ilustrator, artysta cyfrowy - urodził się w 1983 r.
						Na co dzień mieszka i pracuje w Krakowie. Jego ilustracje publikowane są w magazynach
						graficznych na całym świecie. W dosyć krótkiej karierze zawodowej osiągnął m.in.
						dwa znaczące sukcesy - jego projekty zostały zamieszczone na okładkach magazynów Advanced
						Photoshop w Wielkiej Brytanii oraz Computer Arts w Polsce.</p>
				</div>
			</div>
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