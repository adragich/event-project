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
			<div data-offset="-150" data-id="#workshopSection" class="navigation animated fadeInUp wow" data-wow-delay="1s">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
			<!--button for menu-->
			<?php
			@include("partials/menu-button.html")
			?>
		</div>
	</section>
	<section class="scrollableContent relative workshop-section" id="workshopSection"
			 data-parallax='{"y" : -150, "from-scroll": 0, "distance": 0, "smoothness": 10}'>
		<div class="container">
			<p class="blockTitle">Na wybrane warsztaty możesz zapisać się kupując bilet na konferencję !
				Warsztaty nie są dodatkowo płatne, lecz ilość miejsc jest ograniczona.</p>
			<p class="block-content ">Poniżej znajduje się lista warsztatów, które odbędą się podczas konferencji. 
				Kliknij i dowiedz się więcej o każdym z nich.
			</p>
		</div>
	</section>
	<section class="scrollableContent relative workshop-modal-section"
			 data-parallax='{"y" : -150, "from-scroll": 0, "distance": 0, "smoothness": 10}'>
		<div class="container">
			<div class="col s12 l4 m4 workshop-block wow animated fadeInUp" data-wow-delay="0s">
				<div class="workshop-inner left-align transition modal-trigger" data-open="#content1">
					<p class="blockTitle"><?php echo WORKSHOPS_TITLE_1;?></p>
					<p class="blockSub"><?php echo WORKSHOPS_SUBTITLE_1;?></p>
					<div class="filter relative">
						<img src="img/workshops/projections-workshops_1.png" alt="<?php echo WORKSHOPS_TITLE_1;?>">
					</div>
					<p class="owner"><?php echo WORKSHOPS_PERSON_1;?> <span>/ <?php echo WORKSHOPS_WEBSITE_1;?></span></p>
					<p class="block-content"><?php echo WORKSHOPS_CONTENT_1;?></p>
				</div>
			</div>
			<div class="col s12 l4 m4 workshop-block wow animated fadeInUp" data-wow-delay="0.2s">
				<div class="workshop-inner left-align transition modal-trigger" data-open="#content2">
					<p class="blockTitle"><?php echo WORKSHOPS_TITLE_2;?></p>
					<p class="blockSub"><?php echo WORKSHOPS_SUBTITLE_2;?></p>
					<div class="filter relative">
						<img src="img/workshops/projections-workshops_2.png" alt="<?php echo WORKSHOPS_TITLE_2;?>">
					</div>
					<p class="owner"><?php echo WORKSHOPS_PERSON_2;?> <span>/ <?php echo WORKSHOPS_WEBSITE_2;?></span></p>
					<p class="block-content"><?php echo WORKSHOPS_CONTENT_2;?></p>
				</div>
			</div>
			<div class="col s12 l4 m4 workshop-block wow animated fadeInUp" data-wow-delay="0.4s">
				<div class="workshop-inner left-align transition modal-trigger" data-open="#content3">
					<p class="blockTitle"><?php echo WORKSHOPS_TITLE_3;?></p>
					<p class="blockSub"><?php echo WORKSHOPS_SUBTITLE_3;?></p>
					<div class="filter relative">
						<img src="img/workshops/projections-workshops_3.jpg" alt="<?php echo WORKSHOPS_TITLE_3;?>">
					</div>
					<p class="owner"><?php echo WORKSHOPS_PERSON_3;?> <span>/ <?php echo WORKSHOPS_WEBSITE_3;?></span></p>
					<p class="block-content"><?php echo WORKSHOPS_CONTENT_3;?></p>
				</div>
			</div>
		</div>
	</section>
	<div class="workshop-popup" id="content1">

		<div class="workshop-popup-header grey">
			<div class="close" data-close="#content1">
				<span class="menu-close"></span>
			</div>
			<div class="workshop-popup-inner">
				<figure class="pic">
					<img src="" alt="">
				</figure>
			</div>
		</div>

		<div class="workshop-popup-body white">
			<div class="workshop-popup-inner">
					<p class="absolute owner"><?php echo WORKSHOPS_ROLE;?> <?php echo WORKSHOPS_PERSON_3;?> <span>/ <?php echo WORKSHOPS_WEBSITE_3;?></span></p>
					<p class="blockTitle"><?php echo WORKSHOPS_TITLE_1;?></p>
					<p class="blockSub"><?php echo WORKSHOPS_SUBTITLE_1;?></p>
					<p>
						<a href="EXTERNAL_LINK_FOR_TICKETS"
						   class="tickets event-link yellow transition toLeft display">Bilety</a>
					</p>
			</div>
		</div>

		<div class="workshop-popup-footer grey">
			<div class="workshop-popup-inner">
					<p class="blockTitle"><?php echo WORKSHOPS_TITLE_3;?></p>
					<p class="block-content"><?php echo WORKSHOPS_CONTENT_3;?></p>
			</div>
		</div>

	</div>
	<!--menu-->
	<?php
	@include("partials/sidebar.html")
	?>
	<?php
	@include("partials/scripts.html")
	?>
	<script type="text/javascript" src="js/appear.js"></script>
	<script type="text/javascript" src="js/workshops.js"></script>
</body>
</html>