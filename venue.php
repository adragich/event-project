<!DOCTYPE html>
<html>
<head>
	<?php
	@include("partials/head.php");
	?>
	<title><?php echo META_TITLE;?> - <?php echo PLACE;?></title>

</head>
<body class="place-body">
<!--block for animation-->
<!--TODO: create unique block for the page-->
<?php
@include("partials/preloader-place.html")
?>
<section class="transition white">
	<div class="container">

		<!--header-->
		<?php
		@include("partials/top.html")
		?>

		<div class="main fillAndCenter about-us inner-page place sub flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
			<div class="inside">
				<p class="mainTitle"><?php echo PLACE_MAIN_TITLE;?></p>
				<p class="note"><?php echo PLACE_NOTE;?>.</p>
			</div>
		</div>
	</div>
	<!--button for menu-->
	<div class="navigation animated fadeInUp wow" data-wow-delay="1s" data-wow-duration="1s" data-offset="-50"
		 data-id="#placeInfoSection">
		<i class="fa fa-angle-down"  data-parallax='{"y" : -300, "smoothness": 20}' aria-hidden="true"></i>
	</div>
	<?php
	@include("partials/menu-button.html")
	?>
	<div class="grey-corner-left-top"></div>
</section>
<section class="scrollableContent place-section relative"
		 data-parallax='{"y" : -50, "from-scroll": 200, "distance": 1400, "smoothness": 10}'
		 id="placeInfoSection">
	<div class="container">
		<div class="col l12 m12 s12 placeWrap flex flex-center fadeInUp" data-parallax='{"y" : -200, "from-scroll": 200, "distance": 1400, "smoothness": 10}'>
			<div class="placeLogo">
				<img src="img/partners/projections-partners_3.png" alt="Concordia Design">
			</div>
			<div class="col l5 s12 place-photo animated fadeInUp wow" data-wow-delay="0.5s">
				<img src="img/place/projections-venue_1.jpg" alt="Sala expo w Concordia Design">
			</div>
			<div class="col l7 s12 place-info animated fadeInUp wow" data-wow-delay="0.5s">
				<p class="blockTitle"><?php echo PLACE_TITLE_1;?></p>
				<p class="block-content"><?php echo PLACE_DESCRIPTION_1;?>
				</p>
			</div>

		</div>
		<div class="col xl6 l6 m6 s12 placeWrap" data-parallax='{"y" : -100, "from-scroll": 300, "distance": 1600, "smoothness": 40}'>

				<img src="img/place/projections-venue_2.jpg" alt="Sale warsztatowe w Concordia Design"
					 class="animated fadeInUp wow" data-wow-delay="0.25s">
				<div class="place-offset"></div>
				<div class="l12 place-info animated fadeInUp wow" data-index='1' data-wow-delay="0.25s">
					<p class="blockTitle"><?php echo PLACE_TITLE_2;?></p>
					<p class="block-content">
						<?php echo PLACE_DESCRIPTION_2;?>
					</p>
				</div>
		</div>
		<div class="col xl6 l6 m6 s12 placeWrap" data-parallax='{"y" : -100, "from-scroll": 300, "distance": 1400, "smoothness": 20}'>

				<div class="l12 place-info animated fadeInUp wow" data-index='2' data-wow-delay="0.25s">
					<p class="blockTitle"><?php echo PLACE_TITLE_3;?></p>
<!--					add class 'big' to blockTitle to increase font-size-->
					<p class="block-content">
						<?php echo PLACE_DESCRIPTION_3;?>
					</p>
				</div>
				<div class="place-offset"></div>
				<img src="img/place/projections-venue_3.jpg" alt="Space" class="animated fadeInUp wow" data-wow-delay="0.25s">
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