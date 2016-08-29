<!DOCTYPE html>
<html>
<head>
	<?php
	@include("partials/head.php")
	?>
	<title>Projekcje - Konferencja graficzna - <?php echo WORKSHOPS;?></title>

</head>
<body>
	<!--block for animation-->
	<?php
		@include("partials/preloader-workshops.html");
	?>
	<section class="static-content transition workshop-static-section">
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
			<?php for($i =1; $i <=3; $i++){?>
				<div class="col s12 l4 m12 workshop-block wow animated fadeInUp"
					 data-wow-delay="<?php echo ($i-1)*0.2; ?>s">
					<div class="workshop-inner yellow-hover left-align transition modal-trigger"
						 data-open="#content<?php echo $i; ?>">
						<p class="blockTitle"><?php echo constant(WORKSHOPS_TITLE_.$i);?></p>
						<p class="blockSub"><?php echo constant(WORKSHOPS_SUBTITLE_.$i);?></p>
						<div class="filter relative">
							<img src="img/workshops/projections-workshops_<?php echo $i;?>.png"
								 alt="<?php echo constant(WORKSHOPS_TITLE_.$i);?>">
						</div>
						<p class="owner"><?php echo constant(WORKSHOPS_PERSON_.$i);?>
							<span> / <?php echo constant(WORKSHOPS_WEBSITE_.$i);?></span></p>
						<p class="block-content"><?php echo constant(WORKSHOPS_CONTENT_.$i);?></p>
					</div>
				</div>
			<?php }?>
		</div>
	</section>
	<?php for($i =1; $i <=3; $i++){?>

		<div class="workshop-popup" id="content<?php echo $i;?>">

			<div class="workshop-popup-header grey">
				<div class="close modal" data-close="#content<?php echo $i;?>">
					<span class="menu-close"></span>
				</div>
				<div class="workshop-popup-inner">
					<img src="img/workshops/projections-workshops-popup_<?php echo $i;?>.png"
						 alt="<?php echo constant(WORKSHOPS_TITLE_.$i);?>">
				</div>
			</div>

			<div class="workshop-popup-body white">
				<div class="workshop-popup-inner">
					<p class="absolute owner">
						<span><?php echo constant(WORKSHOPS_ROLE.$i);?> </span>
						<?php echo constant(WORKSHOPS_PERSON_.$i);?>
						<span> / <?php echo constant(WORKSHOPS_WEBSITE_.$i);?></span></p>
					<p class="blockTitle modal"><?php echo constant(WORKSHOPS_TITLE_.$i);?></p>
					<p class="blockSub modal"><?php echo constant(WORKSHOPS_SUBTITLE_.$i);?></p>
					<p>
						<a href="<?php echo $ticketsLink; ?>"
						   class="event-link yellow transition modal"><?php echo TICKETS; ?></a>
					</p>
					<p class="owner modal"><?php echo TICKETS_NOTE_1; ?>
					</p>
					<p class="owner modal">
						<span><?php echo TICKETS_NOTE_2; ?></span>
					</p>
				</div>
			</div>

			<div class="workshop-popup-footer grey">
				<div class="workshop-popup-inner">
					<p class="blockTitle small"><?php echo WORKSHOPS_TOPIC;?></p>
					<p class="block-content"><?php echo constant(WORKSHOPS_MODAL_CONTENT_.$i);?></p>
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
	<script type="text/javascript" src="js/appear.js"></script>
	<script type="text/javascript" src="js/workshops.js"></script>
</body>
</html>