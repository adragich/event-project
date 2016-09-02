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
@include("partials/preloader-speaker.html");
?>
<section class="static-content transition workshop-static-section">
	<div class="container">

		<!--header-->
		<?php
		@include("partials/top.html");
		?>

		<div class="fillAndCenter main flex flex-center padding-2x inner-page program">
			<div class="inside">
				<p class="mainTitle"><?php echo constant(SPEAKER_NAME_.$i);?></p>
				<p class="note"><?php echo constant(SPEAKER_DESC_.$i);?></p>
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
		 data-parallax='{"y" : -50, "from-scroll": 0, "distance": 0, "smoothness": 10}'>
	<div class="container">
		<p class="blockTitle"><?php echo constant(SPEAKER_CITY_.$i);?></p>
		<p class="block-content "><?php echo constant(SPEAKER_FULL_DESC_.$i);?>
		</p>
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
<script type="text/javascript" src="js/workshops.js"></script>
</body>
</html>