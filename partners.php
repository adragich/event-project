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
		<div class="sponsors col l12 left-align">
			<p class="blockTitle left-align"><?php echo SPONSORS;?>
			</p>
			<div>
				<?php for($i = 1; $i < 3; $i++){?>
					<div class="col xl3 l3 m6 s12 partner">
						<div class="inner transition">
							<a href="<?php echo PARTNER_LINK_.$i; ?>" class="center-align flex flex-center" target="_blank">
								<img src="img/partners/projections-partners_<?php echo $i ?>.png"
									 alt="<?php echo PARTNERS;?>" class="partner-image">
							</a>
						</div>
					</div>
				<?php } ?>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_1; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_01.png"
								 alt="Allegro" class="partner-image">
						</a>
					</div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_2; ?>" class="center-align flex flex-center" target="_blank">
						<img src="img/partners/projections-partners_03.png"
							 alt="Redro" class="partner-image">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo PARTNERS;?>
			</p>
			<div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_3; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_05.png"
															 alt="CSSDesignAwards" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_4; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_06.png"
															 alt="eduweb" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_5; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_07.png"
															 alt="Komm." class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_6; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_08.png"
															 alt="Torpedov" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_7; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_05.png"
															 alt="CSSDesignAwards" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_8; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_06.png"
															 alt="eduweb" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_9; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_07.png"
															 alt="Komm." class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_10; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_08.png"
															 alt="Torpedov" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_11; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_07.png"
															 alt="Komm." class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_12; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_08.png"
															 alt="Torpedov" class="partner-image">
						</a></div>
				</div>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo MEDIA;?>
			</p>
			<div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_13; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_05.png"
								 alt="CSSDesignAwards" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_14; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_06.png"
								 alt="eduweb" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_15; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_07.png"
								 alt="Komm." class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_16; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_08.png"
								 alt="Torpedov" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_17; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_05.png"
								 alt="CSSDesignAwards" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_18; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_06.png"
								 alt="eduweb" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_19; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_07.png"
								 alt="Komm." class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_20; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_08.png"
								 alt="Torpedov" class="partner-image">
						</a></div>
				</div>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo ORGS;?>
			</p>
			<div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_21; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_05.png"
								 alt="CSSDesignAwards" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_22; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_06.png"
								 alt="eduweb" class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_23; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_07.png"
								 alt="Komm." class="partner-image">
						</a></div>
				</div>
				<div class="col xl3 l3 m6 s12 partner">
					<div class="inner transition">
						<a href="<?php echo PARTNER_LINK_24; ?>" class="center-align flex flex-center" target="_blank">
							<img src="img/partners/projections-partners_08.png"
								 alt="Torpedov" class="partner-image">
						</a></div>
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