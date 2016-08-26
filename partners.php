<!DOCTYPE html>
<html>
<head>
	<title>Meta title</title>
	<?php
	@include("partials/head.php");
	?>

</head>
<body class="partners-body">
<!--block for animation-->
<!--TODO: create unique block for the page-->
<?php
@include("partials/preloader-partners.html")
?>
<section class="static-content transition">
	<div class="container">

		<!--header-->
		<?php
		@include("partials/top.html")
		?>

		<div class="fillAndCenter main sub partners-main flex flex-center padding-2x" data-parallax='{"y" : -300, "smoothness": 20}'>
			<div class="inside">
				<p class="mainTitle"><?php echo PARTNERS;?></p>
				<p class="note"><?php echo PARTNERS_NOTE;?></p>
			</div>
		</div>
		<!--button for menu-->
		<div data-offset="-250"
			 data-id="#partnersInfoSection" class="navigation partners-nav animated fadeInUp wow" data-wow-delay="1s">
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</div>
		<?php
		@include("partials/menu-button.html")
		?>
	</div>
</section>
<section class="scrollableContent relative partners-section"
		 data-parallax='{"y" : -300, "from-scroll": 0, "distance": 0, "smoothness": 10}'
		 id="partnersInfoSection">
	<div class="container">
		<div class="sponsors col l12">
			<p class="blockTitle left-align"><?php echo SPONSORS;?>
			</p>
			<div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center">
						<img src="img/partners/projections-partners_01.png"
							 alt="Allegro" class="partner-image">
					</div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center">
						<img src="img/partners/projections-partners_03.png"
							 alt="Redro" class="partner-image">
					</div>
				</div>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo PARTNERS;?>
			</p>
			<div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_05.png"
															 alt="CSSDesignAwards" class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_06.png"
															 alt="eduweb" class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_07.png"
															 alt="Komm." class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_08.png"
															 alt="Torpedov" class="partner-image"></div>
				</div>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo MEDIA;?>
			</p>
			<div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_05.png"
															 alt="CSSDesignAwards" class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_06.png"
															 alt="eduweb" class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_07.png"
															 alt="Komm." class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_08.png"
															 alt="Torpedov" class="partner-image"></div>
				</div>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo ORGS;?>
			</p>
			<div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_05.png"
															 alt="CSSDesignAwards" class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_06.png"
															 alt="eduweb" class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_07.png"
															 alt="Komm." class="partner-image"></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner flex flex-center"><img src="img/partners/projections-partners_08.png"
															 alt="Torpedov" class="partner-image"></div>
				</div>
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
<script type="text/javascript" src="js/partners.js"></script>
<script type="text/javascript" src="js/appear.js"></script>
</body>
</html>