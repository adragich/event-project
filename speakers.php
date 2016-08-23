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
	<?php
		@include("partials/preloader-inner-pages.html")
	?>
	<section class="static-content transition">
		<div class="container">

			<!--header-->
			<?php
				@include("partials/top.html")
			?>

			<div class="fillAndCenter main sub flex flex-center padding-2x about-us speakers" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside">
					<p class="mainTitle"><?php echo SPEAKERS;?></p>
					<p class="note"><?php echo SPEAKERS_NOTE;?>.</p>
				</div>
			</div>
			<!--button for menu-->
			<div data-scroll="300" class="navigation animated fadeInUp wow" data-wow-delay="1s">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>	
	<section class="scrollableContent relative">
		<div class="container">
			<div class="col xl6 l12 m12 s12 speakerWrap fadeInUp" data-parallax='{"y" : -200, "from-scroll": 200, "distance": 1400, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/hermansson.jpg" alt="Kriss Hermansson">
					<div class="l12 speaker-info">
						<p class="blockTitle">Kriss Hermansson</p>
						<p class="block-content">Creative Director at Resn _</p>
						<p class="block-note">www.resn.co.nz</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 40}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/brown.jpg" alt="Marcus Brown">
					<div class="l12 speaker-info">
						<p class="blockTitle">Marcus Brown</p>
						<p class="block-content">Senior Art Director at Resn _</p>
						<p class="block-note">www.resn.co.nz</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -300, "from-scroll": 300, "distance": 1400, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/rog.jpg" alt="Grzegorz Róg">
					<div class="l12 speaker-info">
						<p class="blockTitle">Grzegorz Róg</p>
						<p class="block-content">Owner at eduweb.pl _</p>
						<p class="block-note">www.eduweb.pl</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow"></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/hopa-studio.jpg" alt="Hopa Studio">
					<div class="l12 speaker-info">
						<p class="blockTitle">Hopa Studio</p>
						<p class="block-content">Branding Studio _</p>
						<p class="block-note">www.hopastudio.com</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -300, "from-scroll": 300, "distance": 1400, "smoothness": 40}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/hardziej.jpg" alt="Patryk Hardziej">
					<div class="l12 speaker-info">
						<p class="blockTitle">Patryk Hardziej</p>
						<p class="block-content">Illustrator/Owner at Negation Studio _</p>
						<p class="block-note">www.negationstudio.com</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.5s">
					<img src="img/speakers/wedzicka.jpg" alt="Martyna Wędzicka">
					<div class="l12 speaker-info">
						<p class="blockTitle">Martyna Wędzicka</p>
						<p class="block-content">Designer/Owner at Lesstudio _</p>
						<p class="block-note">www.lesstudio.pl</p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.5s">
					<a href="" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
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
	<script type="text/javascript" src="js/sub.js"></script>
	<script type="text/javascript" src="js/appear.js"></script>	
</body>
</html>