<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php");
	?>
	<title>Projekcje - Konferencja graficzna - <?php echo SPEAKERS;?></title>

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

			<div class="fillAndCenter main sub flex flex-center padding-2x s speakers"
				 data-parallax='{"y" : -300, "smoothness": 20}'>
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
	<section class="scrollableContent relative" id="contentSection"
			 data-parallax='{"y" : -100, "smoothness": 20}'>
		<div class="container">

			<?php for($i = 1; $i <= 16; $i++){?>

				<div class="col xl6 l6 m12 s12 speakerWrap fadeInUp"
					 data-parallax='{"y" : -<?php $val = $i % 2 == 0 ? '100' : '150'; echo $val; ?>, "distance": 1400, "smoothness": 10}'>
					<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0.2s">
						<img src="img/speakers/speaker_<?php echo $i;?>.jpg"
							 alt="<?php echo constant(SPEAKER_NAME_.$i);?>">
						<div class="l12 speaker-info">
							<p class="blockTitle"><?php echo constant(SPEAKER_NAME_.$i);?></p>
							<p class="block-content"><?php echo constant(SPEAKER_DESC_.$i);?></p>
							<p class="block-note">
								 <a href="//www.<?php echo constant(SPEAKER_WEBSITE_.$i);?>"
									target="_blank" class="relative">
									<span class="innerHoverStripe absolute transition">
									</span>
									 <span class="relative">
										 www.<?php echo constant(SPEAKER_WEBSITE_.$i);?>
									 </span>
								 </a>
							</p>
						</div>
					</div>
					<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0.2s">
						<a href="<?php echo constant(SPEAKER_LINK_.$i);?>" class="learn-more-link yellow"
						   target="_blank"><?php echo LEARN_MORE;?></a>
					</div>
				</div>

			<?php } ?>
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