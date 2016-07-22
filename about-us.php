<!DOCTYPE html>
<html>
<head>
	<title>Meta title</title>
	<?php
		@include("partials/head.php");
	?>

</head>
<body class="about-us-body">
	<!--block for animation-->
	<!--TODO: create unique block for the page-->
	<?php
		@include("partials/preloader-about-us.html")
	?>
	<section class="transition white">
		<div class="container">

			<!--header-->
			<?php
				@include("partials/top.html")
			?>

			<div class="main about-us sub flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside">
					<p class="mainTitle"><?php echo ABOUT_US;?></p>
					<p class="note"><?php echo ABOUT_US_NOTE;?>.</p>
				</div>
			</div>
			<div class="main about-us sub info flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside text">
					<div class="about-us-info l12">
						<p class="blockTitle animated fadeInUp wow" data-wow-delay="1s">Projekcje to pomysł projektantów</p>
						<p class="block-content animated fadeInUp wow" data-wow-delay="1s">Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building events. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<br><br>
						<p class="blockTitle section-two animated fadeInUp wow" data-wow-delay="1.5s">Dla projektantów</p>
						<p class="block-content animated fadeInUp wow" data-wow-delay="1.5s">Spacious and easy to arrange – ideal for conferences, banquets, concerts, team-building events. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="animation-space">
					<!--TODO: ask about that animation space-->
					ANIMATION???
				</div>
			</div>
			<div class="main about-us sub orgs flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside orgs">
						<p class="mainTitle">Organizatorzy projekcji</p>
						<br>
						<p class="note">Projektanci organizujący event dla projektantów.</p>
					</div>
				</div>
			</div>
			<!--button for menu-->
			<div class="navigation animated fadeInUp wow" data-wow-delay="3s" data-wow-duration="2s" data-scroll="0">
				<i class="fa fa-angle-down"  data-parallax='{"y" : -300, "smoothness": 20}' aria-hidden="true"></i>
			</div>
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>	
	<section class="scrollableContent about relative">
		<div class="container">
			<div class="col xl6 l12 m12 s12 speakerWrap fadeInUp" data-parallax='{"y" : -200, "from-scroll": 200, "distance": 1400, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/Piotr-Swierkowski.jpg" alt="Piotr Swierkowski">
					<div class="l12 speaker-info">
						<p class="blockTitle">Piotr Swierkowski</p>
						<p class="block-content">Owner/Art Director at torpedov.com _</p>
						<p class="block-note">www.torpedov.com</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow">Learn more</a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 40}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/Kuba-Enzowski.jpg" alt="Kuba Enzowski">
					<div class="l12 speaker-info">
						<p class="blockTitle">Kuba Enzowski</p>
						<p class="block-content">Owner at Komunikat _</p>
						<p class="block-note">behance.net/komunikat</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow">Learn more</a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -300, "from-scroll": 300, "distance": 1400, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/Natalia-Zerko.jpg" alt="Natalia Żerko">
					<div class="l12 speaker-info">
						<p class="blockTitle">Natalia Żerko</p>
						<p class="block-content">Head and Art Directior / illustrator w Komunikat _</p>
						<p class="block-note">behance.net/komunikat</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow">Learn more</a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/Ewelina-Dymek.jpg" alt="Ewelina Dymek">
					<div class="l12 speaker-info">
						<p class="blockTitle">Ewelina Dymek</p>
						<p class="block-content">Branding Studio _</p>
						<p class="block-note">behance.net/edmk</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow">Learn more</a>
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
	<script type="text/javascript" src="js/sub.js"></script>
	<script type="text/javascript" src="js/appear.js"></script>	
</body>
</html>