<!DOCTYPE html>
<html>
<head>
	<?php
		@include("partials/head.php");
		$i = $_GET['speaker'] ? : '0';
	?>
	<title>Projekcje - Konferencja graficzna - <?php echo constant(SPEAKER_NAME_.$i);?></title>

</head>
<body>
	<!--block for animation-->
	<?php
		@include("partials/preloader-battles.html");
	?>
	<section class="static-content transition">
		<div class="container">
			<!--header-->
			<?php
				@include("partials/top-battles.html");
			?>

			<div class="main fillAndCenter battles sub flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
				<div class="inside">
					<p class="mainTitle"><?php echo constant(SPEAKER_NAME_.$i);?></p>
					<p class="note"><?php echo constant(SPEAKER_DESC_.$i);?></p>
					<a href="//www.<?php echo constant(SPEAKER_WEBSITE_.$i);?>" class="event-link display apply-trigger yellow toLeft">
						<?php echo constant(SPEAKER_WEBSITE_.$i);?></a>
				</div>
			</div>
			<!--button for menu-->
			<?php
			@include("partials/menu-button.html")
			?>
			<div class="navigation battles" data-offset="0"
				 data-id="#battleInfoSection" data-parallax='{"y" : -300, "smoothness": 20}'>
				<i class="fa fa-angle-down" aria-hidden="true" ></i>
			</div>
		</div>
	</section>	
	<section class="battle-info-wrap relative" id="battleInfoSection">
		<div class="container">
			<div class="battle-info">
				<p class="mainTitle battle-info small image-title animated wow fadeInDown" data-wow-delay="0s">
					Amsterdam
				</p>
				<div class="inside battle-info">
					<p class="block-content animated wow fadeInUp" data-wow-delay="0s">
						<?php echo constant(SPEAKER_FULL_DESC_.$i);?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<?php
		@include("partials/sidebar.html");
		@include("partials/scripts.html");
	?>
	<script type="text/javascript" src="js/uploadfile.min.js"></script>
	<script type="text/javascript" src="js/inputmask.js"></script>
	<script type="text/javascript" src="js/sub.js"></script>
	<script type="text/javascript" src="js/appear.js"></script>
	<script type="text/javascript" src="js/application.js"></script>
</body>
</html>