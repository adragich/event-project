<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php");
	?>
	<title>Projekcje - Konferencja graficzna - <?php echo ABOUT_US;?></title>

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
					<p class="mainTitle"><?php echo ABOUT_US;?></p>
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
				<img src="img/space.jpg" alt="">
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
			<div class="col xl6 l12 m12 s12 speakerWrap fadeInUp"
				 data-parallax='{"y" : -100, "distance": 1400, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0s">
					<div class="light-grey flex flex-center about-image">
						<img src="img/about/<?php echo ABOUT_IMAGE_1;?>" alt="<?php echo ABOUT_TITLE_1;?>">
					</div>
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo ABOUT_TITLE_1;?></p>
						<p class="block-content"><?php echo ABOUT_SUBTITLE_1;?> _</p>
						<p class="block-note"><?php echo ABOUT_WEBSITE_1;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0s">
					<a href="<?php echo ABOUT_LINK_1;?>" class="learn-more-link yellow"
						target="_blank"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap"
				 data-parallax='{"y" : -150, "distance": 1600, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0s">
					<div class="light-grey flex flex-center about-image">
						<img src="img/about/<?php echo ABOUT_IMAGE_2;?>" alt="<?php echo ABOUT_TITLE_2;?>">
					</div>
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo ABOUT_TITLE_2;?></p>
						<p class="block-content"><?php echo ABOUT_SUBTITLE_2;?> _</p>
						<p class="block-note"><?php echo ABOUT_WEBSITE_2;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0s">
					<a href="<?php echo ABOUT_LINK_2;?>" class="learn-more-link yellow"
					   target="_blank"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap"
				 data-parallax='{"y" : -100, "distance": 1400, "smoothness": 10}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0s">
					<div class="light-grey flex flex-center about-image">
						<img src="img/about/<?php echo ABOUT_IMAGE_3;?>" alt="<?php echo ABOUT_TITLE_3;?>">
					</div>
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo ABOUT_TITLE_3;?></p>
						<p class="block-content"><?php echo ABOUT_SUBTITLE_3;?> _</p>
						<p class="block-note"><?php echo ABOUT_WEBSITE_3;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0s">
					<a href="<?php echo ABOUT_LINK_3;?>" class="learn-more-link yellow"
					   target="_blank"><?php echo LEARN_MORE;?></a>
				</div>
			</div>
			<div class="col xl6 l12 m12 s12 speakerWrap"
				 data-parallax='{"y" : -150, "distance": 1600, "smoothness": 20}'>
				<div class="col l9 s12 speaker animated fadeInUp wow" data-wow-delay="0s">
					<div class="light-grey flex flex-center about-image">
						<img src="img/about/<?php echo ABOUT_IMAGE_4;?>" alt="<?php echo ABOUT_TITLE_4;?>">
					</div>
					<div class="l12 speaker-info">
						<p class="blockTitle"><?php echo ABOUT_TITLE_4;?></p>
						<p class="block-content"><?php echo ABOUT_SUBTITLE_4;?> _</p>
						<p class="block-note"><?php echo ABOUT_WEBSITE_4;?></p>
					</div>
				</div>
				<div class="col m3 s12 stick-bottom animated fadeIn wow" data-wow-delay="0s">
					<a href="<?php echo ABOUT_LINK_4;?>" class="learn-more-link yellow"
					   target="_blank"><?php echo LEARN_MORE;?></a>
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