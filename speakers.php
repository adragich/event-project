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

			<div class="fillAndCenter main sub flex flex-center padding-2x s speakers" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside">
					<p class="mainTitle"><?php echo SPEAKERS;?></p>
					<p class="note"><?php echo SPEAKERS_NOTE;?></p>
				</div>
			</div>
			<!--button for menu-->
			<div data-offset="0" data-id="#contentSection" class="navigation animated fadeInUp wow" data-wow-delay="1s">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>	
	<section class="scrollableContent relative" id="contentSection">
		<div class="container">
			<div class="col xl6 l12 m12 s12 speakerWrap fadeInUp" data-parallax='{"y" : -200, "from-scroll": 200, "distance": 1400, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/hermansson.jpg" alt="<?php echo SPEAKER_NAME_1;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_1;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_1;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_1;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_1;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 40}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/brown.jpg" alt="<?php echo SPEAKER_NAME_2;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_2;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_2;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_2;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_2;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -300, "from-scroll": 300, "distance": 1400, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/rog.jpg" alt="<?php echo SPEAKER_NAME_3;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_3;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_3;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_3;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_3;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/hopa-studio.jpg" alt="<?php echo SPEAKER_NAME_4;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_4;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_4;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_4;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_4;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -300, "from-scroll": 300, "distance": 1400, "smoothness": 40}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/hardziej.jpg" alt="<?php echo SPEAKER_NAME_5;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_5;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_5;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_5;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_5;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/wedzicka.jpg" alt="<?php echo SPEAKER_NAME_6;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_6;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_6;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_6;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_6;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
<!--	6		-->
			<div class="col xl6 l12 m12 s12 speakerWrap fadeInUp" data-parallax='{"y" : -200, "from-scroll": 200, "distance": 1400, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/hermansson.jpg" alt="<?php echo SPEAKER_NAME_7;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_7;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_7;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_7;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_7;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 40}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/brown.jpg" alt="<?php echo SPEAKER_NAME_8;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_8;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_8;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_8;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_8;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -300, "from-scroll": 300, "distance": 1400, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/rog.jpg" alt="<?php echo SPEAKER_NAME_9;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_9;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_9;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_9;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_9;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/hopa-studio.jpg" alt="<?php echo SPEAKER_NAME_10;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_10;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_10;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_10;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_10;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -300, "from-scroll": 300, "distance": 1400, "smoothness": 40}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/hardziej.jpg" alt="<?php echo SPEAKER_NAME_11;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_11;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_11;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_11;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_11;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap" data-parallax='{"y" : -250, "from-scroll": 300, "distance": 1600, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/wedzicka.jpg" alt="<?php echo SPEAKER_NAME_12;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_12;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_12;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_12;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_12;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<!--	6		-->
			<div class="col xl6 l12 m12 s12 speakerWrap fadeInUp" data-parallax='{"y" : -200, "from-scroll": 200, "distance": 1400, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
					<img src="img/speakers/hermansson.jpg" alt="<?php echo SPEAKER_NAME_13;?>">
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo SPEAKER_NAME_13;?></p>
						<p class="block-content"><?php echo SPEAKER_DESC_13;?> _</p>
						<p class="block-note"><?php echo SPEAKER_WEBSITE_13;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
					<a href="<?php echo SPEAKER_LINK_13;?>" class="learn-more-link yellow"><?php echo LEARN_MORE;?></a>
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