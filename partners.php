<!DOCTYPE html>
<html>
<head>
	<?php
	@include("partials/head.php");
	?>
	<title>Projekcje - Konferencja graficzna - <?php echo PARTNERS;?></title>

</head>
<body class="partners-body">
<!--block for animation-->
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
					<div class="col xl3 l3 m6 s12 partner wow animated fadeInDown"
						 data-wow-delay="<?php echo 0.1*$i;?>s"
						 data-wow-offset="-300"
						 data-wow-duration="0.5s">
						<div class="inner">
							<a href="<?php echo constant(PARTNER_LINK_.$i); ?>"
							   class="center-align transition flex flex-center border" target="_blank">
								<img src="img/partners/projections-partners_<?php echo $i ?>.png"
									 alt="<?php echo PARTNERS;?>" class="partner-image">
							</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo PARTNERS;?>
			</p>
			<div>
				<?php for($i = 3; $i < 13; $i++){?>
					<div class="col xl3 l3 m6 s12 partner wow animated fadeInDown"
						 data-wow-delay="<?php echo 0.1*($i-2);?>s"
						 data-wow-offset="-300"
						 data-wow-duration="0.5s">
						<?php if($i == 7 ) {?>
							<div class="inner flex flex-center center-align border">
									<img src="img/partners/projections-partners_<?php echo $i ?>.png"
										 alt="<?php echo PARTNERS;?>" class="partner-image">
							</div>
						<?php } else{ ?>
						<div class="inner">
							<a href="<?php echo constant(PARTNER_LINK_.$i); ?>"
							   class="center-align transition flex flex-center border" target="_blank">
								<img src="img/partners/projections-partners_<?php echo $i ?>.png"
									 alt="<?php echo PARTNERS;?>" class="partner-image">
							</a>
						</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo MEDIA;?>
			</p>
			<div>
				<?php for($i = 13; $i < 21; $i++){?>
					<div class="col xl3 l3 m6 s12 partner wow animated fadeInDown"
						 data-wow-delay="<?php echo 0.1*($i-12);?>s"
						 data-wow-offset="-300"
						 data-wow-duration="0.5s">
						<div class="inner">
							<a href="<?php echo constant(PARTNER_LINK_.$i); ?>"
							   class="center-align transition flex flex-center border" target="_blank">
								<img src="img/partners/projections-partners_<?php echo $i ?>.png"
									 alt="<?php echo PARTNERS;?>" class="partner-image">
							</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="sponsors col l12 left-align">
			<p class="blockTitle"><?php echo ORGS;?>
			</p>
			<div>
				<?php for($i = 21; $i < 25; $i++){?>
					<div class="col xl3 l3 m6 s12 partner wow animated fadeInDown"
						 data-wow-delay="<?php echo 0.1*($i-20);?>s"
						 data-wow-offset="-300"
						 data-wow-duration="0.5s">
						<div class="inner">
							<a href="<?php echo constant(PARTNER_LINK_.$i); ?>"
							   class="center-align transition flex flex-center border" target="_blank">
								<img src="img/partners/projections-partners_<?php echo $i ?>.png"
									 alt="<?php echo PARTNERS;?>" class="partner-image">
							</a>
						</div>
					</div>
				<?php } ?>
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