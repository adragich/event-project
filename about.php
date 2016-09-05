<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php");
	?>
	<title><?php echo META_TITLE;?> - <?php echo ABOUT_US;?></title>

</head>
<body class="about-us-body">
	<!--block for animation-->
	<!--TODO: create unique block for the page-->
	<?php
		@include("partials/preloader-about-us.html")
	?>
	<section class="transition white static-content">
		<div class="container">

			<!--header-->
			<?php
				@include("partials/top.html")
			?>

			<div class="main sub flex flex-center padding-2x fillAndCenter"
				 data-parallax='{"y" : -200, "smoothness": 20}'>
				<div class="inside">
					<p class="mainTitle"><?php echo ABOUT_US_MAIN_TITLE;?></p>
					<p class="note"><?php echo ABOUT_US_NOTE;?>.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="transition white">
		<div class="container">
			<div  id="aboutUsSection"
				  class="main about-us sub info flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside text">
					<div class="about-us-info l12">
						<p class="blockTitle animated fadeInUp wow" data-wow-delay="0s">
							<?php echo ABOUT_US_TITLE_1;?>
							</p>
						<p class="block-content animated fadeInUp wow" data-wow-delay="0s">
							<?php echo ABOUT_US_DESC_1;?>
						</p>
						<br><br>
						<p class="blockTitle section-two animated fadeInUp wow" data-wow-delay="0s">
							<?php echo ABOUT_US_TITLE_2;?>
							</p>
						<p class="block-content animated fadeInUp wow" data-wow-delay="0s">
							<?php echo ABOUT_US_DESC_2;?>
							</p>
					</div>
				</div>
			</div>
			<div class="anim-space-relative" data-parallax='{"y" : -300, "smoothness": 20}'>
				<img src="img/about/GIF-onas_<?php echo $_SESSION['lang'] ? : 'pl'; ?>.gif" alt="">
			</div>
			<div class="main about-us sub orgs flex flex-center padding-2x" data-parallax='{"y" : -350, "smoothness": 20}'>
				<div class="inside orgs">
						<p class="mainTitle">
							<?php echo ABOUT_US_TITLE_3;?>
							</p>
						<br>
						<p class="note">
							<?php echo ABOUT_US_DESC_3;?>
							</p>
					</div>
				</div>
			</div>
			<!--button for menu-->
			<div class="navigation animated fadeInUp wow"
				 data-wow-delay="1s"
				 data-wow-duration="1s"
				 data-id="#aboutUsSection"
				 data-offset="-250">
				<i class="fa fa-angle-down" data-parallax='{"y" : -300, "smoothness": 20}' aria-hidden="true"></i>
			</div>
			<?php
				@include("partials/menu-button.html")
			?>
		</div>
	</section>
	<section class="scrollableContent about relative"
			 data-parallax='{"y" : -100, "smoothness": 20}'>
		<div class="container">

			<?php for($i = 1; $i <= 4; $i++){?>

				<div class="col xl6 l6 m12 s12 speakerWrap fadeInUp"
					 data-parallax='{"y" : -<?php $val = $i % 2 == 0 ? '150' : '100'; echo $val; ?>, "distance": 1400, "smoothness": 10}'>
					<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0s">
						<div class="light-grey flex flex-center about-image">
							<img src="img/about/<?php echo constant(ABOUT_IMAGE_.$i);?>" alt="<?php echo ABOUT_TITLE_1;?>">
						</div>
						<div class="l12 speaker-info">
							<p class="blockTitle"><?php echo constant(ABOUT_TITLE_.$i);?></p>
							<p class="block-content"><?php echo constant(ABOUT_SUBTITLE_.$i);?></p>
							<p class="block-note">
								<a href="//www.<?php echo constant(ABOUT_WEBSITE_.$i);?>"
								   target="_blank" class="relative">
									<span class="innerHoverStripe absolute transition">
									</span>
									<span class="relative">
										<?php echo constant(ABOUT_WEBSITE_.$i);?>
									 </span>
								</a>
							</p>
						</div>
					</div>
					<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0s">
						<a href="<?php echo constant(ABOUT_LINK_.$i);?>" class="learn-more-link yellow modal-trigger"
						   target="_blank" data-open="#content<?php echo $i;?>"><?php echo LEARN_MORE;?></a>
					</div>
				</div>

			<?php } ?>
		</div>
	</section>

	<?php for($i =1; $i <= 4; $i++){?>

		<div class="workshop-popup" id="content<?php echo $i;?>">

			<div class="workshop-popup-header grey">
				<div class="close modal" data-close="#content<?php echo $i;?>">
					<span class="menu-close"></span>
				</div>
				<div class="workshop-popup-inner">
					<img src="img/about/projections-about-popup_<?php echo $i;?>.<?php echo ABOUT_PIC_MIME;?>"
						 alt="<?php echo constant(ABOUT_TITLE_.$i);?>">
				</div>
			</div>

			<div class="workshop-popup-body white">
				<div class="workshop-popup-inner">
					<p class="absolute owner">
						<a href="//www.<?php echo constant(ABOUT_WEBSITE_.$i);?>"
						   target="_blank" class="relative">
							<span class="innerHoverStripe absolute transition">
									</span>
							<span><?php echo constant(ABOUT_WEBSITE_.$i);?></span></a></p>
					<p class="blockTitle modal"><?php echo constant(ABOUT_TITLE_.$i);?></p>
				</div>
			</div>

			<div class="workshop-popup-footer grey">
				<div class="workshop-popup-inner">
					<p class="block-content"><?php echo constant(ABOUT_CONTENT_.$i);?></p>
				</div>
			</div>

		</div>

	<?php } ?>
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